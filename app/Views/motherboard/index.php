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
                                    <a href="/motherboard/create" class="btn btn-primary ">Tambah Data</a>
                                </div>
                                <div class="col-sm-6" align="right">
                                    <a href="/motherboard/excel" class="btn btn-success btn-sm"><i class="mdi mdi-file-excel-box"></i> Export ke Excel</a>
                                    <a href="/motherboard/cetak" class="btn btn-warning btn-sm"><i class="mdi mdi-printer"></i> Cetak Data</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-bordered display nowrap table-hover">
                                <thead>
                                    <tr align="middle">
                                        <th width="5%"><b>No</th>
                                        <th><b>Merk</th>
                                        <th><b>Nama</th>
                                        <th><b>Faktor Bentuk</th>
                                        <th><b>Socket</th>
                                        <th><b>Chipset</th>
                                        <th><b>Harga</th>
                                        <th><b>Stok</th>
                                        <th><b>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($motherboard as $val) : ?>
                                        <tr align="middle">
                                            <td><?= $i++; ?></td>
                                            <td><?= $val['merk']; ?></td>
                                            <td><?= $val['nama']; ?></td>
                                            <td><?= $val['faktor_bentuk']; ?></td>
                                            <td><?= $val['socket']; ?></td>
                                            <td><?= $val['chipset']; ?></td>
                                            <td><?= number_format($val['harga']); ?></td>
                                            <td><?= $val['stok']; ?></td>
                                            <td><a href="/motherboard/<?= $val['slug']; ?>" class="btn btn-info btn-sm"><i class="mdi mdi-magnify"></i></a>
                                                <a href="/motherboard/edit/<?= $val['slug']; ?>" class="btn btn-light btn-sm"><i class="mdi mdi-pencil-box-outline"></i></a>
                                                <form action="/motherboard/<?= $val['id']; ?>" method="post" class="d-inline">
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

        <?= $this->endSection(); ?>