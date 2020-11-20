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
                                    <a href="/pendingin" class="btn btn-rounded social-icon-btn btn-primary">
                                        <i class=" mdi mdi-arrow-left "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-body">
                            <div class="item-wrapper">
                                <div class="row ">
                                    <div class="col-md-3 ">
                                        <img src="/img/pendingin/<?= $pendingin['gambar']; ?>" alt="" class="gambar">
                                    </div>
                                    <div class="col-md-9 ">
                                        <table class="table">

                                            <tr>
                                                <td width="10%">Merk</td>
                                                <td><?= $pendingin['merk']; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="10%"> Nama</td>
                                                <td><?= $pendingin['nama']; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="10%">Harga</td>
                                                <td><?= $pendingin['harga']; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="10%"> Stok</td>
                                                <td> <?= $pendingin['stok']; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="10%"> Jenis Pendingin</td>
                                                <td> <?= $pendingin['jenis_pendingin']; ?></td>
                                            </tr>

                                            <tr>
                                                <td width="10%">Rincian
                                                <td><textarea class="form-control" cols="12" rows="10" readonly><?= $pendingin['rincian']; ?></textarea></td>
                                                </td>
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