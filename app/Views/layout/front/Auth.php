<?= $this->extend('layout/front/v_page/v_template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('layout/front/v_page/v_nav'); ?>
<div class="breadcrumb-area breadcrumb-mt-0 breadcrumb-ptb-2">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Login / Register</h2>
            <ul>
                <li>
                    <a href="/ #contact">Home </a>
                </li>
                <li><span> > </span></li>
                <li class="active"> Login / Register </li>
            </ul>
        </div>
    </div>
</div>
<div class="login-register-area bg-gray pt-20 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> login </h4>
                        </a>
                        <a data-toggle="tab" href="#lg2">
                            <h4> register </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= session()->getFlashdata('pesan') ?>
                            </div>
                        <?php elseif (session()->getFlashdata('success')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('success') ?>
                            </div>
                        <?php endif; ?>
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="/Auth/cek_login" method="POST" enctype="multipart/form-data">
                                        <input type="text" name="username" placeholder="Username" autofocus required>
                                        <input type="password" name="password" placeholder="Password" required>
                                        <input type="hidden">
                                        <div class="button-box ">
                                            <button type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="/user/save_guest" method="post">
                                        <input type="text" name="username" placeholder="Username" autofocus required>
                                        <small class=" col-sm-5 col-form-label text-muted">
                                            Pastikan panjang Password antara 8-20
                                        </small>
                                        <input type="password" class="form-control  <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" name="password" placeholder="Password" required>
                                        <small class=" col-sm-5 col-form-label text-muted">
                                            Pastikan Password diketik sama
                                        </small>
                                        <input type="password" class="form-control  <?= ($validation->hasError('repassword')) ? 'is-invalid' : ''; ?>" name="repassword" placeholder="Ketik Ulang Password" required>
                                        <input name="email" placeholder="Email" type="email" required>
                                        <div class="button-box">
                                            <button type="submit">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endsection(); ?>