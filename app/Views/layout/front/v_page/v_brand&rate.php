<div class="brand-logo-area pt-30" id="brand">
    <div class="container">
        <div class="mb-65">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8">
                    <div class="section-title-8">
                        <h2 class="bold">Official Brand</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <?php foreach (array_reverse($merk) as $val) { ?>
                <div class="col-lg-2 col-md-3 col-6 col-sm-4">
                    <div class="single-brand-logo-4 mb-70">
                        <a href="<?= $val['link']; ?>" target="_blank">
                            <img src="/img/merk/<?= $val['gambar']; ?>" alt="" class="brand"></a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="testimonial-area bg-img fix pt-140 pb-140 mt-50" style="background-image:url(/front/dking/assets/images/bg/bg-1.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-title-2 st-peragraph-width st-line-height mb-30">
                    <h2>We Love Our Clients <br>They Love Us</h2>
                    <p class="st-2-paragraph">Competently grow wireless platforms through reliable leadership. Intrinsicly supply.</p>
                    <div class="btn-style-2 btn-hover">
                        <a class="animated btn-ptb-1 btn-ptb-2-white-bg" href="product-details.html">All Testimonials</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="testimonial-active pl-70">
                    <?php foreach ($rating as $val) { ?>
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
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>