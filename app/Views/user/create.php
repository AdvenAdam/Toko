<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="page-content-wrapper">
    <div class="page-content-wrapper-inner">
        <div class="content-viewport">
            <div class="row">
                <div class="col-12 py-5">
                    <div class="grid">
                        <div class="grid-header">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="my-3"><?= $title; ?></h3>
                                </div>
                                <div class="col-sm-6" align="right">
                                    <a href="/user" class="btn btn-rounded social-icon-btn btn-primary">
                                        <i class=" mdi mdi-arrow-left "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-body">
                            <div class="item-wrapper">
                                <div class="row mb-3">
                                    <div class="col-md-8 mx-auto">
                                        <form action="/user/save" method="post" enctype="multipart/form-data">
                                            <?= csrf_field(); ?>
                                            <div class="grid-header">
                                                <h7 class="my-10"><?= "Informasi "; ?></h7>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control  <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" value="<?= old('username'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('username'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-5">
                                                    <input type="Password" class="form-control  <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" value="<?= old('password'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('password'); ?>
                                                    </div>
                                                </div>
                                                <small class=" col-sm-5 col-form-label text-muted">
                                                    Pastikan panjang Password antara 8-20
                                                </small>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="repassword" class="col-sm-2 col-form-label">Ulangi Password</label>
                                                <div class="col-sm-5">
                                                    <input type="password" class="form-control  <?= ($validation->hasError('repassword')) ? 'is-invalid' : ''; ?>" id="repassword" name="repassword" value="<?= old('repassword'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('repassword'); ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row showcase_row_area">
                                                <label for="no_pegawai" class="col-sm-2 col-form-label">No Pegawai</label>
                                                <div class="col-sm-4">
                                                    <select class="custom-select form-control <?= ($validation->hasError('no_pegawai')) ? 'is-invalid' : ''; ?>" id="no_pegawai" name="no_pegawai" value="">
                                                        <option value="<?= (old('no_pegawai')) ? (old('no_pegawai')) : "" ?>" selected><?= (old('no_pegawai')) ? (old('no_pegawai')) : "Pilih no_pegawai" ?></option>
                                                        <?php foreach ($pegawai as $val) : ?>
                                                            <option value="<?= $val['no_pegawai']; ?>"><?= $val['no_pegawai']; ?></option>
                                                        <?php endforeach; ?>

                                                    </select>
                                                    <div class="invalid-feedback">
                                                        <?php
                                                        if ($validation->hasError('no_pegawai')) {
                                                            echo $validation->getError('no_pegawai');
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="level" class="col-sm-2 col-form-label">Level</label>
                                                <div class="col-sm-4">
                                                    <select class="custom-select form-control <?= ($validation->hasError('level')) ? 'is-invalid' : ''; ?>" id="level" name="level" value="">
                                                        <option value="<?= (old('level')) ? (old('level')) : "" ?>" selected><?= (old('level')) ? (old('level')) : "Pilih level" ?></option>
                                                        <option value="Admin">Admin</option>
                                                        <option value="Warehouse">Warehouse</option>
                                                        <option value="Customer_service">Customer Service</option>
                                                        <option value="Accountant">Accountant</option>
                                                        <option value="Teknisi">Teknisi</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        <?php
                                                        if ($validation->hasError('level')) {
                                                            echo $validation->getError('level');
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="gambar" class="col-sm-2 col-form-label">Foto</label>
                                                <div class="col-sm-2">
                                                    <img src="/img/user/default.jpg" class="img-thumbnail img-preview">
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="gambar" name="foto" onchange="previewImg()">
                                                        <div class="invalid-feedback">
                                                            <?= $validation->getError('foto'); ?>
                                                        </div>
                                                        <label class="custom-file-label" for="gambar">Pilih Foto..</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-sm-9">
                                                </div>
                                                <div class="col-sm-3">
                                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?= $this->endSection(); ?>