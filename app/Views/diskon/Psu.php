<!-- Procie -->
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
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="/Diskon/excelPsu" class="btn btn-success btn-sm"><i class="mdi mdi-file-excel-box"></i> Export ke Excel</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-hover">
                                <thead>
                                    <tr align="middle">
                                        <th width="5%"><b>No</b></th>
                                        <th><b>Merk</b></th>
                                        <th><b>Nama</b></th>
                                        <th><b>Diskon(%)</b></th>
                                        <th><b>Harga Lama</b></th>
                                        <th><b>Harga Baru</b></th>
                                        <th><b>Stok</b></th>
                                        <th><b>Berlaku sampai</b></th>
                                        <th><b>#</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($psu as $val) : ?>
                                        <tr align="middle">
                                            <td><?= $i++; ?></td>
                                            <td><?= $val['merk']; ?></td>
                                            <td><?= $val['nama']; ?></td>
                                            <td><?= $val['diskon']; ?></td>
                                            <td><?= number_format($val['harga']); ?></td>
                                            <td><?= number_format($val['harga_new']); ?></td>
                                            <td><?= $val['stok']; ?></td>
                                            <td><?= $val['berlaku']; ?></td>
                                            <td><a href="#" data-toggle="modal" data-target="#modal_edit<?= $val['id']; ?>" class="btn btn-info btn-sm"><i class="mdi mdi-pharmacy"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- Modal -->
            <?php foreach ($psu as $val) { ?>
                <div class="modal fade" id="modal_edit<?= $val['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="/diskon/updatePsu/<?= $val['id']; ?>" method="POST">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Diskon</h5>
                                    <button type="button" href="/kas" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <label class="col-sm-12 col-form-label">Merk</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control " name="merk" value="<?= $val['merk']; ?>" readonly>
                                    </div>
                                    <label class="col-sm-12 col-form-label">Nama</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control " name="nama" value="<?= $val['nama']; ?>" readonly>
                                    </div>
                                    <label class="col-sm-12 col-form-label">Diskon</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="diskon" onkeypress="return event.charCode >= 48 && event.charCode <=57" class="form-control" value="<?= $val['diskon']; ?>">
                                    </div>
                                    <label class="col-sm-12 col-form-label">Harga Lama</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="harga" class="form-control " value="<?= $val['harga']; ?>" readonly>
                                    </div>
                                    <label class="col-sm-12 col-form-label">Stok </label>
                                    <div class="col-sm-12">
                                        <input type="text" name="stok" class="form-control " value="<?= $val['stok']; ?>" readonly>
                                    </div>
                                    <label class="col-sm-12 col-form-label">Berlaku </label>
                                    <div class="col-sm-12">
                                        <input type="date" name="berlaku" class="form-control " value="<?= $val['berlaku']; ?>">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php } ?>
            <!-- End -->
        </div>
        <?= $this->endSection(); ?>