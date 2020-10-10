<!-- Procie -->
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title mt-3"><?= $title; ?></h1><br><br><br>
                            <a href="/ram/create" class="btn btn-primary ">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Merk</th>
                                        <th>Nama</th>
                                        <th>Ukuran</th>
                                        <th>Frekuensi</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                    </tr>
                                </thead>
                                <?php $i = 1; ?>
                                <?php foreach ($ram as $val) : ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $val['merk']; ?></td>
                                            <td><?= $val['model']; ?></td>
                                            <td><?= $val['ukuran_ram'] . ' ' . $val['jenis_ram']; ?></td>
                                            <td><?= $val['frekuensi']; ?></td>
                                            <td><?= $val['harga']; ?></td>
                                            <td><?= $val['stok']; ?></td>
                                        </tr>
                                    </tbody>
                                <?php endforeach; ?>
                                <tfoot>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Merk</th>
                                        <th>Nama</th>
                                        <th>Ukuran</th>
                                        <th>Frekuensi</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>