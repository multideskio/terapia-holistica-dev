<?= $this->extend('dashboard/template') ?>
<?php $this->section('css') ?>
<link rel="stylesheet" href="/assets/css/custom/anamnese.css?v=<?= time() ?>">
<?php $this->endSection(); ?>
<?php $this->section('page') ?>
<div class="row mb-3 pb-1">
    <div class="col-12">
        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
            <div class="flex-grow-1">
                <h1 class="fw-bolder">DASHBOARD</h1>
            </div>
        </div><!-- end card header -->
    </div>
    <!--end col-->
</div>
<!--end row-->




<?php $this->endSection(); ?>
<?php $this->section('js'); ?>

<?php $this->endSection(); ?>