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
                                    <a href="/kas/createMasuk" class="btn btn-primary btn-sm ">Input Pemasukan</a>
                                    <a href="/kas/createKeluar" class="btn btn-success btn-sm ">Input Pengeluaran</a>
                                </div>
                                <div class="col-sm-6" align="right">
                                    <a href="/kas/excel" class="btn btn-success btn-sm"><i class="mdi mdi-file-excel-box"></i> Export ke Excel</a>
                                    <a href="/kas/cetak" class="btn btn-warning btn-sm"><i class="mdi mdi-printer"></i> Cetak Data</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="example" class="table table-bordered table-hover">
                                    <thead>
                                        <tr align="middle">
                                            <th width="5%"><b>No</th>
                                            <th><b>Tanggal</th>
                                            <th><b>Jenis Kas</th>
                                            <th><b>Pemasukan</th>
                                            <th><b>Pengeluaran</th>
                                            <th><b>Saldo</th>
                                            <th><b>#</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($kas as $val) : ?>
                                            <?php
                                            $pemasukan += intval($val['pemasukan']);
                                            $pengeluaran += intval($val['pengeluaran']);
                                            $saldo += intval($val['pemasukan'] - $val['pengeluaran']);

                                            ?>
                                            <tr align="middle">
                                                <td><?= $i++; ?></td>
                                                <td><?= $val['created_at']; ?></td>
                                                <td><?= $val['jenis_kas']; ?></td>
                                                <td><?= number_format($val['pemasukan']); ?></td>
                                                <td><?= number_format($val['pengeluaran']); ?></td>
                                                <td><?= number_format($val['pemasukan'] - $val['pengeluaran']); ?></td>
                                                <td><a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_edit<?= $val['id']; ?>"><i class="mdi mdi-magnify"></i></a>
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
                                                <h4>Rp. <?= number_format($pemasukan) ?></h4>
                                            </b></th>
                                        <th><b>
                                                <h4>Rp. <?= number_format($pengeluaran) ?></h4>
                                            </b></th>
                                        <td colspan="2"><b>
                                                <h4>Rp. <?= number_format($saldo) ?></h4>
                                            </b></td>
                                    </tr>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <?php
                        foreach ($kas as $i) :
                            $id = $i['id'];
                            $kodekas = $i['kode_kas'];
                            $jeniskas = $i['jenis_kas'];
                            $pemasukan = $i['pemasukan'];
                            $pengeluaran = $i['pengeluaran'];
                            $uraian = $i['uraian'];
                            $tanggal = $i['created_at'];

                        ?>
                            <!-- Modal -->
                            <div class="modal fade" id="modal_edit<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Detail</h5>
                                            <button type="button" href="/kas" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <label class="col-sm-2 col-form-label">Kode Kas</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control " value="<?= $kodekas; ?>" readonly>
                                            </div>
                                            <label class="col-sm-2 col-form-label">Tanggal</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control " value="<?= $tanggal; ?>" readonly>
                                            </div>
                                            <label class="col-sm-2 col-form-label">Jenis Kas</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control " value="<?= $jeniskas; ?>" readonly>
                                            </div>
                                            <label class="col-sm-2 col-form-label">Pemasukan</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control " value="<?= $pemasukan; ?>" readonly>
                                            </div>
                                            <label class="col-sm-2 col-form-label">Pengeluaran</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control " value="<?= $pengeluaran; ?>" readonly>
                                            </div>
                                            <div class="form-group row showcase_row_area">
                                                <label for="uraian" class="col-sm-2 col-form-label">Uraian</label>
                                                <div class="col-sm-12">
                                                    <textarea class="form-control" cols="12" rows="5" readonly> <?= $uraian; ?></textarea>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" href="/kas" class="btn btn-primary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <?= $this->endSection(); ?>