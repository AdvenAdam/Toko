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
                                    <a href="/psu/create" class="btn btn-primary ">Tambah Data</a>
                                </div>
                                <div class="col-sm-6" align="right">
                                    <a href="/psu/excel" class="btn btn-success btn-sm"><i class="mdi mdi-file-excel-box"></i> Export ke Excel</a>
                                    <a href="/psu/cetak" class="btn btn-warning btn-sm"><i class="mdi mdi-printer"></i> Cetak Data</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-bordered table-hover">
                                <thead>
                                    <tr align="middle">
                                        <th width="5%"><b>No</th>
                                        <th><b>Merk</th>
                                        <th><b>Nama</th>
                                        <th><b>Sertifikat</th>
                                        <th><b>Jenis Kabel</th>
                                        <th><b>Power</th>
                                        <th><b>Harga</th>
                                        <th><b>Stok</th>
                                        <th><b>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($psu as $val) : ?>
                                        <tr align="middle">
                                            <td><?= $i++; ?></td>
                                            <td><?= $val['merk']; ?></td>
                                            <td><?= $val['nama']; ?></td>
                                            <td><?= $val['sertifikat']; ?></td>
                                            <td><?= $val['jenis_kabel']; ?></td>
                                            <td><?= $val['mb_power'] . "Watt"; ?></td>
                                            <td><?= number_format($val['harga']); ?></td>
                                            <td><?= $val['stok']; ?></td>
                                            <td><a href="/psu/<?= $val['slug']; ?>" class="btn btn-info btn-sm"><i class="mdi mdi-magnify"></i></a>
                                                <a href="/psu/edit/<?= $val['slug']; ?>" class="btn btn-light btn-sm"><i class="mdi mdi-pencil-box-outline"></i></a>
                                                <form action="/psu/<?= $val['id']; ?>" method="post" class="d-inline">
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
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>