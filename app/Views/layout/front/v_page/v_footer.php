<footer class="footer-area bg-gray-3 pt-160">
    <div class="footer-top pb-120">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <h3 class="footer-title">Customer Care</h3>
                        <div class="footer-info-list">
                            <ul>
                                <li><i class="icofont-clock-time"></i>Monday - Friday: 9:00 - 19:00</li>
                                <li><i class="icofont-envelope"></i>Info@example.com</li>
                                <li><i class="icofont-stock-mobile"></i>(+55) 254. 254. 254</li>
                                <li><i class="icofont-home"></i>Helios Tower 75 Tam Trinh Hoang - Ha Noi - Viet Nam</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <h3 class="footer-title">Socials</h3>
                        <div class="footer-info-list">
                            <ul>
                                <li><a data-toggle="tab" href="#">Instagram</a></li>
                                <li><a data-toggle="tab" href="#">Twitter</a></li>
                                <li><a data-toggle="tab" href="#">Facebook</a></li>
                                <li><a data-toggle="tab" href="#">Pinterest</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="subscribe" class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <h3 class="footer-title">Subscribe to get offer!</h3>
                        <?php if (session()->getFlashdata('pesan2')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan2') ?>
                            </div>
                        <?php endif; ?>
                        <p>Kamu akan menerima setiap notifikasi promo menarik dari kami</p>
                        <div class="subscribe-wrap">
                            <div id="mc_embed_signup" class="subscribe-form">
                                <form class="validate subscribe-form-style" novalidate="" method="post" action="/Subs/save">
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input type="email" class="form-control  <?= ($validation->hasError('emailsub')) ? 'is-invalid' : ''; ?>" value="<?= old('nama'); ?>" placeholder=" Your email" name="emailsub" required>
                                        <div class="clear">
                                            <input class="button" type="submit" name="subscribe" value="">
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <p>We’ll never share your email address with a third-party.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom border-top-1">
        <div class="container">
            <div class="copyright copyright-ptb text-center">
                <p>Copyright © 2020 Dking - <a target="_blank" href="https://hasthemes.com/"> All Right Reserved</a></p>
            </div>
        </div>
    </div>
</footer>