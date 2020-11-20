<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="page-content-wrapper">
    <div class="page-content-wrapper-inner">
        <div class="content-viewport">
            <div class="row">
                <div class="col-12 py-5">
                    <div class="grid">
                        <div class="grid-header">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="my-3"><?= $title; ?></h3>
                                </div>
                                <div class="col-sm-6" align="right">
                                    <a href="/casing" class="btn btn-rounded social-icon-btn btn-primary">
                                        <i class=" mdi mdi-arrow-left-bold " size="10"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-body">
                            <div class="item-wrapper">
                                <div class="row ">
                                    <div class="col-md-3 ">
                                        <img src="/img/casing/<?= $casing['gambar']; ?>" alt="" class="gambar">
                                    </div>
                                    <div class="col-md-9 ">
                                        <table class="table">

                                            <tr>
                                                <td width="10%">Merk</td>
                                                <td><?= $casing['id']; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="10%"> Nama</td>
                                                <td><?= $casing['nama']; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="10%">Harga</td>
                                                <td><?= $casing['harga']; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="10%"> Stok</td>
                                                <td> <?= $casing['stok']; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="10%">Faktor Bentuk</td>
                                                <td><?= $casing['faktor_bentuk']; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="10%">Rincian</td>
                                                <td><textarea class="form-control" cols="12" rows="10" readonly><?= $casing['rincian']; ?></textarea></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?= $this->endSection(); ?>