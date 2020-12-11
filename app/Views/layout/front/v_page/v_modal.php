<!-- Modal Casing-->
<?php foreach (array_reverse($casing) as $val) { ?>
    <div class="modal fade" id="exampleModal<?= $val['slug']; ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                            <div class="quickview-img">
                                <img src="/img/casing/<?= $val['gambar']; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                            <div class="product-details-content quickview-content">
                                <h2><?= $val['nama']; ?></h2>
                                <div class="product-ratting-review-wrap">
                                </div>
                                <p><?= $val['rincian']; ?></p>
                                <div class="pro-details-price">
                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                        <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                        <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                    <?php } else { ?>
                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                    <?php } ?>
                                </div>
                                <?php if (session()->get('level') == 'Customer_service') { ?>
                                    <div class="pro-details-quality">
                                        <span>Quantity:</span>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="product-details-meta">
                                    <ul>
                                        <li><span>Faktor Bentuk:</span> <?= $val['faktor_bentuk']; ?></li>
                                    </ul>
                                </div>
                                <div class="pro-details-action-wrap">
                                    <div class="pro-details-buy-now">
                                        <a href="#">Buy Now</a>
                                    </div>
                                    <div class="pro-details-action">
                                        <a title="Add to Cart" href="#"><i class="icon-basket"></i></a>
                                        <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Modal Motherboard -->
<?php foreach (array_reverse($motherboard) as $val) { ?>
    <div class="modal fade" id="exampleModal<?= $val['slug']; ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                            <div class="quickview-img">
                                <img src="/img/motherboard/<?= $val['gambar']; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                            <div class="product-details-content quickview-content">
                                <h2><?= $val['nama']; ?></h2>
                                <div class="product-ratting-review-wrap">
                                </div>
                                <p><?= $val['rincian']; ?></p>
                                <div class="pro-details-price">
                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                        <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                        <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                    <?php } else { ?>
                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                    <?php } ?>
                                </div>
                                <?php if (session()->get('level') == 'Customer_service') { ?>
                                    <div class="pro-details-quality">
                                        <span>Quantity:</span>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="product-details-meta">
                                    <ul>
                                        <li><span>Socket </span>: <?= $val['socket']; ?></li>
                                        <li><span>Chipset</span>: <?= $val['chipset']; ?></li>
                                        <li><span>Bentuk </span>: <?= $val['faktor_bentuk']; ?></li>
                                    </ul>
                                </div>
                                <div class="pro-details-action-wrap">
                                    <div class="pro-details-buy-now">
                                        <a href="#">Buy Now</a>
                                    </div>
                                    <div class="pro-details-action">
                                        <a title="Add to Cart" href="#"><i class="icon-basket"></i></a>
                                        <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Modal Procesor -->
<?php foreach (array_reverse($procesor) as $val) { ?>
    <div class="modal fade" id="exampleModal<?= $val['slug']; ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                            <div class="quickview-img">
                                <img src="/img/procesor/<?= $val['gambar']; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                            <div class="product-details-content quickview-content">
                                <h2><?= $val['nama']; ?></h2>
                                <div class="product-ratting-review-wrap">
                                </div>
                                <p><?= $val['rincian']; ?></p>
                                <div class="pro-details-price">
                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                        <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                        <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                    <?php } else { ?>
                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                    <?php } ?>
                                </div>
                                <?php if (session()->get('level') == 'Customer_service') { ?>
                                    <div class="pro-details-quality">
                                        <span>Quantity:</span>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="product-details-meta">
                                    <ul>
                                        <li><span>Socket </span>: <?= $val['socket']; ?></li>
                                        <li><span>Frekuensi</span>: <?= $val['frekuensi']; ?></li>
                                        <li><span>iGPU </span>: <?= $val['iGPU']; ?></li>
                                    </ul>
                                </div>
                                <div class="pro-details-action-wrap">
                                    <div class="pro-details-buy-now">
                                        <a href="#">Buy Now</a>
                                    </div>
                                    <div class="pro-details-action">
                                        <a title="Add to Cart" href="#"><i class="icon-basket"></i></a>
                                        <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Modal Memory -->
<?php foreach (array_reverse($memory) as $val) { ?>
    <div class="modal fade" id="exampleModal<?= $val['slug']; ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                            <div class="quickview-img">
                                <img src="/img/memori/<?= $val['gambar']; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                            <div class="product-details-content quickview-content">
                                <h2><?= $val['nama']; ?></h2>
                                <div class="product-ratting-review-wrap">
                                </div>
                                <p><?= $val['rincian']; ?></p>
                                <div class="pro-details-price">
                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                        <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                        <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                    <?php } else { ?>
                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                    <?php } ?>
                                </div>
                                <?php if (session()->get('level') == 'Customer_service') { ?>
                                    <div class="pro-details-quality">
                                        <span>Quantity:</span>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="product-details-meta">
                                    <ul>
                                        <li><span>Jenis </span>: <?= $val['jenis_memori']; ?></li>
                                        <li><span>Ukuran </span>: <?= $val['ukuran_memori']; ?></li>

                                    </ul>
                                </div>
                                <div class="pro-details-action-wrap">
                                    <div class="pro-details-buy-now">
                                        <a href="#">Buy Now</a>
                                    </div>
                                    <div class="pro-details-action">
                                        <a title="Add to Cart" href="#"><i class="icon-basket"></i></a>
                                        <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Modal VGA -->
<?php foreach (array_reverse($vga) as $val) { ?>
    <div class="modal fade" id="exampleModal<?= $val['slug']; ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                            <div class="quickview-img">
                                <img src="/img/vga/<?= $val['gambar']; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                            <div class="product-details-content quickview-content">
                                <h2><?= $val['nama']; ?></h2>
                                <div class="product-ratting-review-wrap">
                                </div>
                                <p><?= $val['rincian']; ?></p>
                                <div class="pro-details-price">
                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                        <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                        <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                    <?php } else { ?>
                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                    <?php } ?>
                                </div>
                                <?php if (session()->get('level') == 'Customer_service') { ?>
                                    <div class="pro-details-quality">
                                        <span>Quantity:</span>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="product-details-meta">
                                    <ul>
                                        <li><span>Base Clock </span>: <?= $val['base_clock'] . 'MHz'; ?></li>
                                        <li><span>Boost </span>: <?= $val['boost_clock'] . 'MHz'; ?></li>
                                        <li><span>Memori </span>: <?= $val['ukuran_memori'] . " GB" . '/' . $val['tipe_memori'] . '/' . $val['lebar_memori'] . "Bit"; ?></li>
                                    </ul>
                                </div>
                                <div class="pro-details-action-wrap">
                                    <div class="pro-details-buy-now">
                                        <a href="#">Buy Now</a>
                                    </div>
                                    <div class="pro-details-action">
                                        <a title="Add to Cart" href="#"><i class="icon-basket"></i></a>
                                        <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Modal Ram -->
<?php foreach (array_reverse($ram) as $val) { ?>
    <div class="modal fade" id="exampleModal<?= $val['slug']; ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                            <div class="quickview-img">
                                <img src="/img/ram/<?= $val['gambar']; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                            <div class="product-details-content quickview-content">
                                <h2><?= $val['nama']; ?></h2>
                                <div class="product-ratting-review-wrap">
                                </div>
                                <p><?= $val['rincian']; ?></p>
                                <div class="pro-details-price">
                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                        <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                        <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                    <?php } else { ?>
                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                    <?php } ?>
                                </div>
                                <?php if (session()->get('level') == 'Customer_service') { ?>
                                    <div class="pro-details-quality">
                                        <span>Quantity:</span>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="product-details-meta">
                                    <ul>
                                        <li><span>Ukuran </span>: <?= $val['ukuran_ram']; ?></li>
                                        <li><span>Jenis </span>: <?= $val['jenis_ram']; ?></li>
                                        <li><span>Frekuensi </span>: <?= $val['frekuensi'] . 'MHz'; ?></li>
                                    </ul>
                                </div>
                                <div class="pro-details-action-wrap">
                                    <div class="pro-details-buy-now">
                                        <a href="#">Buy Now</a>
                                    </div>
                                    <div class="pro-details-action">
                                        <a title="Add to Cart" href="#"><i class="icon-basket"></i></a>
                                        <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Modal Cooler -->
<?php foreach (array_reverse($pendingin) as $val) { ?>
    <div class="modal fade" id="exampleModal<?= $val['slug']; ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                            <div class="quickview-img">
                                <img src="/img/pendingin/<?= $val['gambar']; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                            <div class="product-details-content quickview-content">
                                <h2><?= $val['nama']; ?></h2>
                                <div class="product-ratting-review-wrap">
                                </div>
                                <p><?= $val['rincian']; ?></p>
                                <div class="pro-details-price">
                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                        <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                        <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                    <?php } else { ?>
                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                    <?php } ?>
                                </div>
                                <?php if (session()->get('level') == 'Customer_service') { ?>
                                    <div class="pro-details-quality">
                                        <span>Quantity:</span>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="product-details-meta">
                                    <ul>
                                        <li><span>Jenis </span>: <?= $val['jenis_pendingin']; ?></li>

                                    </ul>
                                </div>
                                <div class="pro-details-action-wrap">
                                    <div class="pro-details-buy-now">
                                        <a href="#">Buy Now</a>
                                    </div>
                                    <div class="pro-details-action">
                                        <a title="Add to Cart" href="#"><i class="icon-basket"></i></a>
                                        <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Modal Psu -->
<?php foreach (array_reverse($psu) as $val) { ?>
    <div class="modal fade" id="exampleModal<?= $val['slug']; ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                            <div class="quickview-img">
                                <img src="/img/psu/<?= $val['gambar']; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                            <div class="product-details-content quickview-content">
                                <h2><?= $val['nama']; ?></h2>
                                <div class="product-ratting-review-wrap">
                                </div>
                                <p><?= $val['rincian']; ?></p>
                                <div class="pro-details-price">
                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                        <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                        <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                    <?php } else { ?>
                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                    <?php } ?>
                                </div>
                                <?php if (session()->get('level') == 'Customer_service') { ?>
                                    <div class="pro-details-quality">
                                        <span>Quantity:</span>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="product-details-meta">
                                    <ul>
                                        <li><span>Sertifikat </span>: <?= $val['sertifikat']; ?></li>
                                        <li><span>Jenis Kabel </span>: <?= $val['jenis_kabel']; ?></li>
                                        <li><span>Power </span>: <?= $val['mb_power'] . 'W'; ?></li>

                                    </ul>
                                </div>
                                <div class="pro-details-action-wrap">
                                    <div class="pro-details-buy-now">
                                        <a href="#">Buy Now</a>
                                    </div>
                                    <div class="pro-details-action">
                                        <a title="Add to Cart" href="#"><i class="icon-basket"></i></a>
                                        <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>