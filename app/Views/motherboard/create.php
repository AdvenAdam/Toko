<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="page-content-wrapper">
    <div class="page-content-wrapper-inner">
        <div class="content-viewport">
            <div class="row">
                <div class="col-12 py-5">
                    <div class="grid">
                        <div class="grid-header">
                            <h2 class="my-3"><?= $title; ?></h2>
                        </div>
                        <div class="grid-body">
                            <div class="item-wrapper">
                                <div class="row mb-3">
                                    <div class="col-md-10 mx-auto">
                                        <form action="/motherboard/save" method="post" enctype="multipart/form-data">
                                            <?= csrf_field(); ?>

                                            <div class="grid-header">
                                                <h7 class="my-10"><?= "Informasi Dasar Produk"; ?></h7>
                                            </div>

                                            <div class="form-group row showcase_row_area">
                                                <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control  <?= ($validation->hasError('merk')) ? 'is-invalid' : ''; ?>" id="merk" name="merk" autofocus value="<?= old('merk'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('merk'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= old('nama'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('nama'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control <?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>" id="harga" name="harga" value="<?= old('harga'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('harga'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control <?= ($validation->hasError('stok')) ? 'is-invalid' : ''; ?>" id="stok" name="stok" value="<?= old('stok'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('stok'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-header">
                                                <h7 class="my-10"><?= "Informasi Motherboard"; ?></h7>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="socket" class="col-sm-2 col-form-label">Socket</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control <?= ($validation->hasError('socket')) ? 'is-invalid' : ''; ?>" id="socket" name="socket" value="<?= old('socket'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('socket'); ?>
                                                    </div>
                                                </div>

                                                <label for="chipset" class="col-sm-2 col-form-label">Chipset</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control <?= ($validation->hasError('chipset')) ? 'is-invalid' : ''; ?>" id="chipset" name="chipset" value="<?= old('chipset'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('chipset'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="faktor_bentuk" class="col-sm-2 col-form-label">Faktor Bentuk</label>
                                                <div class="col-sm-10">
                                                    <div class="form-grup">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="faktor_bentuk[]" class="form-check-input" value="Mini-ITX"> Mini-ITX <i class="input-frame"></i>
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="faktor_bentuk[]" class="form-check-input" value="Micro-ATX"> Micro-ATX <i class="input-frame"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-inline">
                                                        <div class="radio mb-3">
                                                            <label>
                                                                <input type="radio" name="faktor_bentuk[]" class="form-check-input" value="ATX"> ATX <i class="input-frame"></i>
                                                            </label>
                                                        </div>
                                                        <div class="radio mb-3">
                                                            <label>
                                                                <input type="radio" name="faktor_bentuk[]" class="form-check-input" value="E-ATX"> E-ATX <i class="input-frame"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('faktor_bentuk'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="kekuatan_cpu" class="col-sm-2 col-form-label">Power Cpu</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control <?= ($validation->hasError('kekuatan_cpu')) ? 'is-invalid' : ''; ?>" id="kekuatan_cpu" name="kekuatan_cpu" value="<?= old('kekuatan_cpu'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('kekuatan_cpu'); ?>
                                                    </div>
                                                </div>
                                                <label class="col-sm-1 col-form-label">GHz</label>
                                            </div>
                                            <div class="grid-header">
                                                <h7 class="my-10"><?= "Informasi Spesifik RAM"; ?></h7>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="jml_slot_ram" class="col-sm-2 col-form-label">Jumlah Slot RAM</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control <?= ($validation->hasError('jml_slot_ram')) ? 'is-invalid' : ''; ?>" id="jml_slot_ram" name="jml_slot_ram" value="<?= old('jml_slot_ram'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('jml_slot_ram'); ?>
                                                    </div>
                                                </div>

                                                <label for="jenis_ram" class="col-sm-2 col-form-label">Jenis RAM</label>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control <?= ($validation->hasError('jenis_ram')) ? 'is-invalid' : ''; ?>" id="jenis_ram" name="jenis_ram" value="<?= old('jenis_ram'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('jenis_ram'); ?>
                                                    </div>
                                                </div>


                                                <label for="ukuran_ram_maks" class="col-sm-2 col-form-label">Ukuran RAM Max</label>
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control <?= ($validation->hasError('ukuran_ram_maks')) ? 'is-invalid' : ''; ?>" id="ukuran_ram_maks" name="ukuran_ram_maks" value="<?= old('ukuran_ram_maks'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('ukuran_ram_maks'); ?>
                                                    </div>
                                                </div>
                                                <label class="col-sm-1 col-form-label">GB</label>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="frekuensi_maks_ram" class="col-sm-2 col-form-label">Frekuensi RAM</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control <?= ($validation->hasError('frekuensi_maks_ram')) ? 'is-invalid' : ''; ?>" id="frekuensi_maks_ram" name="frekuensi_maks_ram" value="<?= old('frekuensi_maks_ram'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('frekuensi_maks_ram'); ?>
                                                    </div>
                                                </div>
                                                <label class="col-sm-1 col-form-label">MHz</label>
                                            </div>
                                            <div class="grid-header">
                                                <h7 class="my-10"><?= "Informasi Slot"; ?></h7>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="jml_slot_pcie" class="col-sm-2 col-form-label">Jumlah Slot PCIE</label>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control <?= ($validation->hasError('jml_slot_pcie')) ? 'is-invalid' : ''; ?>" id="jml_slot_pcie" name="jml_slot_pcie" value="<?= old('jml_slot_pcie'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('jml_slot_pcie'); ?>
                                                    </div>
                                                </div>

                                                <label for="jml_slot_sata" class="col-sm-2 col-form-label">Jumlah Slot Sata</label>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control <?= ($validation->hasError('jml_slot_sata')) ? 'is-invalid' : ''; ?>" id="jml_slot_sata" name="jml_slot_sata" value="<?= old('jml_slot_sata'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('jml_slot_sata'); ?>
                                                    </div>
                                                </div>

                                                <label for="jml_slot_m2" class="col-sm-2 col-form-label">Jumlah Slot M.2</label>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control <?= ($validation->hasError('jml_slot_m2')) ? 'is-invalid' : ''; ?>" id="jml_slot_m2" name="jml_slot_m2" value="<?= old('jml_slot_m2'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('jml_slot_m2'); ?>
                                                    </div>
                                                </div>
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
                                                    <img src="/img/motherboard/default.jpg" class="img-thumbnail img-preview">
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