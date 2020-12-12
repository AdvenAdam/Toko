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
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan') ?>
                            </div>
                        <?php endif; ?>
                        <div class="row">
                            <!-- diterima -->
                            <div class="col-lg-6">
                                <div class="card-body">
                                    <div class="grid-header">
                                        Service Diterima
                                    </div>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr align="middle">
                                                <th><b>Nama</th>
                                                <th><b>Antrian</th>
                                                <th><b>Diterima</th>
                                                <th><b>#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($diterima as $val) : ?>
                                                <tr align="middle">
                                                    <td><?= $val['nama']; ?></a></td>
                                                    <td><?= $val['antrian_pc']; ?></td>
                                                    <td><?= $val['created_at']; ?></td>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#modal_service<?= $val['antrian_pc']; ?>" class=" btn btn-info btn-sm"><i class="mdi mdi-magnify"></i></a>
                                                        <form action="/service/proses/<?= $val['id']; ?>" method="POST" class="d-inline">
                                                            <input type="hidden" name="teknisi" value="<?= session()->get('username'); ?>">
                                                            <button onclick=" return confirm('Apakah Anda Yakin ?')" class="btn btn-success btn-sm">Proses</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- diproses -->
                            <div class="col-lg-6">
                                <div class="card-body">
                                    <div class="grid-header">
                                        Service Diproses
                                    </div>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr align="middle">
                                                <th><b>Nama</th>
                                                <th><b>Antrian</th>
                                                <th><b>Diproses</th>
                                                <th><b>#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($diproses as $val) : ?>
                                                <tr align="middle">
                                                    <td><?= $val['nama']; ?></td>
                                                    <td><?= $val['antrian_pc']; ?></td>
                                                    <td><?= $val['updated_at']; ?></td>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#modal_service<?= $val['antrian_pc']; ?>" class=" btn btn-info btn-sm"><i class="mdi mdi-magnify"></i></a>
                                                        <a href="" data-toggle="modal" data-target="#modal_selesai<?= $val['antrian_pc']; ?>" class=" btn btn-warning btn-sm">Selesai</a> </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- selesai -->
                            <div class="col-lg-4">
                                <div class="card-body">
                                    <div class="grid-header">
                                        Service Selsesai
                                    </div>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr align="middle">
                                                <th><b>Nama</th>
                                                <th><b>Antrian</th>
                                                <th><b>Selesai</th>
                                                <th><b>#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($selesai as $val) : ?>
                                                <tr align="middle">
                                                    <td><?= $val['nama']; ?></td>
                                                    <td><?= $val['antrian_pc']; ?></td>
                                                    <td><?= $val['updated_at']; ?></td>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#modal_service<?= $val['antrian_pc']; ?>" class=" btn btn-info btn-sm"><i class="mdi mdi-magnify"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- modal view -->
        <?php foreach ($service as $val) { ?>
            <div class="modal fade" id="modal_service<?= $val['antrian_pc']; ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                                    <label class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control " value="<?= $val['nama']; ?>" readonly>
                                    </div>
                                    <label class="col-sm-2 col-form-label">Antrian</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control " value="<?= $val['antrian_pc']; ?>" readonly>
                                    </div>
                                    <label class="col-sm-6 col-form-label">No HP</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control " value="<?= $val['no_hp']; ?>" readonly>
                                    </div>
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control " value="<?= $val['email']; ?>" readonly>
                                    </div>
                                    <label class="col-sm-2 col-form-label">Kerusakan</label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" cols="12" rows="5" readonly><?= $val['kerusakan']; ?></textarea>
                                    </div>
                                    <label class="col-sm-6 col-form-label">Diterima Tanggal</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control " value="<?= $val['created_at']; ?>" readonly>
                                    </div>
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control " value="<?= $val['status'] . ' | ' . $val['updated_at']; ?>" readonly>
                                    </div>
                                    <?php if ($val['status'] != 'diterima') { ?>
                                        <label class="col-sm-2 col-form-label">Teknisi</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control " value="<?= $val['teknisi']; ?>" readonly>
                                        </div>
                                    <?php } ?>
                                    <?php if ($val['status'] == 'selesai') { ?>
                                        <label class="col-sm-2 col-form-label">Biaya</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control " value="<?= 'Rp. ' . number_format($val['biaya']); ?>" readonly>
                                        </div>
                                        <label class="col-sm-6 col-form-label">Rincian Service</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" cols="12" rows="5" readonly><?= $val['rincian_service']; ?></textarea>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- modal selesai -->
        <?php foreach ($service as $val) { ?>
            <div class="modal fade" id="modal_selesai<?= $val['antrian_pc']; ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        </div>
                        <div class="modal-header">
                            <center>
                                <h3><b> Apakah service sudah selesai</b> </h3>
                            </center>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col-lg-10 col-md-10 col-10 col-sm-10">
                                    <form action="/service/selesai/<?= $val['id']; ?>" method="post" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                        <div class="form-group row showcase_row_area">
                                            <label for="nama" class="col-sm-12 col-form-label">Nama</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $val['nama']; ?>" readonly>
                                            </div>
                                        </div>
                                        <input type="hidden" name="status" value="diterima">
                                        <div class="form-group row showcase_row_area">
                                            <label for="antrian" class="col-sm-12 col-form-label">Antrian</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="antrian" name="antrian" value="<?= $val['antrian_pc']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row showcase_row_area">
                                            <label for="kerusakan" class="col-sm-12 col-form-label">Kerusakan</label>
                                            <div class="col-sm-12">
                                                <textarea class="form-control" cols="12" rows="5" id="kerusakan" name="kerusakan" readonly> <?= $val['kerusakan']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row showcase_row_area">
                                            <label for="biaya" class="col-sm-12 col-form-label">Biaya</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control input_mask_currency <?= ($validation->hasError('biaya')) ? 'is-invalid' : ''; ?>" id="biaya" name="biaya" value="<?= old('biaya'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('biaya'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row showcase_row_area">
                                            <label for="rincian_service" class="col-sm-12 col-form-label">Rincian Service</label>
                                            <div class="col-sm-12">
                                                <textarea class="form-control" cols="12" rows="5" id="rincian_service" name="rincian_service"> <?= old('rincian_service'); ?></textarea>
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('rincian_service'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row showcase_row_area">
                                            <div class="col-sm-9">
                                            </div>
                                            <div class="col-sm-3">
                                                <button type="submit" class="btn btn-primary"><i class="mdi mdi-content-save "></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?= $this->endSection(); ?>