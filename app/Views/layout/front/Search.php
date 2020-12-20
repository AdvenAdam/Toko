<?= $this->extend('layout/front/v_page/v_template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('layout/front/v_page/v_nav'); ?>
<?= $this->include('layout/front/v_page/v_modal'); ?>

<div class="breadcrumb-area breadcrumb-mt bg-gray breadcrumb-ptb-1">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Hasil Pencarian</h2>
            <p class="left">Menampilkan hasil dari :'<?= $keyword; ?>'</p>
        </div>
    </div>
    <div class="breadcrumb-img-2">
        <img src="/front/dking/assets/images/about/breadcrumb-3.png" alt="">
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
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
                                                <input type="hidden" name="kategori" value="motherboard">
                                                <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                            </form>
                                        <?php } else if (session()->get('level') == 'Guest') { ?>
                                            <form action="/wishlist/save" method="post">
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
                                                <input type="hidden" name="kategori" value="procesor">
                                                <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                            </form>
                                        <?php } else if (session()->get('level') == 'Guest') { ?>
                                            <form action="/wishlist/save" method="post">
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
                                                <input type="hidden" name="kategori" value="ram">
                                                <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                            </form>
                                        <?php } else if (session()->get('level') == 'Guest') { ?>
                                            <form action="/wishlist/save" method="post">
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
                                                <input type="hidden" name="kategori" value="memori">
                                                <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                            </form>
                                        <?php } else if (session()->get('level') == 'Guest') { ?>
                                            <form action="/wishlist/save" method="post">
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
                                                <input type="hidden" name="kategori" value="pendingin">
                                                <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                            </form>
                                        <?php } else if (session()->get('level') == 'Guest') { ?>
                                            <form action="/wishlist/save" method="post">
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
                                                <input type="hidden" name="kategori" value="psu">
                                                <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                            </form>
                                        <?php } else if (session()->get('level') == 'Guest') { ?>
                                            <form action="/wishlist/save" method="post">
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
                                                <input type="hidden" name="kategori" value="vga">
                                                <button title="Add to Cart" type="submit" class="button">Add to cart</button>
                                            </form>
                                        <?php } else if (session()->get('level') == 'Guest') { ?>
                                            <form action="/wishlist/save" method="post">
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
    </div>
</div>

<?= $this->endsection(); ?>