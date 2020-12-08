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
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6" align="right">
                                    <a href="/rating/excel" class="btn btn-success btn-sm"><i class="mdi mdi-file-excel-box"></i> Export ke Excel</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-hover">
                                <thead>
                                    <tr align="middle">
                                        <th width="5%"><b>No</b></th>
                                        <th><b>Nama</b></th>
                                        <th><b>Email</b></th>
                                        <th><b>Pekerjaan</b></th>
                                        <th><b>Rating</b></th>
                                        <th><b>#</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($rating as $val) : ?>
                                        <tr align="middle">
                                            <td><?= $i++; ?></td>
                                            <td><?= $val['nama']; ?></td>
                                            <td><?= $val['email']; ?></td>
                                            <td><?= $val['pekerjaan']; ?></td>
                                            <td>
                                                <?php for ($a = 1; $a <= $val['rating']; $a++) { ?>
                                                    <i class="mdi mdi-star"></i>
                                                <?php } ?>
                                            </td>
                                            <td><a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_edit<?= $val['id']; ?>"><i class="mdi mdi-magnify"></i></a>
                                                <form action="/rating/<?= $val['id']; ?>" method="post" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-dark btn-sm" onclick="return confirm('Apakah Anda Yakin ?')"><i class="mdi mdi-delete"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <?php
                    foreach ($rating as $i) {

                    ?>
                        <!-- Modal -->
                        <div class="modal fade" id="modal_edit<?= $i['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Detail</h5>
                                        <button type="button" href="/kas" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control " value="<?= $i['nama']; ?>" readonly>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control " value="<?= $i['email']; ?>" readonly>
                                        </div>
                                        <label class="col-sm-2 col-form-label">No HP</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control " value="<?= $i['no_hp']; ?>" readonly>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control " value="<?= $i['pekerjaan']; ?>" readonly>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Rating</label>
                                        <div class="col-sm-12">
                                            <?php for ($a = 1; $a <= $val['rating']; $a++) { ?>
                                                <i class="mdi mdi-star"></i>
                                            <?php } ?>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control " value="<?= $i['created_at']; ?>" readonly>
                                        </div>
                                        <div class="form-group row showcase_row_area">
                                            <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                                            <div class="col-sm-12">
                                                <textarea class="form-control" cols="12" rows="5" readonly> <?= $i['pesan']; ?></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" href="/kas" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?= $this->endSection(); ?>