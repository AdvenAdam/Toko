<?php

use App\Controllers\Pegawai;
?>
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
                                    <a href="/pegawai" class="btn btn-rounded social-icon-btn btn-primary">
                                        <i class=" mdi mdi-arrow-left "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-body">
                            <div class="item-wrapper">
                                <div class="row mb-3">
                                    <div class="col-md-8 mx-auto">
                                        <form action="/pegawai/update/<?= $pegawai['id']; ?>" method="post" enctype="multipart/form-data">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="slug" value="<?= $pegawai['slug']; ?>">
                                            <input type="hidden" name="fotoLama" value="<?= $pegawai['foto']; ?>">
                                            <div class="grid-header">
                                                <h7 class="my-10"><?= "Informasi"; ?></h7>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="no_pegawai" class="col-sm-2 col-form-label">No pegawai</label>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control " id="no_pegawai" name="no_pegawai" value="<?= $pegawai['no_pegawai']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= old('nama') ? (old('nama')) : $pegawai['nama']; ?>" autofocus>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('nama'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" autofocus value="<?= old('alamat') ? (old('alamat')) : $pegawai["alamat"]; ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('alamat'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control phone <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>" id="no_hp" name="no_hp" autofocus value="<?= old('no_hp') ? (old('no_hp')) : $pegawai["no_hp"]; ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('no_hp'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-8">
                                                    <input type="email" class="form-control  <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" autofocus value="<?= old('email') ? (old('email')) : $pegawai['email']; ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('email'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="gaji_pokok" class="col-sm-2 col-form-label">Gaji Pokok</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control input_mask_currency <?= ($validation->hasError('gaji_pokok')) ? 'is-invalid' : ''; ?>" id="gaji_pokok" name="gaji_pokok" autofocus value="<?= old('gaji_pokok') ? (old('gaji_pokok')) : $pegawai['gaji_pokok']; ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('gaji_pokok'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control  <?= ($validation->hasError('jabatan')) ? 'is-invalid' : ''; ?>" id="jabatan" name="jabatan" autofocus value="<?= old('jabatan') ? (old('jabatan')) : $pegawai['jabatan']; ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('jabatan'); ?>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group row showcase_row_area">
                                                <label for="gambar" class="col-sm-2 col-form-label">Foto</label>
                                                <div class="col-sm-2">
                                                    <img src="/img/pegawai/<?= $pegawai['foto']; ?>" class="img-thumbnail img-preview">
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="gambar" name="foto" onchange="previewImg()">
                                                        <div class="invalid-feedback">
                                                            <?= $validation->getError('foto'); ?>
                                                        </div>
                                                        <label class="custom-file-label" for="gambar"><?= $pegawai['foto']; ?></label>
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