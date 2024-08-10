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
<div class="col-xxl-12">
    <h1 class="fw-bolder p-0">DASHBOARD</h1>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="card bg-light mb-3 card-animate">
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
        <div class="card bg-light mb-3 card-animate">
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
        <div class="card bg-light mb-3 card-animate">
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
        <div class="card bg-light mb-3 card-animate">
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
    <div class="col-lg-8">
        <dic class="card">
            <div class="card-body">
                <div class="chart">

                </div>
            </div>
        </dic>
    </div>
</div>


<?php $this->endSection(); ?>
<?php $this->section('js'); ?>
<!-- linecharts init -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
    var options = {
        series: [{
                name: "High - 2013",
                data: [28, 29, 33, 36, 32, 32, 33]
            },
            {
                name: "Low - 2013",
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
            text: 'Average High & Low Temperature',
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
                text: 'Month'
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

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>
<?php $this->endSection(); ?>