<?= $this->extend('dashboard/template') ?>
<?php $this->section('css') ?>
<link rel="stylesheet" href="/assets/css/custom/anamnese.css?v=<?= time() ?>">

<style>
    .card {
        border-radius: 15px;
        text-align: center;
    }

    .card-title {
        font-size: 2rem;
        font-weight: bold;
    }

    .card-subtitle {
        font-size: 1rem;
        color: #6c757d;
    }
</style>
<?php $this->endSection(); ?>
<?php $this->section('page') ?>

<div class="row mb-3 pb-1">
    <div class="col-12">
        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
            <div class="flex-grow-1">
                <h1 class="fw-bolder p-0">DASHBOARD</h1>
            </div>
            <div class="mt-3 mt-lg-0">
                <form action="javascript:void(0);">
                    <div class="row g-3 mb-0 align-items-center">
                        <div class="col-sm-auto">
                            <div class="input-group">
                                <input type="text" class="form-control border-0 dash-filter-picker shadow" id="dateSearch">
                                <div class="input-group-text bg-primary border-primary text-white">
                                    <i class="ri-calendar-2-line"></i>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-auto">
                            <button type="button" class="btn btn-soft-success" data-bs-toggle="modal" data-bs-target="#agendamentoModal">
                                <i class="ri-add-circle-line align-middle me-1"></i> Novo agendamento
                            </button>
                        </div>
                    </div>
                    <!--end row-->
                </form>
            </div>
        </div><!-- end card header -->
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="col-lg-12 mb-3">
    <!-- Danger Alert -->
    <div class="alert alert-danger alert-dismissible bg-danger text-white alert-label-icon fade show" role="alert">
        <i class="ri-error-warning-line label-icon"></i><strong>Danger</strong> - O frontend ainda não está soncrononizado com o backend
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

</div>

<div class="row">
    <div class="col-md-3">
        <div class="card mb-3 card-animate">
            <div class="card-body text-center">

                <div class="float-end">
                    <div class="dropdown card-header-dropdown">
                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-muted fs-18"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Today</a>
                            <a class="dropdown-item" href="#">Last Week</a>
                            <a class="dropdown-item" href="#">Last Month</a>
                            <a class="dropdown-item" href="#">Current Year</a>
                        </div>
                    </div>
                </div>

                <div class="d-flex" id="title">
                    <div class="flex-grow-1 ps-3">
                        <h5 class="text-muted text-uppercase fs-13 mb-0">Resumo</h5>
                    </div>
                </div>

                <div class="mt-4 pt-1">
                    <h4 class="fs-1 fw-bold ff-secondary text-info mb-0">
                        <span class="counter-value" data-target="100"></span>
                    </h4>
                    <p class="card-subtitle mb-3">Atendimentos</p>
                    <p class="text-muted">Finalizados: <b>100</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-3 card-animate">
            <div class="card-body text-center">

                <div class="float-end">
                    <div class="dropdown card-header-dropdown">
                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-muted fs-18"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Today</a>
                            <a class="dropdown-item" href="#">Last Week</a>
                            <a class="dropdown-item" href="#">Last Month</a>
                            <a class="dropdown-item" href="#">Current Year</a>
                        </div>
                    </div>
                </div>

                <div class="d-flex" id="title">
                    <div class="flex-grow-1 ps-3">
                        <h5 class="text-muted text-uppercase fs-13 mb-0">Cancelados</h5>
                    </div>
                </div>

                <div class="mt-4 pt-1">
                    <h4 class="fs-1 fw-bold ff-secondary text-danger mb-0">
                        <span class="counter-value" data-target="100"></span>
                    </h4>
                    <p class="card-subtitle mb-3">Atendimentos</p>
                    <p class="text-muted">Última semana: <b>100</b></p>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-3">
        <div class="card mb-3 card-animate">
            <div class="card-body text-center">

                <div class="float-end">
                    <div class="dropdown card-header-dropdown">
                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-muted fs-18"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Today</a>
                            <a class="dropdown-item" href="#">Last Week</a>
                            <a class="dropdown-item" href="#">Last Month</a>
                            <a class="dropdown-item" href="#">Current Year</a>
                        </div>
                    </div>
                </div>

                <div class="d-flex" id="title">
                    <div class="flex-grow-1 ps-3">
                        <h5 class="text-muted text-uppercase fs-13 mb-0">Anamneses</h5>
                    </div>
                </div>

                <div class="mt-4 pt-1">
                    <h4 class="fs-1 fw-bold ff-secondary text-warning mb-0">
                        <span class="counter-value" data-target="100"></span>
                    </h4>
                    <p class="card-subtitle mb-3">Anamneses</p>
                    <p class="text-muted">Último mês: <b>100</b></p>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-3">
        <div class="card mb-3 card-animate">
            <div class="card-body text-center">
                <div class="float-end">
                    <div class="dropdown card-header-dropdown">
                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-muted fs-18"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Today</a>
                            <a class="dropdown-item" href="#">Last Week</a>
                            <a class="dropdown-item" href="#">Last Month</a>
                            <a class="dropdown-item" href="#">Current Year</a>
                        </div>
                    </div>
                </div>

                <div class="d-flex" id="title">
                    <div class="flex-grow-1 ps-3">
                        <h5 class="text-muted text-uppercase fs-13 mb-0">Primeira consulta</h5>
                    </div>
                </div>

                <div class="mt-4 pt-1">
                    <h4 class="fs-1 fw-bold ff-secondary text-success mb-0">
                        <span class="counter-value" data-target="100"></span>
                    </h4>
                    <p class="card-subtitle mb-3">Consultas</p>
                    <p class="text-muted">Agendados: <b>10</b></p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card mb-3 card-animate">
            <div class="card-body">
                <div class="card-title">
                    <div class="fs-5">
                        Relatório de atendimentos
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div id="chartLine">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div id="chartPie">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->










