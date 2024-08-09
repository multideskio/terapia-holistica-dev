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
    <h1 class="fw-bolder p-0 m-0">DASHBOARD</h1>
</div>


<div class="row">
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Resumo</p>
                    </div>
                    <div class="flex-shrink-0">
                        <h5 class="text-success fs-14 mb-0">
                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.24 %
                        </h5>
                    </div>
                </div>
                <div class="d-flex align-items-end justify-content-between mt-4">
                    <div>
                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="100">0</span></h4>
                        <span class="text-muted">Atendimentos</span>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-success-subtle rounded fs-3">
                            <i class="bx bx-dollar-circle text-success"></i>
                        </span>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Atendimentos</p>
                    </div>
                    <div class="flex-shrink-0">
                        <h5 class="text-danger fs-14 mb-0">
                            <i class="ri-arrow-right-down-line fs-13 align-middle"></i> -3.57 %
                        </h5>
                    </div>
                </div>
                <div class="d-flex align-items-end justify-content-between mt-4">
                    <div>
                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="36894">0</span></h4>
                        <a href="" class="text-decoration-underline">View all orders</a>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-info-subtle rounded fs-3">
                            <i class="bx bx-shopping-bag text-info"></i>
                        </span>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Anamneses</p>
                    </div>
                    <div class="flex-shrink-0">
                        <h5 class="text-success fs-14 mb-0">
                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +29.08 %
                        </h5>
                    </div>
                </div>
                <div class="d-flex align-items-end justify-content-between mt-4">
                    <div>
                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="183.35">0</span>M </h4>
                        <a href="" class="text-decoration-underline">See details</a>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-warning-subtle rounded fs-3">
                            <i class="bx bx-user-circle text-warning"></i>
                        </span>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Primeira consulta</p>
                    </div>
                    <div class="flex-shrink-0">
                        <h5 class="text-muted fs-14 mb-0">
                            +0.00 %
                        </h5>
                    </div>
                </div>
                <div class="d-flex align-items-end justify-content-between mt-4">
                    <div>
                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="165.89">0</span>k </h4>
                        <a href="" class="text-decoration-underline">Withdraw money</a>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-primary-subtle rounded fs-3">
                            <i class="bx bx-wallet text-primary"></i>
                        </span>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div> <!-- end row-->


<div class="row">
    <!-- Card 1 -->
    <div class="col-md-3">
        <div class="card bg-light mb-3">
            <div class="card-body">

                <div class="text-center">
                    <h1 class="card-title text-primary fw-bold">21</h1>
                    <p class="card-subtitle mb-2">Atendimentos</p>
                    <p class="text-muted">Finalizados: 13</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Card 2 -->
    <div class="col-md-3">
        <div class="card bg-light mb-3">
            <div class="card-body text-center">

                <div class="text-center">
                    <h1 class="card-title text-danger fw-bold">17</h1>
                    <p class="card-subtitle mb-2">Atendimentos</p>
                    <p class="text-muted">Última semana: 9</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Card 3 -->
    <div class="col-md-3">
        <div class="card bg-light mb-3">
            <div class="card-body text-center">

                <div class="text-center">
                    <h1 class="card-title text-warning fw-bold">24</h1>
                    <p class="card-subtitle mb-2">Anamneses</p>
                    <p class="text-muted">Último mês: 19</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Card 4 -->
    <div class="col-md-3">
        <div class="card bg-light mb-3">
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
                        <h5 class="text-muted text-uppercase fs-13 mb-0">Total Revenue</h5>
                    </div>
                </div>

                <div class="mt-4 pt-1">
                    <h4 class="fs-1 fw-bold ff-secondary text-success mb-0">
                        <span class="counter-value" data-target="100"></span>
                    </h4>
                    <p class="card-subtitle mb-2">Consultas</p>
                    <p class="text-muted">Agendados: 16</p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->endSection(); ?>
<?php $this->section('js'); ?>

<?php $this->endSection(); ?>