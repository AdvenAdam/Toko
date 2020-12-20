<?= $this->extend('layout/front/v_page/v_template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('layout/front/v_page/v_nav'); ?>
<div class="breadcrumb-area breadcrumb-mt bg-gray breadcrumb-ptb-1">
    <div class="container">
        <div class="breadcrumb-content">
            <center>
                <h1><?= $title; ?></h1>
            </center>
        </div>
    </div>
    <div class="breadcrumb-img-2">
        <img src="/front/dking/assets/images/about/breadcrumb-3.png" alt="">
    </div>
</div>
<div class="container">
    <div class="row">
        <?php foreach ($rating as $val) { ?>
            <div class="col-lg-6">
                <div class="testimonial-plr-1">
                    <div class="single-testimonial">
                        <div class="testi-rating-quotes-icon">
                            <div class="testi-rating">
                                <?php for ($i = 1; $i <= $val['rating']; $i++) { ?>
                                    <i class="icon-rating"></i>
                                <?php } ?>
                            </div>
                            <div class="testi-quotes-icon">
                                <img class="inject-me" src="/front/dking/assets/images/icon-img/quotes-icon.png" alt="">
                            </div>
                        </div>
                        <p><?= $val['pesan']; ?></p>
                        <div class="client-info-wrap">
                            <!-- <div class="client-img">
                                        <img src="/front/dking/assets/images/testimonial/client-1.png" alt="">
                                    </div> -->
                            <div class="client-info">
                                <h3><?= $val['nama']; ?></h3>
                                <span><?= $val['pekerjaan']; ?>, at <?= $val['created_at']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?= $this->endsection(); ?>