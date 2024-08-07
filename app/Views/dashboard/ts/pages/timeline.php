<?= $this->extend('dashboard/template') ?>
<?php $this->section('css') ?>

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

<div class="row">
    <div class="col-lg-12">
        <div>
            <h5 class="text-center">TIME LINE</h5>
            <div class="timeline" id="timelineContainer">
            </div>
        </div>
    </div>
</div>


<?php $this->endSection(); ?>
<?php $this->section('js'); ?>
<script src="/assets/js/custom/timelineTs.js"></script>
<?php $this->endSection(); ?>