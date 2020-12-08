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
                                    <a href="/psu" class="btn btn-rounded social-icon-btn btn-primary">
                                        <i class=" mdi mdi-arrow-left "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-body">
                            <div class="item-wrapper">
                                <div class="row mb-3">
                                    <div class="col-md-8 mx-auto">
                                        <form action="/psu/save" method="post" enctype="multipart/form-data">
                                            <?= csrf_field(); ?>
                                            <div class="grid-header">
                                                <h7 class="my-10"><?= "Informasi Dasar Produk"; ?></h7>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                                                <div class="col-sm-4">
                                                    <select class="custom-select form-control <?= ($validation->hasError('merk')) ? 'is-invalid' : ''; ?>" id="merk" name="merk" value="">
                                                        <option value="<?= (old('merk')) ? (old('merk')) : "" ?>" selected><?= (old('merk')) ? (old('merk')) : "Pilih merk" ?></option>
                                                        <?php foreach ($merk as $val) : ?>
                                                            <option value="<?= $val['nama']; ?>"><?= $val['nama']; ?></option>
                                                        <?php endforeach; ?>

                                                    </select>
                                                    <div class="invalid-feedback">
                                                        <?php
                                                        if ($validation->hasError('merk')) {
                                                            echo $validation->getError('merk');
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" require id="nama" name="nama" value="<?= old('nama'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('nama'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control input_mask_currency <?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>" require id="harga" name="harga" value="<?= old('harga'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('harga'); ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row showcase_row_area">
                                                <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                                                <div class="col-sm-3">
                                                    <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" class="form-control <?= ($validation->hasError('stok')) ? 'is-invalid' : ''; ?>" require id="stok" name="stok" value="<?= old('stok'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('stok'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-header">
                                                <h7 class="my-10"><?= "Informasi Dasar Power Supply"; ?></h7>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="sertifikat" class="col-sm-2 col-form-label">Sertifikat</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control <?= ($validation->hasError('sertifikat')) ? 'is-invalid' : ''; ?>" require id="sertifikat" name="sertifikat" value="<?= old('sertifikat'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('sertifikat'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="jenis_kabel" class="col-sm-2 col-form-label">Jenis Kabel</label>
                                                <div class="col-sm-10">
                                                    <select class="custom-select form-control <?= ($validation->hasError('jenis_kabel')) ? 'is-invalid' : ''; ?>" id="jenis_kabel" name="jenis_kabel" value="">
                                                        <option value="<?= (old('jenis_kabel')) ? (old('jenis_kabel')) : "" ?>" selected><?= (old('jenis_kabel')) ? (old('jenis_kabel')) : "Pilih jenis_kabel" ?></option>
                                                        <option value="Modular">Modular</option>
                                                        <option value="Non Modular">Non Modular</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        <?php
                                                        if ($validation->hasError('jenis_kabel')) {
                                                            echo $validation->getError('jenis_kabel');
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="mb_power" class="col-sm-2 col-form-label">Psu Power</label>
                                                <div class="col-sm-4">
                                                    <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" class="form-control <?= ($validation->hasError('mb_power')) ? 'is-invalid' : ''; ?>" require id="mb_power" name="mb_power" value="<?= old('mb_power'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('mb_power'); ?>
                                                    </div>
                                                </div>
                                                <label class="col-sm-1 col-form-label">Watt</label>
                                            </div>
                                            <div class="grid-header">
                                                <h7 class="my-10"><?= "Rincian Produk"; ?></h7>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="rincian" class="col-sm-2 col-form-label">Rincian</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" cols="12" rows="5" id="rincian" name="rincian"> <?= old('rincian'); ?></textarea>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('rincian'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                                <div class="col-sm-2">
                                                    <img src="/img/pendingin/default.jpg" class="img-thumbnail img-preview">
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewImg()">
                                                        <div class="invalid-feedback">
                                                            <?= $validation->getError('gambar'); ?>
                                                        </div>
                                                        <label class="custom-file-label" for="gambar">Pilih Gambar..</label>
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