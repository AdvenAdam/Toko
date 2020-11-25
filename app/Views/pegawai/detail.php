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
                                    <a href="/pegawai" class="btn btn-rounded social-icon-btn btn-primary">
                                        <i class=" mdi mdi-arrow-left "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-body">
                            <div class="item-wrapper">
                                <div class="row ">
                                    <div class="col-md-3 ">
                                        <img src="/img/pegawai/<?= $pegawai['foto']; ?>" alt="" class="gambar">
                                    </div>
                                    <div class="col-md-9 ">
                                        <table class="table">

                                            <tr>
                                                <td width="10%">no_pegawai</td>
                                                <td><?= $pegawai['no_pegawai']; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="10%"> Nama</td>
                                                <td><?= $pegawai['nama']; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="10%">Alamat</td>
                                                <td><?= $pegawai['alamat']; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="10%"> No Hp</td>
                                                <td> <?= $pegawai['no_hp']; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="10%">Email</td>
                                                <td><?= $pegawai['email']; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="10%">Jabatan</td>
                                                <td><?= $pegawai['jabatan']; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="10%">gaji_pokok</td>
                                                <td><?= $pegawai['gaji_pokok']; ?></td>
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