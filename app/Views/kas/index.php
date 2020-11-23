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
                            <a href="/kas/create" class="btn btn-primary ">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-bordered table-hover">
                                <thead>
                                    <tr align="middle">
                                        <th width="5%"><b>No</th>
                                        <th><b>Tanggal</th>
                                        <th><b>Jenis Kas</th>
                                        <th><b>Uraian</th>
                                        <th><b>Pemasukan</th>
                                        <th><b>Pengeluaran</th>
                                        <th><b>#</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($kas as $val) : ?>
                                        <?php
                                        $pemasukan += $val['pemasukan'];
                                        $pengeluaran += $val['pengeluaran'];
                                        $saldo += $val['pemasukan'] - $val['pengeluaran'];

                                        ?>
                                        <tr align="middle">
                                            <td><?= $i++; ?></td>
                                            <td><?= $val['created_at']; ?></td>
                                            <td><?= $val['jenis_kas']; ?></td>
                                            <td><?= $val['uraian']; ?></td>
                                            <td><?= number_format($val['pemasukan']); ?></td>
                                            <td><?= number_format($val['pengeluaran']); ?></td>
                                            <td><a href="/kas/<?= $val['kode_kas']; ?>" class="btn btn-info btn-sm"><i class="mdi mdi-magnify"></i></a>
                                                <a href="/kas/edit/<?= $val['kode_kas']; ?>" class="btn btn-light btn-sm"><i class="mdi mdi-pencil-box-outline"></i></a>
                                                <form action="/kas/<?= $val['id']; ?>" method="post" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-dark btn-sm" onclick="return confirm('Apakah Anda Yakin ?')"><i class="mdi mdi-delete"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tr>
                                    <th colspan="3">
                                        <center>
                                            <h2>Total</h2>
                                        </center>
                                    </th>
                                    <th><b>
                                            <h3>Rp.<?= number_format($pemasukan) ?></h3>
                                        </b></th>
                                    <th><b>
                                            <h3>Rp.<?= number_format($pengeluaran) ?></h3>
                                        </b></th>
                                    <td colspan="2"><b>
                                            <h3>Rp.<?= number_format($saldo) ?></h3>
                                        </b></td>
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