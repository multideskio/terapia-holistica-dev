<?= $this->extend('dashboard/template') ?>


<?php $this->section('page') ?>

<div class="row mb-3 pb-1">
    <div class="col-12">
        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
            <div class="flex-grow-1">
                <h1 class="fw-bolder p-0">Agendados</h1>
            </div>
            <div class="mt-3 mt-lg-0">
                <!--end col-->
                <div class="col-auto">
                    <a href="<?= base_url('dashboard/tp/clientes') ?>" class="btn btn-soft-success waves-effect waves-light">
                        <i class="ri-add-circle-line align-middle me-1"></i> Novo agendamento
                    </a>
                </div>
                <!--end row-->
                </form>
            </div>
        </div><!-- end card header -->
    </div>
    <!--end col-->
</div>


<div>
    <div class="page-link mt-1 mb-1" id="numResults"></div>
    <div class="row" id="agendamentos">
    </div>
    <div id="pager" class="mt-2">

    </div>
</div>

<?php $this->endSection(); ?>

<?php $this->section('js'); ?>
<script>
    $(document).ready(function() {
        search();
        listAgendamentos();
    });

    function search() {
        $("#inSearchBtn").click(function() {
            var search = $("#inSearch").val();
            listAgendamentos(search);
        });

        $("#inSearch").keypress(function(e) {
            if (e.which === 13) {
                var search = $("#inSearch").val();
                listAgendamentos(search);
            }
        });

        $("#pager").on("click", "a", function(e) {
            e.preventDefault();
            var href = $(this).attr("href");

            // Extrair a query string a partir da URL
            var queryString = href.split('?')[1];

            var urlParams = new URLSearchParams(queryString);
            var page = urlParams.get('page');
            var search = urlParams.get('search');

            /*console.log("Search: ", search);
            console.log("Page: ", page);
            console.log("URL Params: ", urlParams);
            console.log("Href: ", href);*/

            if (page && !isNaN(page)) {
                listAgendamentos(search, page);
            }
        });
    }

    function listAgendamentos(search = '', page = 1) {
        $('.noresult').hide();
        $('#agendamentos').empty();

        $('#resultShow').hide();
        $('#loadResult').show();

        // Monta a URL da requisição AJAX com os parâmetros search e page, se estiverem definidos
        var url = _baseUrl + "api/v1/appointments?";
        if (search) {
            url += "search=" + encodeURIComponent(search) + "&";
        }
        url += "page=" + page;

        $.getJSON(url)
            .done(function(data) {

                $("#pager").html(data.pager);
                $("#numResults").html(data.num);

                if (data.rows.length === 0) {
                    $('#resultShow').hide();
                    $('.noresult').show();
                    $('#loadResult').hide();
                } else {
                    $('#loadResult').hide();
                    $('#resultShow').show();
                    $('.noresult').hide();

                    $.each(data.rows, function(index, row) {
                        $('#agendamentos').append(`
                        <div class="col-lg-4 col-md-6">
                            <div class="card ribbon-box border ribbon-fill right shadow-none card-animate">
                                <div class="card-body">
                                <div class="ribbon text-dark">${row.id}</div>
                                    <h3 class="mt-3">
                                        <h5>${row.name}</h5>
                                    </h3>
                                    <p class="text-muted"></p>
                                    <div class="d-flex gap-4 mb-3">
                                        <div>
                                            <i class="ri-time-line text-primary me-1 align-bottom"></i>
                                            ${row.date}
                                        </div>
                                    </div>

                                    <div class="mt-4 hstack gap-2">
                                        <a href="#!" class="btn btn-soft-danger w-100 waves-effect waves-light">Cancelar</a>
                                        <a href="${_baseUrl}dashboard/tp/anamnese/${row.id_customer}" class="btn btn-soft-success w-100 waves-effect waves-light">Iniciar atendimento</a>
                                    </div>
                                </div>
                            </div>
                        </div>`);
                    });
                }
            })
            .fail(function(jqxhr, textStatus, error) {
                console.error("Request Failed: " + textStatus + ", " + error);
                $('#loadResult').hide();
                $('.noresult').show();
            });

        //console.log("Request URL: ", url);
    }
</script>
<?php $this->endSection(); ?>