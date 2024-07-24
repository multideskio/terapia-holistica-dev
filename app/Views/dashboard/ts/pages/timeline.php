<?= $this->extend('dashboard/template') ?>
<?php $this->section('page') ?>
<div class="row">
    <div class="col-lg-12">
        <div>
            <h5>TIME LINE</h5>
            <div class="timeline" id="timelineContainer">
                <!-- Items will be appended here -->
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>
<?php $this->section('js'); ?>
<script src="/assets/js/custom/timelineTs.js"></script>
<?php $this->endSection(); ?>