<?= $this->extend('dashboard/template') ?>


<?php $this->section('page') ?>

<div class="flex-grow-1">
    <h1 class="fw-bolder p-0">Clientes</h1>
</div>

<div class="card">
    <div class="card-body">
        <div class="card-title">
            <span>Últimos cadastros</span>
        </div>

        <div class="mb-3 col-md-6 col-lg-4 mt-2">
            <div class="input-group">
                <input type="search" class="form-control" name="inSearch" id="inSearch" placeholder="Pesquisar...">
                <button class="btn btn-primary" type="button" id="inSearchBtn">
                    <i class="ri-search-line"></i>
                </button>
            </div>
        </div>

        <div class="page-link mt-1 mb-1" id="numResults"></div>

        <div id="resultShow" style="display: none;">
            <div class="table-responsive">
                <table class="table table-nowrap table-striped" style="width: 100%;">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Dt. de nascimento</th>
                            <th scope="col">Num. Anamneses</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody id="listaUsuarios">

                    </tbody>
                </table>
            </div>
            <div id="pager" class="mt-2"></div>
        </div>

        <div class="noresult" style="display: none">
            <div class="text-center">
                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                <h5 class="mt-2">Desculpe! Nenhum resultado encontrado</h5>
            </div>
        </div>
        <div id="loadResult">
            <div class="text-center">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <h5 class="mt-2">Buscando registros</h5>
            </div>
        </div>
    </div>
</div>





<div class="modal fade" id="agendamentoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="agendamentoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="agendamentoModalLabel">Agendamento</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="cliente">Cliente</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>

<?php $this->section('js'); ?>

<script>
    $(document).ready(function() {
        searchClient()
        atualizarTabela()

    });

    function searchClient() {
        $("#inSearchBtn").click(function() {
            var search = $("#inSearch").val();
            atualizarTabela(search);
        });

        $("#inSearch").keypress(function(e) {
            if (e.which === 13) {
                var search = $("#inSearch").val();
                atualizarTabela(search);
            }
        });

        $("#pager").on("click", "a", function(e) {
            e.preventDefault();
            var href = $(this).attr("href");
            var urlParams = new URLSearchParams(href);
            var page = urlParams.get('page');
            var search = urlParams.get('search');
            if (!isNaN(page)) {
                atualizarTabela(search, page);
            }
        });
    }

    function atualizarTabela(search = false, page = 1) {
        $('.noresult').hide();
        $('#listaUsuarios').empty();

        
        $('#resultShow').hide();
        $('#loadResult').show();

        // Monta a URL da requisição AJAX com os parâmetros search e page, se estiverem definidos
        var url = _baseUrl + "api/v1/customer?";
        if (search) {
            url += "search=" + search + "&";
        }
        if (page) {
            url += "page=" + page;
        }


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
                        console.log(row);
                        $('#listaUsuarios').append(`
                    <tr>
                        <td>${row.id}</td>
                        <td>${row.name}<br><span class="text-muted">${row.email}</span></td>
                        <td>${row.birthDate}</td>
                        <td>${row.anamneses_count}</td>
                        <td class="text-end">
                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-info waves-effect waves-light">AGENDAR</button>
                                <a href="${_baseUrl}dashboard/tp/clientes/${row.id}" type="button" class="btn btn-dark waves-effect waves-light">PERFIL</a>
                            </div>
                        </td> 
                    </tr>
                    `)
                    })
                }
            })

        console.log(url);
    }
</script>

<?php $this->endSection(); ?>