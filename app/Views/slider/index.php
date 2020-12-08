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
                                    <a href="/slider/create" class="btn btn-primary ">Tambah Data</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-hover">
                                <thead>
                                    <tr align="middle">
                                        <th width="5%"><b>No</b></th>
                                        <th><b>Gambar</b></th>
                                        <th><b>Baris Pertama</b></th>
                                        <th><b>Baris Kedua</b></th>
                                        <th><b>Link</b></th>
                                        <th><b>#</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($slider as $val) : ?>
                                        <tr align="middle">
                                            <td><?= $i++; ?></td>
                                            <td><img src="/img/slider/<?= $val['gambar']; ?>" alt="" class="tablegambar"></td>
                                            <td><?= $val['baris_satu']; ?></td>
                                            <td><?= $val['baris_dua']; ?></td>
                                            <td><?= $val['link']; ?></td>
                                            <td> <a href="/slider/edit/<?= $val['id']; ?>" class="btn btn-light btn-sm"><i class="mdi mdi-pencil-box-outline"></i></a>
                                                <form action="/slider/<?= $val['id']; ?>" method="post" class="d-inline">
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