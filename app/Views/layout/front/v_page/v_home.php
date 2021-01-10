<div class="slider-area bg-light-green slider-mt-1" id="home">
    <div class="slider-active-1 nav-style-1 dot-style-1">
        <?php foreach ($slider as $val) { ?>
            <div class="single-slider slider-height-2 custom-d-flex custom-align-item-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-12 col-sm-5">
                            <div class="slider-content-1 slider-animated-1">
                                <h1 class="animated"><?= $val['baris_satu']; ?><br><?= $val['baris_dua']; ?></h1>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 col-sm-7">
                            <div class="slider-single-img-2 slider-animated-1">
                                <a href="http://<?= $val['link']; ?>"><img class="animated" src="/img/slider/<?= $val['gambar']; ?>" class="img-fluid" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="slider-shape-electric2">
        <img src="/front/dking/assets/images/slider/shape-electric2.png" alt="shape">
    </div>
</div>
<!-- end slider -->
<div class="service-area pt-160 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="service-wrap text-center mb-30">
                    <img class="inject-me" src="assets/images/icon-img/headphones.svg" alt="">
                    <h3>Happiness </h3>
                    <p class="service-peragraph-2">Free Shipping for any product and it's world wide</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="service-wrap text-center mb-30">
                    <img class="inject-me" src="assets/images/icon-img/shipping-car.svg" alt="">
                    <h3>Free Shipping </h3>
                    <p class="service-peragraph-2">Free Shipping for any product and it's world wide</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="service-wrap text-center mb-30">
                    <img class="inject-me" src="assets/images/icon-img/trusty.svg" alt="">
                    <h3>All Trusty Brand </h3>
                    <p class="service-peragraph-2">Free Shipping for any product and it's world wide</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="service-wrap text-center mb-30">
                    <img class="inject-me" src="assets/images/icon-img/support-expart.svg" alt="">
                    <h3>24/7 Support Expert </h3>
                    <p class="service-peragraph-2">Free Shipping for any product and it's world wide</p>
                </div>
            </div>
        </div>
    </div>
</div>