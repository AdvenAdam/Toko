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
                                    <a href="/slider" class="btn btn-rounded social-icon-btn btn-primary">
                                        <i class=" mdi mdi-arrow-left "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-body">
                            <div class="item-wrapper">
                                <div class="row mb-3">
                                    <div class="col-md-8 mx-auto">

                                        <form action="/slider/update/<?= $slider['id']; ?>" method="post" enctype="multipart/form-data">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="gambarLama" value="<?= $slider['gambar']; ?>">
                                            <div class="grid-header">
                                                <h7 class="my-10"><?= "Informasi Dasar slider"; ?></h7>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="baris_satu" class="col-sm-2 col-form-label">Kalimat Baris Pertama</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control <?= ($validation->hasError('baris_satu')) ? 'is-invalid' : ''; ?>" require id="baris_satu" name="baris_satu" value="<?= (old('baris_satu')) ? (old('baris_satu')) : $slider['baris_satu']; ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('baris_satu'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="baris_dua" class="col-sm-2 col-form-label">Kalimat Baris Kedua </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control <?= ($validation->hasError('baris_dua')) ? 'is-invalid' : ''; ?>" require id="baris_dua" name="baris_dua" value="<?= (old('baris_dua')) ? (old('baris_dua')) : $slider['baris_dua']; ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('baris_dua'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="link" class="col-sm-2 col-form-label">Link</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control <?= ($validation->hasError('link')) ? 'is-invalid' : ''; ?>" require id="link" name="link" value="<?= (old('link')) ? (old('link')) : $slider['link']; ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('link'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                                <div class="col-sm-2">
                                                    <img src="/img/slider/<?= $slider['gambar']; ?>" class="img-thumbnail img-preview">
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewImg()">
                                                        <div class="invalid-feedback">
                                                            <?= $validation->getError('gambar'); ?>
                                                        </div>
                                                        <label class="custom-file-label" for="gambar"><?= $slider['gambar']; ?></label>
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