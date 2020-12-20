<?= $this->extend('layout/front/v_page/v_template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('layout/front/v_page/v_nav'); ?>
<?= $this->include('layout/front/v_page/v_modal.php'); ?>
<div class="shop-area pt-200 pb-160">
    <div class="container">
        <div class="shop-categorie-tab mb-20 nav">
            <a href="#casing" data-toggle="tab" class="<?= ($uri->getSegment(2) == 'Casing') ? 'active' : ''; ?>">Casing </a>
            <a href="#motherboard" data-toggle="tab" class="<?= ($uri->getSegment(2) == 'Motherboard') ? 'active' : ''; ?>">Motherboard</a>
            <a href="#procesor" data-toggle="tab" class="<?= ($uri->getSegment(2) == 'Processor') ? 'active' : ''; ?>">Processor</a>
            <a href="#memory" data-toggle="tab" class="<?= ($uri->getSegment(2) == 'Memory') ? 'active' : ''; ?>">Memory</a>
            <a href="#vga" data-toggle="tab" class="<?= ($uri->getSegment(2) == 'VGA') ? 'active' : ''; ?>">VGA</a>
            <a href="#ram" data-toggle="tab" class="<?= ($uri->getSegment(2) == 'RAM') ? 'active' : ''; ?>">RAM</a>
            <a href="#cooler" data-toggle="tab" class=" <?= ($uri->getSegment(2) == 'Cooler') ? 'active' : ''; ?>">Cooler</a>
            <a href="#psu" data-toggle="tab" class="<?= ($uri->getSegment(2) == 'PSU') ? 'active' : ''; ?>">PSU</a>
        </div>
        <div class="row mb-30">
            <div class="col">
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan') ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <!-- <div class="widget-style-top">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="sidebar-widget mb-30">
                        <h4 class="pro-sidebar-title">Filter By Brand</h4>
                        <div class="sidebar-widget-brand-logo brand-logo-mrg-none mt-20">
                            <ul>
                                <?php foreach ($merk as $val) { ?>
                                    <li>
                                        <form action="" method="POST">
                                            <input type="hidden" name="merk" value="<?= $val['nama']; ?>">
                                            <input type="image" src="img/merk/<?= $val['gambar']; ?>" alt="Submit button">
                                        </form>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <div class="tab-content mt-30">
                    <div id="casing" class="tab-pane <?= ($uri->getSegment(2) == 'Casing') ? 'active' : ''; ?>">
                        <div class="shop-top-bar">
                            <div class="shop-top-bar-left">
                                <div class="shop-tab nav">
                                    <a href="#shop-1" class="active" data-toggle="tab"><img class="inject-me" src="/front/dking/assets/images/icon-img/shop-grid.svg" alt=""></a>
                                    <a href="#shop-2" data-toggle="tab"><img class="inject-me" src="/front/dking/assets/images/icon-img/shop-list.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content pt-30">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row">
                                    <?php foreach (array_reverse($casing) as $val) { ?>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="product-wrap mb-50">
                                                <div class="product-img product-img-zoom mb-25">
                                                    <img src="/img/casing/<?= $val['gambar']; ?>" class="img-fluid" alt="">
                                                </div>
                                                <div class="product-content">
                                                    <h4><?= $val['nama']; ?></a></h4>
                                                    <div class="product-price">
                                                        <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                            <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } else { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="product-action-position-1 text-center">
                                                    <div class="product-content">
                                                        <h4><?= $val['nama']; ?></a></h4>
                                                        <div class="product-price">
                                                            <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                                <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <?php } else { ?>
                                                                <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-wrap">
                                                        <div class="product-action-cart">
                                                            <?php if (session()->get('level') == 'Customer_service' && $val['stok'] > 0) { ?>
                                                                <form action="/shop/add" method="post">
                                                                    <input type="hidden" name="id" value="<?= $val['id']; ?>">
                                                                    <input type="hidden" name="name" value="<?= $val['nama']; ?>">
                                                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga_new']; ?>">
                                                                    <?php } else { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga']; ?>">
                                                                    <?php } ?>
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="casing">
                                                                    <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                                                </form>
                                                            <?php } else if (session()->get('level') == 'Guest') { ?>
                                                                <form action="/wishlist/save" method="post">
                                                                    <?php $slug =  url_title(session()->get('username') . $val['nama'], '-', true) ?>
                                                                    <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                                    <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="casing">
                                                                    <button class="button" type="submit">Add To Wishlist</button>
                                                                </form>
                                                            <?php } ?>
                                                        </div>
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="shop-2" class="tab-pane ">
                                <?php foreach (array_reverse($casing) as $val) { ?>
                                    <div class="shop-list-wrap mb-50">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="product-list-img">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>">
                                                        <img src="/img/casing/<?= $val['gambar']; ?>" alt="" class="img-fluid">
                                                    </a>
                                                    <div class="shop-list-quickview">
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <div class="shop-list-content ml-20">
                                                    <h3><a href="#"><?= $val['nama']; ?></a></h3>
                                                    <div class="pro-list-price">
                                                        <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                            <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } else { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } ?>
                                                    </div>
                                                    <p><?= $val['rincian']; ?></p>
                                                    <div class="product-list-action">
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <div class="product-action-cart">
                                                            <?php if (session()->get('level') == 'Customer_service') { ?>
                                                                <form action="/shop/add" method="post">
                                                                    <input type="hidden" name="id" value="<?= $val['id']; ?>">
                                                                    <input type="hidden" name="name" value="<?= $val['nama']; ?>">
                                                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga_new']; ?>">
                                                                    <?php } else { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga']; ?>">
                                                                    <?php } ?>
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="casing">
                                                                    <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                                                </form>
                                                            <?php } else if (session()->get('level') == 'Guest') { ?>
                                                                <form action="/wishlist/save" method="post">
                                                                    <?php $slug =  url_title(session()->get('username') . $val['nama'], true) ?>
                                                                    <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                                    <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="casing">
                                                                    <button type="submit" class="submit" title=" Add to Wishlist">Add To Wishlist</button>
                                                                </form>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div id="motherboard" class="tab-pane <?= ($uri->getSegment(2) == 'Motherboard') ? 'active' : ''; ?>">
                        <div class="shop-top-bar">
                            <div class="shop-top-bar-left">
                                <div class="shop-tab nav">
                                    <a href="#shop-3" class="active" data-toggle="tab"><img class="inject-me" src="/front/dking/assets/images/icon-img/shop-grid.svg" alt=""></a>
                                    <a href="#shop-4" data-toggle="tab"><img class="inject-me" src="/front/dking/assets/images/icon-img/shop-list.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content pt-30">
                            <div id="shop-3" class="tab-pane active">
                                <div class="row">
                                    <?php foreach (array_reverse($motherboard) as $val) { ?>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="product-wrap mb-50">
                                                <div class="product-img product-img-zoom mb-25">
                                                    <img src="/img/motherboard/<?= $val['gambar']; ?>" class="img-fluid" alt="">
                                                </div>
                                                <div class="product-content">
                                                    <h4><?= $val['nama']; ?></a></h4>
                                                    <div class="product-price">
                                                        <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                            <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } else { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="product-action-position-1 text-center">
                                                    <div class="product-content">
                                                        <h4><?= $val['nama']; ?></a></h4>
                                                        <div class="product-price">
                                                            <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                                <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <?php } else { ?>
                                                                <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-wrap">
                                                        <div class="product-action-cart">
                                                            <?php if (session()->get('level') == 'Customer_service') { ?>
                                                                <form action="/shop/add" method="post">
                                                                    <input type="hidden" name="id" value="<?= $val['id']; ?>">
                                                                    <input type="hidden" name="name" value="<?= $val['nama']; ?>">
                                                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga_new']; ?>">
                                                                    <?php } else { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga']; ?>">
                                                                    <?php } ?>
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="motherboard">
                                                                    <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                                                </form>
                                                            <?php } else if (session()->get('level') == 'Guest') { ?>
                                                                <form action="//wishlist/save" method="post">
                                                                    <?php $slug =  url_title(session()->get('username') . $val['nama'], '-', true) ?>
                                                                    <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                                    <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="motherboard">
                                                                    <button class="button" type="submit">Add To Wishlist</button>
                                                                </form>
                                                            <?php } ?>
                                                        </div>
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="shop-4" class="tab-pane ">
                                <?php foreach (array_reverse($motherboard) as $val) { ?>
                                    <div class="shop-list-wrap mb-50">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="product-list-img">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>">
                                                        <img src="/img/motherboard/<?= $val['gambar']; ?>" alt="" class="img-fluid">
                                                    </a>
                                                    <div class="shop-list-quickview">
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <div class="shop-list-content ml-20">
                                                    <h3><a href="#"><?= $val['nama']; ?></a></h3>
                                                    <div class="pro-list-price">
                                                        <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                            <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } else { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } ?>
                                                    </div>
                                                    <p><?= $val['rincian']; ?></p>
                                                    <div class="product-list-action">
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <div class="product-action-cart">
                                                            <?php if (session()->get('level') == 'Customer_service') { ?>
                                                                <form action="/shop/add" method="post">
                                                                    <input type="hidden" name="id" value="<?= $val['id']; ?>">
                                                                    <input type="hidden" name="name" value="<?= $val['nama']; ?>">
                                                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga_new']; ?>">
                                                                    <?php } else { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga']; ?>">
                                                                    <?php } ?>
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="motherboard">
                                                                    <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                                                </form>
                                                            <?php } else if (session()->get('level') == 'Guest') { ?>
                                                                <?php $slug =  url_title(session()->get('username') . $val['nama'], true) ?>
                                                                <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                                <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                                <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                <input type="hidden" name="kategori" value="motherboard">
                                                                <button type="submit" class="submit" title=" Add to Wishlist">Add To Wishlist</button>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div id="procesor" class="tab-pane <?= ($uri->getSegment(2) == 'Processor') ? 'active' : ''; ?>">
                        <div class="shop-top-bar">
                            <div class="shop-top-bar-left">
                                <div class="shop-tab nav">
                                    <a href="#shop-5" class="active" data-toggle="tab"><img class="inject-me" src="/front/dking/assets/images/icon-img/shop-grid.svg" alt=""></a>
                                    <a href="#shop-6" data-toggle="tab"><img class="inject-me" src="/front/dking/assets/images/icon-img/shop-list.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content pt-30">
                            <div id="shop-5" class="tab-pane active">
                                <div class="row">
                                    <?php foreach (array_reverse($procesor) as $val) { ?>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="product-wrap mb-50">
                                                <div class="product-img product-img-zoom mb-25">
                                                    <img src="/img/procesor/<?= $val['gambar']; ?>" class="img-fluid" alt="">
                                                </div>
                                                <div class="product-content">
                                                    <h4><?= $val['nama']; ?></a></h4>
                                                    <div class="product-price">
                                                        <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                            <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } else { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="product-action-position-1 text-center">
                                                    <div class="product-content">
                                                        <h4><?= $val['nama']; ?></a></h4>
                                                        <div class="product-price">
                                                            <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                                <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <?php } else { ?>
                                                                <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-wrap">
                                                        <div class="product-action-cart">
                                                            <?php if (session()->get('level') == 'Customer_service') { ?>
                                                                <form action="/shop/add" method="post">
                                                                    <input type="hidden" name="id" value="<?= $val['id']; ?>">
                                                                    <input type="hidden" name="name" value="<?= $val['nama']; ?>">
                                                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga_new']; ?>">
                                                                    <?php } else { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga']; ?>">
                                                                    <?php } ?>
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="procesor">
                                                                    <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                                                </form>
                                                            <?php } else if (session()->get('level') == 'Guest') { ?>
                                                                <form action="//wishlist/save" method="post">
                                                                    <?php $slug =  url_title(session()->get('username') . $val['nama'], '-', true) ?>
                                                                    <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                                    <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="procesor">
                                                                    <button class="button" type="submit">Add To Wishlist</button>
                                                                </form>
                                                            <?php } ?>
                                                        </div>
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="shop-6" class="tab-pane ">
                                <?php foreach (array_reverse($procesor) as $val) { ?>
                                    <div class="shop-list-wrap mb-50">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="product-list-img">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>">
                                                        <img src="/img/procesor/<?= $val['gambar']; ?>" alt="" class="img-fluid">
                                                    </a>
                                                    <div class="shop-list-quickview">
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <div class="shop-list-content ml-20">
                                                    <h3><a href="#"><?= $val['nama']; ?></a></h3>
                                                    <div class="pro-list-price">
                                                        <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                            <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } else { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } ?>
                                                    </div>
                                                    <p><?= $val['rincian']; ?></p>
                                                    <div class="product-list-action">
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <div class="product-action-cart">
                                                            <?php if (session()->get('level') == 'Customer_service') { ?>
                                                                <form action="/shop/add" method="post">
                                                                    <input type="hidden" name="id" value="<?= $val['id']; ?>">
                                                                    <input type="hidden" name="name" value="<?= $val['nama']; ?>">
                                                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga_new']; ?>">
                                                                    <?php } else { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga']; ?>">
                                                                    <?php } ?>
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="procesor">
                                                                    <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                                                </form>
                                                            <?php } else if (session()->get('level') == 'Guest') { ?>
                                                                <?php $slug =  url_title(session()->get('username') . $val['nama'], true) ?>
                                                                <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                                <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                                <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                <input type="hidden" name="kategori" value="procesor">
                                                                <button type="submit" class="submit" title=" Add to Wishlist">Add To Wishlist</button>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div id="memory" class="tab-pane <?= ($uri->getSegment(2) == 'Memory') ? 'active' : ''; ?>">
                        <div class="shop-top-bar">
                            <div class="shop-top-bar-left">
                                <div class="shop-tab nav">
                                    <a href="#shop-7" class="active" data-toggle="tab"><img class="inject-me" src="/front/dking/assets/images/icon-img/shop-grid.svg" alt=""></a>
                                    <a href="#shop-8" data-toggle="tab"><img class="inject-me" src="/front/dking/assets/images/icon-img/shop-list.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content pt-30">
                            <div id="shop-7" class="tab-pane active">
                                <div class="row">
                                    <?php foreach (array_reverse($memory) as $val) { ?>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="product-wrap mb-50">
                                                <div class="product-img product-img-zoom mb-25">
                                                    <img src="/img/memori/<?= $val['gambar']; ?>" class="img-fluid" alt="">
                                                </div>
                                                <div class="product-content">
                                                    <h4><?= $val['nama']; ?></a></h4>
                                                    <div class="product-price">
                                                        <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                            <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } else { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="product-action-position-1 text-center">
                                                    <div class="product-content">
                                                        <h4><?= $val['nama']; ?></a></h4>
                                                        <div class="product-price">
                                                            <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                                <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <?php } else { ?>
                                                                <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-wrap">
                                                        <div class="product-action-cart">
                                                            <?php if (session()->get('level') == 'Customer_service') { ?>
                                                                <form action="/shop/add" method="post">
                                                                    <input type="hidden" name="id" value="<?= $val['id']; ?>">
                                                                    <input type="hidden" name="name" value="<?= $val['nama']; ?>">
                                                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga_new']; ?>">
                                                                    <?php } else { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga']; ?>">
                                                                    <?php } ?>
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="memori">
                                                                    <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                                                </form>
                                                            <?php } else if (session()->get('level') == 'Guest') { ?>
                                                                <form action="//wishlist/save" method="post">
                                                                    <?php $slug =  url_title(session()->get('username') . $val['nama'], '-', true) ?>
                                                                    <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                                    <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="memori">
                                                                    <button class="button" type="submit">Add To Wishlist</button>
                                                                </form>
                                                            <?php } ?>
                                                        </div>
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="shop-8" class="tab-pane ">
                                <?php foreach (array_reverse($memory) as $val) { ?>
                                    <div class="shop-list-wrap mb-50">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="product-list-img">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>">
                                                        <img src="/img/memori/<?= $val['gambar']; ?>" alt="" class="img-fluid">
                                                    </a>
                                                    <div class="shop-list-quickview">
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <div class="shop-list-content ml-20">
                                                    <h3><a href="#"><?= $val['nama']; ?></a></h3>
                                                    <div class="pro-list-price">
                                                        <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                            <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } else { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } ?>
                                                    </div>
                                                    <p><?= $val['rincian']; ?></p>
                                                    <div class="product-list-action">
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <div class="product-action-cart">
                                                            <?php if (session()->get('level') == 'Customer_service') { ?>
                                                                <form action="/shop/add" method="post">
                                                                    <input type="hidden" name="id" value="<?= $val['id']; ?>">
                                                                    <input type="hidden" name="name" value="<?= $val['nama']; ?>">
                                                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga_new']; ?>">
                                                                    <?php } else { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga']; ?>">
                                                                    <?php } ?>
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="memori">
                                                                    <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                                                </form>
                                                            <?php } else if (session()->get('level') == 'Guest') { ?>
                                                                <?php $slug =  url_title(session()->get('username') . $val['nama'], true) ?>
                                                                <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                                <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                                <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                <input type="hidden" name="kategori" value="memori">
                                                                <button type="submit" class="submit" title=" Add to Wishlist">Add To Wishlist</button>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div id="vga" class="tab-pane <?= ($uri->getSegment(2) == 'VGA') ? 'active' : ''; ?>">
                        <div class="shop-top-bar">
                            <div class="shop-top-bar-left">
                                <div class="shop-tab nav">
                                    <a href="#shop-9" class="active" data-toggle="tab"><img class="inject-me" src="/front/dking/assets/images/icon-img/shop-grid.svg" alt=""></a>
                                    <a href="#shop-10" data-toggle="tab"><img class="inject-me" src="/front/dking/assets/images/icon-img/shop-list.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content pt-30">
                            <div id="shop-9" class="tab-pane active">
                                <div class="row">
                                    <?php foreach (array_reverse($vga) as $val) { ?>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="product-wrap mb-50">
                                                <div class="product-img product-img-zoom mb-25">
                                                    <img src="/img/vga/<?= $val['gambar']; ?>" class="img-fluid" alt="">
                                                </div>
                                                <div class="product-content">
                                                    <h4><?= $val['nama']; ?></a></h4>
                                                    <div class="product-price">
                                                        <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                            <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } else { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="product-action-position-1 text-center">
                                                    <div class="product-content">
                                                        <h4><?= $val['nama']; ?></a></h4>
                                                        <div class="product-price">
                                                            <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                                <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <?php } else { ?>
                                                                <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-wrap">
                                                        <div class="product-action-cart">
                                                            <?php if (session()->get('level') == 'Customer_service') { ?>
                                                                <form action="/shop/add" method="post">
                                                                    <input type="hidden" name="id" value="<?= $val['id']; ?>">
                                                                    <input type="hidden" name="name" value="<?= $val['nama']; ?>">
                                                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga_new']; ?>">
                                                                    <?php } else { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga']; ?>">
                                                                    <?php } ?>
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="vga">
                                                                    <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                                                </form>
                                                            <?php } else if (session()->get('level') == 'Guest') { ?>
                                                                <form action="//wishlist/save" method="post">
                                                                    <?php $slug =  url_title(session()->get('username') . $val['nama'], '-', true) ?>
                                                                    <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                                    <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="vga">
                                                                    <button class="button" type="submit">Add To Wishlist</button>
                                                                </form>
                                                            <?php } ?>
                                                        </div>
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="shop-10" class="tab-pane ">
                                <?php foreach (array_reverse($vga) as $val) { ?>
                                    <div class="shop-list-wrap mb-50">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="product-list-img">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>">
                                                        <img src="/img/vga/<?= $val['gambar']; ?>" alt="" class="img-fluid">
                                                    </a>
                                                    <div class="shop-list-quickview">
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <div class="shop-list-content ml-20">
                                                    <h3><a href="#"><?= $val['nama']; ?></a></h3>
                                                    <div class="pro-list-price">
                                                        <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                            <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } else { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } ?>
                                                    </div>
                                                    <p><?= $val['rincian']; ?></p>
                                                    <div class="product-list-action">
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <div class="product-action-cart">
                                                            <?php if (session()->get('level') == 'Customer_service') { ?>
                                                                <form action="/shop/add" method="post">
                                                                    <input type="hidden" name="id" value="<?= $val['id']; ?>">
                                                                    <input type="hidden" name="name" value="<?= $val['nama']; ?>">
                                                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga_new']; ?>">
                                                                    <?php } else { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga']; ?>">
                                                                    <?php } ?>
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="vga">
                                                                    <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                                                </form>
                                                            <?php } else if (session()->get('level') == 'Guest') { ?>
                                                                <?php $slug =  url_title(session()->get('username') . $val['nama'], true) ?>
                                                                <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                                <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                                <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                <input type="hidden" name="kategori" value="vga">
                                                                <button type="submit" class="submit" title=" Add to Wishlist">Add To Wishlist</button>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div id="ram" class="tab-pane <?= ($uri->getSegment(2) == 'RAM') ? 'active' : ''; ?>">
                        <div class="shop-top-bar">
                            <div class="shop-top-bar-left">
                                <div class="shop-tab nav">
                                    <a href="#shop-11" class="active" data-toggle="tab"><img class="inject-me" src="/front/dking/assets/images/icon-img/shop-grid.svg" alt=""></a>
                                    <a href="#shop-12" data-toggle="tab"><img class="inject-me" src="/front/dking/assets/images/icon-img/shop-list.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content pt-30">
                            <div id="shop-11" class="tab-pane active">
                                <div class="row">
                                    <?php foreach (array_reverse($ram) as $val) { ?>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="product-wrap mb-50">
                                                <div class="product-img product-img-zoom mb-25">
                                                    <img src="/img/ram/<?= $val['gambar']; ?>" class="img-fluid" alt="">
                                                </div>
                                                <div class="product-content">
                                                    <h4><?= $val['nama']; ?></a></h4>
                                                    <div class="product-price">
                                                        <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                            <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } else { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="product-action-position-1 text-center">
                                                    <div class="product-content">
                                                        <h4><?= $val['nama']; ?></a></h4>
                                                        <div class="product-price">
                                                            <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                                <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <?php } else { ?>
                                                                <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-wrap">
                                                        <div class="product-action-cart">
                                                            <?php if (session()->get('level') == 'Customer_service') { ?>
                                                                <form action="/shop/add" method="post">
                                                                    <input type="hidden" name="id" value="<?= $val['id']; ?>">
                                                                    <input type="hidden" name="name" value="<?= $val['nama']; ?>">
                                                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga_new']; ?>">
                                                                    <?php } else { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga']; ?>">
                                                                    <?php } ?>
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="ram">
                                                                    <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                                                </form>
                                                            <?php } else if (session()->get('level') == 'Guest') { ?>
                                                                <form action="//wishlist/save" method="post">
                                                                    <?php $slug =  url_title(session()->get('username') . $val['nama'], '-', true) ?>
                                                                    <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                                    <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="ram">
                                                                    <button class="button" type="submit">Add To Wishlist</button>
                                                                </form>
                                                            <?php } ?>
                                                        </div>
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="shop-12" class="tab-pane ">
                                <?php foreach (array_reverse($ram) as $val) { ?>
                                    <div class="shop-list-wrap mb-50">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="product-list-img">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>">
                                                        <img src="/img/ram/<?= $val['gambar']; ?>" alt="" class="img-fluid">
                                                    </a>
                                                    <div class="shop-list-quickview">
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <div class="shop-list-content ml-20">
                                                    <h3><a href="#"><?= $val['nama']; ?></a></h3>
                                                    <div class="pro-list-price">
                                                        <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                            <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } else { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } ?>
                                                    </div>
                                                    <p><?= $val['rincian']; ?></p>
                                                    <div class="product-list-action">
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <div class="product-action-cart">
                                                            <?php if (session()->get('level') == 'Customer_service') { ?>
                                                                <form action="/shop/add" method="post">
                                                                    <input type="hidden" name="id" value="<?= $val['id']; ?>">
                                                                    <input type="hidden" name="name" value="<?= $val['nama']; ?>">
                                                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga_new']; ?>">
                                                                    <?php } else { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga']; ?>">
                                                                    <?php } ?>
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="ram">
                                                                    <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                                                </form>
                                                            <?php } else if (session()->get('level') == 'Guest') { ?>
                                                                <?php $slug =  url_title(session()->get('username') . $val['nama'], true) ?>
                                                                <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                                <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                                <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                <input type="hidden" name="kategori" value="ram">
                                                                <button type="submit" class="submit" title=" Add to Wishlist">Add To Wishlist</button>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div id="cooler" class="tab-pane <?= ($uri->getSegment(2) == 'Cooler') ? 'active' : ''; ?>">
                        <div class="shop-top-bar">
                            <div class="shop-top-bar-left">
                                <div class="shop-tab nav">
                                    <a href="#shop-13" class="active" data-toggle="tab"><img class="inject-me" src="/front/dking/assets/images/icon-img/shop-grid.svg" alt=""></a>
                                    <a href="#shop-14" data-toggle="tab"><img class="inject-me" src="/front/dking/assets/images/icon-img/shop-list.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content pt-30">
                            <div id="shop-13" class="tab-pane active">
                                <div class="row">
                                    <?php foreach (array_reverse($pendingin) as $val) { ?>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="product-wrap mb-50">
                                                <div class="product-img product-img-zoom mb-25">
                                                    <img src="/img/pendingin/<?= $val['gambar']; ?>" class="img-fluid" alt="">
                                                </div>
                                                <div class="product-content">
                                                    <h4><?= $val['nama']; ?></a></h4>
                                                    <div class="product-price">
                                                        <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                            <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } else { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="product-action-position-1 text-center">
                                                    <div class="product-content">
                                                        <h4><?= $val['nama']; ?></a></h4>
                                                        <div class="product-price">
                                                            <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                                <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <?php } else { ?>
                                                                <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-wrap">
                                                        <div class="product-action-cart">
                                                            <?php if (session()->get('level') == 'Customer_service') { ?>
                                                                <form action="/shop/add" method="post">
                                                                    <input type="hidden" name="id" value="<?= $val['id']; ?>">
                                                                    <input type="hidden" name="name" value="<?= $val['nama']; ?>">
                                                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga_new']; ?>">
                                                                    <?php } else { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga']; ?>">
                                                                    <?php } ?>
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="pendingin">
                                                                    <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                                                </form>
                                                            <?php } else if (session()->get('level') == 'Guest') { ?>
                                                                <form action="//wishlist/save" method="post">
                                                                    <?php $slug =  url_title(session()->get('username') . $val['nama'], '-', true) ?>
                                                                    <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                                    <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="pendingin">
                                                                    <button class="button" type="submit">Add To Wishlist</button>
                                                                </form>
                                                            <?php } ?>
                                                        </div>
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="shop-14" class="tab-pane ">
                                <?php foreach (array_reverse($pendingin) as $val) { ?>
                                    <div class="shop-list-wrap mb-50">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="product-list-img">
                                                    <img src="/img/pendingin/<?= $val['gambar']; ?>" alt="" class="img-fluid">
                                                    <div class="shop-list-quickview">
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <div class="shop-list-content ml-20">
                                                    <h3><a href="#"><?= $val['nama']; ?></a></h3>
                                                    <div class="pro-list-price">
                                                        <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                            <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } else { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } ?>
                                                    </div>
                                                    <p><?= $val['rincian']; ?></p>
                                                    <div class="product-list-action">
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <div class="product-action-cart">
                                                            <?php if (session()->get('level') == 'Customer_service') { ?>
                                                                <form action="/shop/add" method="post">
                                                                    <input type="hidden" name="id" value="<?= $val['id']; ?>">
                                                                    <input type="hidden" name="name" value="<?= $val['nama']; ?>">
                                                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga_new']; ?>">
                                                                    <?php } else { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga']; ?>">
                                                                    <?php } ?>
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="pendingin">
                                                                    <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                                                </form>
                                                            <?php } else if (session()->get('level') == 'Guest') { ?>
                                                                <?php $slug =  url_title(session()->get('username') . $val['nama'], true) ?>
                                                                <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                                <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                                <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                <input type="hidden" name="kategori" value="pendingin">
                                                                <button type="submit" class="submit" title=" Add to Wishlist">Add To Wishlist</button>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div id="psu" class="tab-pane <?= ($uri->getSegment(2) == 'PSU') ? 'active' : ''; ?>">
                        <div class="shop-top-bar">
                            <div class="shop-top-bar-left">
                                <div class="shop-tab nav">
                                    <a href="#shop-15" class="active" data-toggle="tab"><img class="inject-me" src="/front/dking/assets/images/icon-img/shop-grid.svg" alt=""></a>
                                    <a href="#shop-16" data-toggle="tab"><img class="inject-me" src="/front/dking/assets/images/icon-img/shop-list.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content pt-30">
                            <div id="shop-15" class="tab-pane active">
                                <div class="row">
                                    <?php foreach (array_reverse($psu) as $val) { ?>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="product-wrap mb-50">
                                                <div class="product-img product-img-zoom mb-25">
                                                    <img src="/img/psu/<?= $val['gambar']; ?>" class="img-fluid" alt="">
                                                </div>
                                                <div class="product-content">
                                                    <h4><?= $val['nama']; ?></a></h4>
                                                    <div class="product-price">
                                                        <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                            <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } else { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="product-action-position-1 text-center">
                                                    <div class="product-content">
                                                        <h4><?= $val['nama']; ?></a></h4>
                                                        <div class="product-price">
                                                            <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                                <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <?php } else { ?>
                                                                <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-wrap">
                                                        <div class="product-action-cart">
                                                            <?php if (session()->get('level') == 'Customer_service') { ?>
                                                                <form action="/shop/add" method="post">
                                                                    <input type="hidden" name="id" value="<?= $val['id']; ?>">
                                                                    <input type="hidden" name="name" value="<?= $val['nama']; ?>">
                                                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga_new']; ?>">
                                                                    <?php } else { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga']; ?>">
                                                                    <?php } ?>
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="psu">
                                                                    <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                                                </form>
                                                            <?php } else if (session()->get('level') == 'Guest') { ?>
                                                                <form action="//wishlist/save" method="post">
                                                                    <?php $slug =  url_title(session()->get('username') . $val['nama'], '-', true) ?>
                                                                    <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                                    <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="psu">
                                                                    <button class="button" type="submit">Add To Wishlist</button>
                                                                </form>
                                                            <?php } ?>
                                                        </div>
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="shop-16" class="tab-pane ">
                                <?php foreach (array_reverse($psu) as $val) { ?>
                                    <div class="shop-list-wrap mb-50">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="product-list-img">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>">
                                                        <img src="/img/psu/<?= $val['gambar']; ?>" alt="" class="img-fluid">
                                                    </a>
                                                    <div class="shop-list-quickview">
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <div class="shop-list-content ml-20">
                                                    <h3><a href="#"><?= $val['nama']; ?></a></h3>
                                                    <div class="pro-list-price">
                                                        <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga_new'])); ?></span>
                                                            <span class="old-price"><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } else { ?>
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <?php } ?>
                                                    </div>
                                                    <p><?= $val['rincian']; ?></p>
                                                    <div class="product-list-action">
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <div class="product-action-cart">
                                                            <?php if (session()->get('level') == 'Customer_service') { ?>
                                                                <form action="/shop/add" method="post">
                                                                    <input type="hidden" name="id" value="<?= $val['id']; ?>">
                                                                    <input type="hidden" name="name" value="<?= $val['nama']; ?>">
                                                                    <?php if ($val['diskon'] > 0 && $val['berlaku'] > date('Y-m-d')) { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga_new']; ?>">
                                                                    <?php } else { ?>
                                                                        <input type="hidden" name="price" value="<?= $val['harga']; ?>">
                                                                    <?php } ?>
                                                                    <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                    <input type="hidden" name="kategori" value="psuu">
                                                                    <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                                                </form>
                                                            <?php } else if (session()->get('level') == 'Guest') { ?>
                                                                <?php $slug =  url_title(session()->get('username') . $val['nama'], true) ?>
                                                                <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                                <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                                <input type="hidden" name="gambar" value="<?= $val['gambar']; ?>">
                                                                <input type="hidden" name="kategori" value="psu">
                                                                <button type="submit" class="submit" title=" Add to Wishlist">Add To Wishlist</button>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endsection(); ?>