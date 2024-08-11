<?= $this->extend('dashboard/template') ?>


<?php $this->section('page') ?>

<div class="row mb-3 pb-1">
    <div class="col-12">
        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
            <div class="flex-grow-1">
                <h1 class="fw-bolder p-0">Clientes</h1>
            </div>
            <div class="mt-3 mt-lg-0">
                <!--end col-->
                <div class="col-auto">
                    <button class="btn btn-soft-success waves-effect waves-light" data-bs-toggle="modal"
                        data-bs-target="#clienteModal">
                        <i class="ri-add-circle-line align-middle me-1"></i> Novo Cliente
                    </button>
                </div>
                <!--end row-->
                </form>
            </div>
        </div><!-- end card header -->
    </div>
    <!--end col-->
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
                            <th scope="col">Telefone/WhatsApp</th>
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


<div class="modal fade sendForm" id="clienteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="clienteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="clienteModalLabel">Cadastro de cliente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?= form_open('api/v1/customer', 'class="g-3 needs-validation" novalidate') ?>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="name">Nome completo</label>
                    <input type="text" class="form-control" placeholder="Nome do seu cliente" required minlength="5" name="name" id="name">
                    <div class="invalid-feedback">
                        Informe o nome do seu cliente
                    </div>
                </div>
                <div class="mb-3">
                    <label for="doc">CPF</label>
                    <input type="text" class="form-control" placeholder="000.000.000-00" required name="doc" id="doc">
                    <div class="invalid-feedback">
                        Informe o CPF do seu cliente
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" placeholder="email@xemplo.com" required name="email" id="email">
                    <div class="invalid-feedback">
                        Informe o e-mail do seu cliente
                    </div>
                </div>
                <div class="mb-3">
                    <label for="phone">Telefone/WhatsApp</label>
                    <input type="text" class="form-control" placeholder="(00) 0000-0000" required name="phone" id="phone">
                    <div class="invalid-feedback">
                        Informe o telefone/WhatsApp do seu cliente
                    </div>
                </div>
                <div class="mb-3">
                    <label for="date">Data de nascimento</label>
                    <input type="date" name="date" id="date" class="form-control" placeholder="01/01/2010" required max="<?php $ano = date('Y') - 16;
                                                                                                                            echo $ano . '-' . date("m-d") ?>">
                    <div class="invalid-feedback">
                        Informe a data de nascimento do seu cliente
                    </div>
                </div>
                <div class="mb-3">
                    <label for="genero">Gênero</label>
                    <select name="genero" id="genero" class="form-select" required>
                        <option value="" selected>Escolha uma opção</option>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="outros">Outros</option>
                    </select>
                    <div class="invalid-feedback">
                        Informe o sexo do seu cliente
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light">
                    <i class="ri-add-circle-line align-middle me-1"></i> Cadastrar
                </button>
            </div>
            </form>
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
            <?= form_open('', 'class="g-3 needs-validation" novalidate') ?>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="idCustumer">ID CLIENTE - {HIDDEN}</label>
                    <input type="text" class="form-control" name="idCustumer" id="idCustumer" disabled>
                </div>
                <div class="mb-3">
                    <label for="nameCustumer">Cliente</label>
                    <input type="text" class="form-control" name="nameCustumer" id="nameCustumer" disabled>
                </div>

                <div class="mb-3">
                    <label for="dataAgendamento">Data agendamento</label>
                    <input type="text" class="form-control" name="dataAgendamento" id="dataAgendamento" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light"><i class="ri-add-circle-line align-middle me-1"></i> Agendar</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>

<?php $this->section('js'); ?>
<!-- cleave.js -->
<script src="/assets/libs/cleave.js/cleave.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/pt.js"></script>
<script>
    $(document).ready(function() {
        searchClient()
        atualizarTabela()
        sendsForms()

        flatpickr("#dataAgendamento", {
            locale: "pt",
            dateFormat: "d/m/Y H:i", // Define o formato da data
            minDate: "today", // Permite apenas datas até hoje
            defaultDate: [new Date().fp_incr(-30), "today"],
            enableTime: true, // Habilita a seleção de hora
            time_24hr: true, // Usa o formato de 24 horas
        });

        var cleaveTelFixo = new Cleave('#phone', {
            numericOnly: true,
            delimiters: ['(', ') ', ' ', '-'],
            blocks: [0, 2, 1, 4, 4]
        });



        var cleaveCpf = new Cleave('#doc', {
            numericOnly: true,
            delimiters: ['.', '.', '-'],
            blocks: [3, 3, 3, 2],
            uppercase: true
        });
    });

    function agendamento(id, name) {
        $("#nameCustumer").val(name)
        $("#idCustumer").val(id)
        $("#agendamentoModal").modal('show')

        console.log(id + ' ' + name);
    }

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
                        //console.log(row);
                        $('#listaUsuarios').append(`
                            <tr>
                                <td>${row.id}</td>
                                <td>${row.name}<br><span class="text-muted">${row.email}</span></td>
                                <td>${row.phone}</td>
                                <td>${row.birthDate}</td>
                                <td>${row.anamneses_count}</td>
                                <td class="text-end">
                                    <div class="btn-group btn-group-sm">
                                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="agendamento('${row.id}', '${row.name}')">AGENDAR</button>
                                        <a href="${_baseUrl}dashboard/tp/clientes/${row.id}" onclick="recursoIndisponivel()" type="button" class="btn btn-dark waves-effect waves-light">PERFIL</a>
                                    </div>
                                </td>
                            </tr>
                        `);
                    })
                }
            })

        //console.log(url);
    }

    function sendsForms() {
        $('.sendForm').ajaxForm({
            beforeSubmit: function(formData, jqForm, options) {
                // Ações antes de enviar o formulário, se necessário
            },
            success: function(responseText, statusText, xhr, $form) {
                atualizarTabela();
                //$('.sendForm')[0].reset();
                Swal.fire({
                    title: 'Cadastrado!',
                    icon: 'success',
                });
            },
            error: function(xhr, status, error) {
                if (xhr.responseJSON && xhr.responseJSON.messages) {
                    exibirMensagem('error', xhr.responseJSON);
                } else {
                    exibirMensagem('error', {
                        messages: {
                            error: 'Erro desconhecido'
                        }
                    });
                }
            }
        });
    }


    // Função para exibir mensagens
    function exibirMensagem(type, error) {
        // Extrai as mensagens de erro do objeto 'error'
        let messages = error.messages;
        // Inicializa uma string para armazenar as mensagens formatadas
        let errorMessage = '';
        // Itera sobre as mensagens de erro e as formata
        for (let key in messages) {
            if (messages.hasOwnProperty(key)) {
                errorMessage += `${messages[key]}\n`;
            }
        }
        // Exibe a mensagem de erro formatada
        Swal.fire({
            title: type === 'error' ? "Erro ao incluir registro" : "Mensagem",
            html: errorMessage,
            icon: type,
        });
    }
</script>




<?php $this->endSection(); ?>