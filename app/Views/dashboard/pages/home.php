<?= $this->extend('dashboard/template') ?>
<?php $this->section('page') ?>
<p>Dados de sessão:</p>
<pre>
<?php print_r(session('data')) ?>
</pre>
<?php $this->endSection(); ?>