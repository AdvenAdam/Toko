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
                                    <a href="/toko" class="btn btn-rounded social-icon-btn btn-primary">
                                        <i class=" mdi mdi-arrow-left "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-body">
                            <div class="item-wrapper">
                                <div class="row mb-3">
                                    <div class="col-md-8 mx-auto">

                                        <form action="/toko/update/<?= $toko['id']; ?>" method="post" enctype="multipart/form-data">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="gambarLama" value="<?= $toko['gambar']; ?>">
                                            <div class="grid-header">
                                                <h7 class="my-10"><?= "Informasi Dasar Toko"; ?></h7>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" require id="nama" name="nama" value="<?= (old('nama')) ? (old('nama')) : $toko['nama']; ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('nama'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="platform" class="col-sm-2 col-form-label">platform</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control <?= ($validation->hasError('platform')) ? 'is-invalid' : ''; ?>" require id="platform" name="platform" value="<?= (old('platform')) ? (old('platform')) : $toko['platform']; ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('platform'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="link" class="col-sm-2 col-form-label">Link</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control <?= ($validation->hasError('link')) ? 'is-invalid' : ''; ?>" require id="link" name="link" value="<?= (old('link')) ? (old('link')) : $toko['link']; ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('link'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row showcase_row_area">
                                                <div class="col-md-4 showcase_text_area">
                                                    <label>Tampilkan di dashboard Toko</label>
                                                </div>
                                                <div class="col-md-8 showcase_content_area">
                                                    <div class="form-inline">
                                                        <div class="radio mb-3">
                                                            <label class="radio-label mr-4">
                                                                <input name="tampil" value="True" <?= $toko['tampil'] == 'True' ? 'checked' : ''; ?> type="radio">Iya<i class="input-frame"></i>
                                                            </label>
                                                        </div>
                                                        <div class="radio mb-3">
                                                            <label class="radio-label">
                                                                <input name="tampil" value="False" <?= $toko['tampil'] == 'False' ? 'checked' : ''; ?> type="radio">Tidak <i class="input-frame"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row showcase_row_area">
                                                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                                <div class="col-sm-2">
                                                    <img src="/img/toko/<?= $toko['gambar']; ?>" class="img-thumbnail img-preview">
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewImg()">
                                                        <div class="invalid-feedback">
                                                            <?= $validation->getError('gambar'); ?>
                                                        </div>
                                                        <label class="custom-file-label" for="gambar"><?= $toko['gambar']; ?></label>
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