<?php $this->endSection(); ?>
<?php $this->section('js'); ?>
<!-- linecharts init -->
<script src="/assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/pt.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        flatpickr("#dateSearch", {
            locale: "pt",
            mode: "range", // Ativa o modo de seleção de intervalo
            dateFormat: "d/m/Y", // Define o formato da data
            maxDate: "today", // Permite apenas datas até hoje
            minDate: new Date().fp_incr(-365),
            defaultDate: [new Date().fp_incr(-30), "today"]
        });
    });
    $(document).ready(function() {


        chartLine()
        chartPie()
    });

    function chartLine() {
        var options = {
            series: [{
                    name: "Anamneses - 2024",
                    data: [28, 29, 33, 36, 32, 32, 33]
                },
                {
                    name: "Agendamentos - 2024",
                    data: [12, 11, 14, 18, 17, 13, 13]
                }
            ],
            chart: {
                height: 350,
                type: 'line',
                dropShadow: {
                    enabled: true,
                    color: '#000',
                    top: 18,
                    left: 7,
                    blur: 10,
                    opacity: 0.2
                },
                zoom: {
                    enabled: false
                },
                toolbar: {
                    show: false
                }
            },
            colors: ['#77B6EA', '#545454'],
            dataLabels: {
                enabled: true,
            },
            stroke: {
                curve: 'smooth'
            },
            title: {
                text: 'Consultas vs. Anamneses',
                align: 'left'
            },
            grid: {
                borderColor: '#e7e7e7',
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                },
            },
            markers: {
                size: 1
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                title: {
                    text: 'Mês'
                }
            },
            yaxis: {
                title: {
                    text: 'Temperature'
                },
                min: 5,
                max: 40
            },
            legend: {
                position: 'top',
                horizontalAlign: 'right',
                floating: true,
                offsetY: -25,
                offsetX: -5
            }
        };

        var chart = new ApexCharts(document.querySelector("#chartLine"), options);
        chart.render();
    }


    function chartPie() {
        var options = {
            series: [15, 30, 25],
            chart: {
                type: 'pie',
            },
            labels: ['Consultas', 'Agendamentos', 'Anamneses'],
            title: {
                text: 'Consultas vs. Anamneses',
                align: 'left'
            },
            dataLabels: {
                dropShadow: {
                    enabled: false,
                }
            },
            legend: {
                position: 'bottom'
            }
        };

        var chart = new ApexCharts(document.querySelector("#chartPie"), options);
        chart.render();
    }
</script>
<?php $this->endSection(); ?>