<?= $this->extend('dashboard/template') ?>
<?php $this->section('css') ?>
<link rel="stylesheet" href="/assets/css/custom/anamnese.css?v=<?= time() ?>">
<?php $this->endSection(); ?>
<?php $this->section('page') ?>

<h1 class="fw-bolder p-0 m-0">DASHBOARD</h1>

<?php $this->endSection(); ?>
<?php $this->section('js'); ?>

<?php $this->endSection(); ?>