<!-- get in touch -->
<div class="contact-us-area pt-160 pb-160" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-8">
                <div class="contact-form-area contact-form-padding bg-gray">
                    <h2>Get In Touch</h2>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('pesan') ?>
                        </div>
                    <?php endif; ?>
                    <form action="/rating/save" method="post">
                        <?= csrf_field(); ?>
                        <div class="single-contact-form">
                            <input name="nama" type="text" value="<?= old('nama'); ?>" placeholder=" Nama *" required>
                        </div>
                        <div class="single-contact-form">
                            <input name="email" class="form-control  <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?> " type="email" value="<?= old('email'); ?>" placeholder=" Email *" required>
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                        <div class="single-contact-form">
                            <input name="no_hp" class="phone" type="text" value="<?= old('no_hp'); ?>" placeholder="No HP">
                        </div>
                        <div class="single-contact-form">
                            <input name="pekerjaan" type="text" value="<?= old('pekerjaan'); ?>" placeholder=" Pekerjaan">
                        </div>
                        <small class=" col-sm-5 col-form-label text-muted">Nilai Kami</small>
                        <div class="single-contact-form">
                            <div class="stars">
                                <input class="star star-5" value="5" id="star-5" type="radio" name="star" />
                                <label class="star star-5" for="star-5"></label>
                                <input class="star star-4" value="4" id="star-4" type="radio" name="star" />
                                <label class="star star-4" for="star-4"></label>
                                <input class="star star-3" value="3" id="star-3" type="radio" name="star" />
                                <label class="star star-3" for="star-3"></label>
                                <input class="star star-2" value="2" id="star-2" type="radio" name="star" />
                                <label class="star star-2" for="star-2"></label>
                                <input class="star star-1" value="1" id="star-1" type="radio" name="star" />
                                <label class="star star-1" for="star-1"></label>
                            </div>
                        </div>

                        <div class="single-contact-form">
                            <textarea name="pesan" placeholder="Your message" spellcheck="false"><?= old('rincian'); ?> </textarea>
                            <p>* Required fields</p>
                            <button class="submit" type="submit">Send message</button>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- phone number format -->