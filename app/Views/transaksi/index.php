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
                                    <a href="/vga/excel" class="btn btn-success btn-sm"><i class="mdi mdi-file-excel-box"></i> Export ke Excel</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-bordered table-hover">
                                <thead>
                                    <tr align="middle">
                                        <th width="5%"><b>No</th>
                                        <th><b>Jenis</th>
                                        <th><b>Pelanggan</th>
                                        <th><b>Customer Service</th>
                                        <th><b>Nilai</th>
                                        <th><b>Waktu Transalsi</th>
                                        <th><b>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($transaksi as $val) : ?>
                                        <?php
                                        $masuk += intval($val['nilai']);

                                        ?>
                                        <tr align="middle">
                                            <td><?= $i++; ?></td>
                                            <td><?= $val['jenis']; ?></td>
                                            <td><?= $val['pelanggan']; ?></td>
                                            <td><?= $val['customer_service']; ?></td>
                                            <td><?= number_format($val['nilai']); ?></td>
                                            <td><?= $val['created_at']; ?></td>
                                            <td>
                                                <form action="/trx/<?= $val['id']; ?>" method="post" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin ?')"><i class="mdi mdi-delete"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tr>
                                    <th colspan="4">
                                        <center>
                                            <h2>Total</h2>
                                        </center>
                                    </th>
                                    <th><b>
                                            <h4>Rp. <?= number_format($masuk) ?></h4>
                                        </b></th>

                                </tr>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                </div>
            </div>
        </div>

        <?= $this->endSection(); ?>