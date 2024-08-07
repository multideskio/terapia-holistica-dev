<?= $this->extend('dashboard/template') ?>
<?php $this->section('css') ?>
<link rel="stylesheet" href="/assets/css/custom/anamnese.css?v=<?= time() ?>">
<?php $this->endSection(); ?>
<?php $this->section('page') ?>


<div class="col-xxl-12">
    <h1 class="fw-bolder p-0 m-0">DASHBOARD</h1>
</div>


<?php $this->endSection(); ?>
<?php $this->section('js'); ?>

<?php $this->endSection(); ?>