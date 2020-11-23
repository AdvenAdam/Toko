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
                                    <a href="/kas" class="btn btn-rounded social-icon-btn btn-primary">
                                        <i class=" mdi mdi-arrow-left "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-body">
                            <div class="item-wrapper">
                                <div class="row mb-3">
                                    <div class="col-md-8 mx-auto">
                                        <form action="/kas/saveKeluar" method="post" enctype="multipart/form-data">
                                            <?= csrf_field(); ?>
                                            <div class="form-group row showcase_row_area  mt-4">
                                                <label for="kode_kas" class="col-sm-2 col-form-label">Kode Kas</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control " id="kode_kas" name="kode_kas" value="<?= $kode; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area  mt-4">
                                                <label for="jenis_kas" class="col-sm-2 col-form-label">Jenis Kas</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control " id="jenis_kas" name="jenis_kas" value="Pemasukan" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="pengeluaran" class="col-sm-2 col-form-label">Pengeluaran</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control <?= ($validation->hasError('pengeluaran')) ? 'is-invalid' : ''; ?>" id="input_mask_currency" name="pengeluaran" value="<?= old('pengeluaran'); ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('pengeluaran'); ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row showcase_row_area">
                                                <label for="uraian" class="col-sm-2 col-form-label">Uraian</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" cols="12" rows="5" id="uraian" name="uraian"> <?= old('uraian'); ?></textarea>

                                                </div>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <div class="col-sm-9">
                                                </div>
                                                <div class="col-sm-3">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
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