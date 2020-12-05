<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="page-content-wrapper">
    <div class="page-content-wrapper-inner">
        <div class="content-viewport">
            <div class="row">
                <div class="col-12 py-5">
                    <h4><?= $title; ?></h4>
                    <p class="text-gray">Welcome aboard,<?= session()->get('username'); ?></p>
                </div>
            </div>
            <?= $this->endSection(); ?>