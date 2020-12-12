<?= $this->extend('/layout/front/v_page/v_template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('/layout/front/v_page/v_nav'); ?>
<div class="breadcrumb-area breadcrumb-mt bg-gray breadcrumb-ptb-1">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2><?= $title; ?></h2>
            <p>Anda dapat mengetahui perkembangan service PC/laptop anda disini tanpa harus datang ke toko</p>
        </div>
    </div>
    <div class="breadcrumb-img-1">
        <img src="/front/dking/assets/images/about/breadcrumb-1.png" alt="">
    </div>
    <div class="breadcrumb-img-2">
        <img src="/front/dking/assets/images/about/breadcrumb-2.png" alt="">
    </div>
</div>
<div class="contact-us-area pt-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 ml-auto mr-auto">
                <div class="contact-form-area">
                    <div class="card-body">
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan') ?>
                            </div>
                        <?php endif; ?>
                        <div class="row">
                            <div class="col">
                                <?php if (session()->get('level') == 'Customer_service') { ?>
                                    <button data-toggle="modal" data-target="#modal_create" class="button">Tambah Data</button>
                                <?php } ?>
                            </div>
                            <div class="col-sm-4">
                                <div class="header-action-wrap header-action-flex header-action-width header-action-mrg-1">
                                    <div class="search-style-1">
                                        <form action="" method="POST">
                                            <div class="form-search-1">
                                                <input class="input-text" name="keyword" placeholder="Ketik Untuk Mencari (Cth: Nama, Antrian)" type="search">
                                                <button>
                                                    <i class="icofont-search-1"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table id="example" class="table table-bordered table-hover">
                        <thead>
                            <tr align="middle">
                                <th width="5%"><b>No</th>
                                <th><b>Nama</th>
                                <th><b>Antrian</th>
                                <th><b>No Hp</th>
                                <th><b>Email</th>
                                <th><b> Diterima</th>
                                <th><b>Status</th>
                                <?php if (session()->get('level') == 'Customer_service') { ?>
                                    <th><b>Cetak</th>
                                    <th><b>Hapus</b></th>
                                    <th><b>Ambil</b></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 + (10 * ($currentPage - 1)) ?>
                            <?php foreach ($service as $val) : ?>
                                <tr align="middle">
                                    <td><?= $i++; ?></td>
                                    <td><a href="" data-toggle="modal" data-target="#modal_service<?= $val['antrian_pc']; ?>"><?= $val['nama']; ?></a></td>
                                    <td><?= $val['antrian_pc']; ?></td>
                                    <td><?= $val['no_hp']; ?></td>
                                    <td><?= $val['email']; ?></td>
                                    <td><?= $val['created_at']; ?></td>
                                    <td><?= $val['status']; ?></td>
                                    <?php if (session()->get('level') == 'Customer_service') { ?>
                                        <td>
                                            <a href="/service/cetakBukti/<?= $val['antrian_pc']; ?>" title="Cetak Bukti"> <i class="icon-printer"></i> </a>
                                        </td>
                                        <td>
                                            <form action="/service/<?= $val['id']; ?>" method="post" class="d-inline">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="button" onclick="return confirm('Apakah Anda Yakin untuk Menghapus ?')"><i class="icofont-ui-delete"></i></button>
                                            </form>
                                        </td>
                                        <?php if ($val['status'] == 'selesai') { ?>
                                            <td>
                                                <form action="/service/<?= $val['id']; ?>" method="post" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="button" onclick="return confirm('Apakah Anda Yakin Untuk Mengambil Barang?')">Ambil</i></button>
                                                </form>
                                            </td>
                                        <?php } ?>
                                    <?php } ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?= $pager->links('service', 'pagination') ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal index  -->
<?php foreach ($service as $val) { ?>
    <div class="modal fade" id="modal_service<?= $val['antrian_pc']; ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-12">
                                <input type="text" value="<?= $val['nama']; ?>" readonly>
                            </div>
                            <label class="col-sm-2 col-form-label">Antrian</label>
                            <div class="col-sm-12">
                                <input type="text" value="<?= $val['antrian_pc']; ?>" readonly>
                            </div>
                            <label class="col-sm-6 col-form-label">No HP</label>
                            <div class="col-sm-12">
                                <input type="text" value="<?= $val['no_hp']; ?>" readonly>
                            </div>
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-12">
                                <input type="text" value="<?= $val['email']; ?>" readonly>
                            </div>
                            <label class="col-sm-2 col-form-label">Kerusakan</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" cols="12" rows="5" readonly><?= $val['kerusakan']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 col-sm-6">

                            <label class="col-sm-6 col-form-label">Diterima Tanggal</label>
                            <div class="col-sm-12">
                                <input type="text" value="<?= $val['created_at']; ?>" readonly>
                            </div>
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-12">
                                <input type="text" value="<?= $val['status'] . ' | ' . $val['updated_at']; ?>" readonly>
                            </div>
                            <?php if ($val['status'] != 'diterima') { ?>
                                <label class="col-sm-2 col-form-label">Teknisi</label>
                                <div class="col-sm-12">
                                    <input type="text" value="<?= $val['teknisi']; ?>" readonly>
                                </div>
                            <?php } ?>
                            <?php if ($val['status'] == 'selesai') { ?>
                                <label class="col-sm-2 col-form-label">Biaya</label>
                                <div class="col-sm-12">
                                    <input type="text" value="<?= 'Rp. ' . number_format($val['biaya']); ?>" readonly>
                                </div>
                                <label class="col-sm-6 col-form-label">Rincian Service</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" cols="12" rows="5" readonly><?= $val['rincian_service']; ?></textarea>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Modal Create -->
<div class="modal fade" id="modal_create" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            </div>
            <div class="modal-body">
                <center>
                    <h2><b> Input Service </b> </h2>
                </center>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-lg-10 col-md-10 col-10 col-sm-10">
                        <form action="/service/save" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="form-group row showcase_row_area">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= old('nama'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="status" value="diterima">
                            <div class="form-group row showcase_row_area">
                                <label for="antrian" class="col-sm-2 col-form-label">Antrian</label>
                                <div class="col-sm-4">
                                    <input type="text" id="antrian" name="antrian" value="" readonly>
                                </div>
                            </div>
                            <div class="form-group row showcase_row_area">
                                <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control phone <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>" id="no_hp" name="no_hp" value="<?= old('no_hp'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('no_hp'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row showcase_row_area">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" value="<?= old('email'); ?>">
                                </div>
                            </div>
                            <div class="form-group row showcase_row_area">
                                <label for="kerusakan" class="col-sm-2 col-form-label">Kerusakan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" cols="12" rows="5" id="kerusakan" name="kerusakan"> <?= old('kerusakan'); ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kerusakan'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row showcase_row_area">
                                <div class="col-sm-9">
                                </div>
                                <div class="col-sm-3">
                                    <button type="submit" class="button">Tambah Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>