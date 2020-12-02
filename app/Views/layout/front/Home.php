<?= $this->extend('layout/front/v_template'); ?>
<?= $this->section('content'); ?>
    <?= $this->include('layout/front/v_nav.php'); ?>
    <?= $this->include('layout/front/v_home.php'); ?>
    <?= $this->include('layout/front/v_shop.php'); ?>
    <?= $this->include('layout/front/v_brand&rate.php'); ?>

<?= $this->endsection(); ?>