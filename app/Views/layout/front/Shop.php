<?= $this->extend('layout/front/v_page/v_template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('layout/front/v_page/v_nav'); ?>
<?= $this->include('layout/front/v_page/v_modal.php'); ?>
<div class="shop-area pt-160 pb-160">
    <div class="container">
        <div class="shop-categorie-tab mb-20 nav">
            <a href="#casing" data-toggle="tab" class="<?= ($uri->getSegment(2) == 'Casing') ? 'active' : ''; ?>">Casing </a>
            <a href="#motherboard" data-toggle="tab" class="<?= ($uri->getSegment(2) == 'Motherboard') ? 'active' : ''; ?>">Motherboard</a>
            <a href="#procesor" data-toggle="tab" class="<?= ($uri->getSegment(2) == 'Processor') ? 'active' : ''; ?>">Processor</a>
            <a href="#memory" data-toggle="tab" class="<?= ($uri->getSegment(2) == 'Memory') ? 'active' : ''; ?>">Memory</a>
            <a href="#vga" data-toggle="tab" class="<?= ($uri->getSegment(2) == 'VGA') ? 'active' : ''; ?>">VGA</a>
            <a href="#ram" data-toggle="tab" class="<?= ($uri->getSegment(2) == 'RAM') ? 'active' : ''; ?>">RAM</a>
            <a href="#cooler" data-toggle="tab class=" <?= ($uri->getSegment(2) == 'Cooler') ? 'active' : ''; ?>"">Cooler</a>
            <a href="#psu" data-toggle="tab" class="<?= ($uri->getSegment(2) == 'PSU') ? 'active' : ''; ?>">PSU</a>
        </div>
        <div class="row mb-30">
            <div class="col"></div>
        </div>
        <div class="widget-style-top">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="sidebar-widget mb-30">
                        <h4 class="pro-sidebar-title">Filter By Price Range</h4>
                        <div class="price-filter price-mrg-none mt-30">
                            <div id="slider-range"></div>
                            <div class="price-slider-amount">
                                <div class="label-input">
                                    <span>Price: </span><input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="sidebar-widget mb-30">
                        <h4 class="pro-sidebar-title">Filter By Brand</h4>
                        <div class="sidebar-widget-brand-logo brand-logo-mrg-none mt-20">
                            <ul>
                                <li><a href="#"><img src="/front/dking/assets/images/brand-logo/brand-logo-1.png" alt=""></a></li>
                                <li><a href="#"><img src="/front/dking/assets/images/brand-logo/brand-logo-2.png" alt=""></a></li>
                                <li><a href="#"><img src="/front/dking/assets/images/brand-logo/brand-logo-3.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <div class="tab-content">
                    <div id="casing" class="tab-pane <?= ($uri->getSegment(2) == 'Casing') ? 'active' : ''; ?>">
                        <div class="shop-top-bar">
                            <div class="shop-top-bar-left">
                                <div class="shop-tab nav">
                                    <a href="#shop-1" class="active" data-toggle="tab"><img class="inject-me" src="/front/dking/assets/images/icon-img/shop-grid.svg" alt=""></a>
                                    <a href="#shop-2" data-toggle="tab"><img class="inject-me" src="/front/dking/assets/images/icon-img/shop-list.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="shop-top-bar-right">
                                <div class="shop-page-list">
                                    <ul>
                                        <li>Show</li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">6</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content pt-30">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row">
                                    <?php foreach ($casing as $val) { ?>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="product-wrap mb-50">
                                                <div class="product-img product-img-zoom mb-25">
                                                    <img src="/img/casing/<?= $val['gambar']; ?>" class="gambar" alt="">
                                                </div>
                                                <div class="product-content">
                                                    <h4><?= $val['nama']; ?></a></h4>
                                                    <div class="product-price">
                                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <!-- <span class="old-price">$ 130</span> -->
                                                    </div>
                                                </div>
                                                <div class="product-action-position-1 text-center">
                                                    <div class="product-content">
                                                        <h4><?= $val['nama']; ?></a></h4>
                                                        <div class="product-price">
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <!-- <span class="old-price">$ 130</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="product-action-wrap">
                                                        <div class="product-action-cart">
                                                            <button title="Add to Cart">Add to cart</button>
                                                        </div>
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="shop-2" class="tab-pane ">
                                <?php foreach ($casing as $val) { ?>
                                    <div class="shop-list-wrap mb-50">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="product-list-img">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>">
                                                        <img src="/img/casing/<?= $val['gambar']; ?>" alt="">
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
                                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <!-- <span class="old-price">$50.00</span> -->
                                                    </div>
                                                    <p><?= $val['rincian']; ?></p>
                                                    <div class="product-list-action">
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <div class="product-action-cart">
                                                            <button title="Add to Cart">Add to cart</button>
                                                        </div>
                                                        <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="pro-pagination-style text-center mt-50">
                                <ul>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#"><i class="icofont-long-arrow-right"></i></a></li>
                                </ul>
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
                            <div class="shop-top-bar-right">
                                <div class="shop-page-list">
                                    <ul>
                                        <li>Show</li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">6</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content pt-30">
                            <div id="shop-3" class="tab-pane active">
                                <div class="row">
                                    <?php foreach ($motherboard as $val) { ?>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="product-wrap mb-50">
                                                <div class="product-img product-img-zoom mb-25">
                                                    <img src="/img/motherboard/<?= $val['gambar']; ?>" class="gambar" alt="">
                                                </div>
                                                <div class="product-content">
                                                    <h4><?= $val['nama']; ?></a></h4>
                                                    <div class="product-price">
                                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <!-- <span class="old-price">$ 130</span> -->
                                                    </div>
                                                </div>
                                                <div class="product-action-position-1 text-center">
                                                    <div class="product-content">
                                                        <h4><?= $val['nama']; ?></a></h4>
                                                        <div class="product-price">
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <!-- <span class="old-price">$ 130</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="product-action-wrap">
                                                        <div class="product-action-cart">
                                                            <button title="Add to Cart">Add to cart</button>
                                                        </div>
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="shop-4" class="tab-pane ">
                                <?php foreach ($motherboard as $val) { ?>
                                    <div class="shop-list-wrap mb-50">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="product-list-img">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>">
                                                        <img src="/img/motherboard/<?= $val['gambar']; ?>" alt="">
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
                                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <!-- <span class="old-price">$50.00</span> -->
                                                    </div>
                                                    <p><?= $val['rincian']; ?></p>
                                                    <div class="product-list-action">
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <div class="product-action-cart">
                                                            <button title="Add to Cart">Add to cart</button>
                                                        </div>
                                                        <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="pro-pagination-style text-center mt-50">
                                <ul>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#"><i class="icofont-long-arrow-right"></i></a></li>
                                </ul>
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
                            <div class="shop-top-bar-right">
                                <div class="shop-page-list">
                                    <ul>
                                        <li>Show</li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">6</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content pt-30">
                            <div id="shop-5" class="tab-pane active">
                                <div class="row">
                                    <?php foreach ($procesor as $val) { ?>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="product-wrap mb-50">
                                                <div class="product-img product-img-zoom mb-25">
                                                    <img src="/img/procesor/<?= $val['gambar']; ?>" class="gambar" alt="">
                                                </div>
                                                <div class="product-content">
                                                    <h4><?= $val['nama']; ?></a></h4>
                                                    <div class="product-price">
                                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <!-- <span class="old-price">$ 130</span> -->
                                                    </div>
                                                </div>
                                                <div class="product-action-position-1 text-center">
                                                    <div class="product-content">
                                                        <h4><?= $val['nama']; ?></a></h4>
                                                        <div class="product-price">
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <!-- <span class="old-price">$ 130</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="product-action-wrap">
                                                        <div class="product-action-cart">
                                                            <button title="Add to Cart">Add to cart</button>
                                                        </div>
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="shop-6" class="tab-pane ">
                                <?php foreach ($procesor as $val) { ?>
                                    <div class="shop-list-wrap mb-50">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="product-list-img">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>">
                                                        <img src="/img/procesor/<?= $val['gambar']; ?>" alt="">
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
                                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <!-- <span class="old-price">$50.00</span> -->
                                                    </div>
                                                    <p><?= $val['rincian']; ?></p>
                                                    <div class="product-list-action">
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <div class="product-action-cart">
                                                            <button title="Add to Cart">Add to cart</button>
                                                        </div>
                                                        <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="pro-pagination-style text-center mt-50">
                                <ul>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#"><i class="icofont-long-arrow-right"></i></a></li>
                                </ul>
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
                            <div class="shop-top-bar-right">
                                <div class="shop-page-list">
                                    <ul>
                                        <li>Show</li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">6</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content pt-30">
                            <div id="shop-7" class="tab-pane active">
                                <div class="row">
                                    <?php foreach ($memory as $val) { ?>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="product-wrap mb-50">
                                                <div class="product-img product-img-zoom mb-25">
                                                    <img src="/img/memori/<?= $val['gambar']; ?>" class="gambar" alt="">
                                                </div>
                                                <div class="product-content">
                                                    <h4><?= $val['nama']; ?></a></h4>
                                                    <div class="product-price">
                                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <!-- <span class="old-price">$ 130</span> -->
                                                    </div>
                                                </div>
                                                <div class="product-action-position-1 text-center">
                                                    <div class="product-content">
                                                        <h4><?= $val['nama']; ?></a></h4>
                                                        <div class="product-price">
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <!-- <span class="old-price">$ 130</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="product-action-wrap">
                                                        <div class="product-action-cart">
                                                            <button title="Add to Cart">Add to cart</button>
                                                        </div>
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="shop-8" class="tab-pane ">
                                <?php foreach ($memory as $val) { ?>
                                    <div class="shop-list-wrap mb-50">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="product-list-img">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>">
                                                        <img src="/img/memori/<?= $val['gambar']; ?>" alt="">
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
                                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <!-- <span class="old-price">$50.00</span> -->
                                                    </div>
                                                    <p><?= $val['rincian']; ?></p>
                                                    <div class="product-list-action">
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <div class="product-action-cart">
                                                            <button title="Add to Cart">Add to cart</button>
                                                        </div>
                                                        <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="pro-pagination-style text-center mt-50">
                                <ul>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#"><i class="icofont-long-arrow-right"></i></a></li>
                                </ul>
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
                            <div class="shop-top-bar-right">
                                <div class="shop-page-list">
                                    <ul>
                                        <li>Show</li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">6</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content pt-30">
                            <div id="shop-9" class="tab-pane active">
                                <div class="row">
                                    <?php foreach ($vga as $val) { ?>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="product-wrap mb-50">
                                                <div class="product-img product-img-zoom mb-25">
                                                    <img src="/img/vga/<?= $val['gambar']; ?>" class="gambar" alt="">
                                                </div>
                                                <div class="product-content">
                                                    <h4><?= $val['nama']; ?></a></h4>
                                                    <div class="product-price">
                                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <!-- <span class="old-price">$ 130</span> -->
                                                    </div>
                                                </div>
                                                <div class="product-action-position-1 text-center">
                                                    <div class="product-content">
                                                        <h4><?= $val['nama']; ?></a></h4>
                                                        <div class="product-price">
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <!-- <span class="old-price">$ 130</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="product-action-wrap">
                                                        <div class="product-action-cart">
                                                            <button title="Add to Cart">Add to cart</button>
                                                        </div>
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="shop-10" class="tab-pane ">
                                <?php foreach ($vga as $val) { ?>
                                    <div class="shop-list-wrap mb-50">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="product-list-img">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>">
                                                        <img src="/img/vga/<?= $val['gambar']; ?>" alt="">
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
                                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <!-- <span class="old-price">$50.00</span> -->
                                                    </div>
                                                    <p><?= $val['rincian']; ?></p>
                                                    <div class="product-list-action">
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <div class="product-action-cart">
                                                            <button title="Add to Cart">Add to cart</button>
                                                        </div>
                                                        <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="pro-pagination-style text-center mt-50">
                                <ul>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#"><i class="icofont-long-arrow-right"></i></a></li>
                                </ul>
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
                            <div class="shop-top-bar-right">
                                <div class="shop-page-list">
                                    <ul>
                                        <li>Show</li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">6</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content pt-30">
                            <div id="shop-11" class="tab-pane active">
                                <div class="row">
                                    <?php foreach ($ram as $val) { ?>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="product-wrap mb-50">
                                                <div class="product-img product-img-zoom mb-25">
                                                    <img src="/img/ram/<?= $val['gambar']; ?>" class="gambar" alt="">
                                                </div>
                                                <div class="product-content">
                                                    <h4><?= $val['nama']; ?></a></h4>
                                                    <div class="product-price">
                                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <!-- <span class="old-price">$ 130</span> -->
                                                    </div>
                                                </div>
                                                <div class="product-action-position-1 text-center">
                                                    <div class="product-content">
                                                        <h4><?= $val['nama']; ?></a></h4>
                                                        <div class="product-price">
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <!-- <span class="old-price">$ 130</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="product-action-wrap">
                                                        <div class="product-action-cart">
                                                            <button title="Add to Cart">Add to cart</button>
                                                        </div>
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="shop-12" class="tab-pane ">
                                <?php foreach ($ram as $val) { ?>
                                    <div class="shop-list-wrap mb-50">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="product-list-img">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>">
                                                        <img src="/img/ram/<?= $val['gambar']; ?>" alt="">
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
                                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <!-- <span class="old-price">$50.00</span> -->
                                                    </div>
                                                    <p><?= $val['rincian']; ?></p>
                                                    <div class="product-list-action">
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <div class="product-action-cart">
                                                            <button title="Add to Cart">Add to cart</button>
                                                        </div>
                                                        <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="pro-pagination-style text-center mt-50">
                                <ul>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#"><i class="icofont-long-arrow-right"></i></a></li>
                                </ul>
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
                            <div class="shop-top-bar-right">
                                <div class="shop-page-list">
                                    <ul>
                                        <li>Show</li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">6</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content pt-30">
                            <div id="shop-13" class="tab-pane active">
                                <div class="row">
                                    <?php foreach ($pendingin as $val) { ?>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="product-wrap mb-50">
                                                <div class="product-img product-img-zoom mb-25">
                                                    <img src="/img/pendingin/<?= $val['gambar']; ?>" class="gambar" alt="">
                                                </div>
                                                <div class="product-content">
                                                    <h4><?= $val['nama']; ?></a></h4>
                                                    <div class="product-price">
                                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <!-- <span class="old-price">$ 130</span> -->
                                                    </div>
                                                </div>
                                                <div class="product-action-position-1 text-center">
                                                    <div class="product-content">
                                                        <h4><?= $val['nama']; ?></a></h4>
                                                        <div class="product-price">
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <!-- <span class="old-price">$ 130</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="product-action-wrap">
                                                        <div class="product-action-cart">
                                                            <button title="Add to Cart">Add to cart</button>
                                                        </div>
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="shop-14" class="tab-pane ">
                                <?php foreach ($pendingin as $val) { ?>
                                    <div class="shop-list-wrap mb-50">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="product-list-img">
                                                    <img src="/img/pendingin/<?= $val['gambar']; ?>" alt="">
                                                    <div class="shop-list-quickview">
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <div class="shop-list-content ml-20">
                                                    <h3><a href="#"><?= $val['nama']; ?></a></h3>
                                                    <div class="pro-list-price">
                                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <!-- <span class="old-price">$50.00</span> -->
                                                    </div>
                                                    <p><?= $val['rincian']; ?></p>
                                                    <div class="product-list-action">
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <div class="product-action-cart">
                                                            <button title="Add to Cart">Add to cart</button>
                                                        </div>
                                                        <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="pro-pagination-style text-center mt-50">
                                <ul>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#"><i class="icofont-long-arrow-right"></i></a></li>
                                </ul>
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
                            <div class="shop-top-bar-right">
                                <div class="shop-page-list">
                                    <ul>
                                        <li>Show</li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">6</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content pt-30">
                            <div id="shop-15" class="tab-pane active">
                                <div class="row">
                                    <?php foreach ($psu as $val) { ?>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="product-wrap mb-50">
                                                <div class="product-img product-img-zoom mb-25">
                                                    <img src="/img/psu/<?= $val['gambar']; ?>" class="gambar" alt="">
                                                </div>
                                                <div class="product-content">
                                                    <h4><?= $val['nama']; ?></a></h4>
                                                    <div class="product-price">
                                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <!-- <span class="old-price">$ 130</span> -->
                                                    </div>
                                                </div>
                                                <div class="product-action-position-1 text-center">
                                                    <div class="product-content">
                                                        <h4><?= $val['nama']; ?></a></h4>
                                                        <div class="product-price">
                                                            <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                            <!-- <span class="old-price">$ 130</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="product-action-wrap">
                                                        <div class="product-action-cart">
                                                            <button title="Add to Cart">Add to cart</button>
                                                        </div>
                                                        <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="shop-16" class="tab-pane ">
                                <?php foreach ($psu as $val) { ?>
                                    <div class="shop-list-wrap mb-50">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="product-list-img">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>">
                                                        <img src="/img/psu/<?= $val['gambar']; ?>" alt="">
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
                                                        <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                        <!-- <span class="old-price">$50.00</span> -->
                                                    </div>
                                                    <p><?= $val['rincian']; ?></p>
                                                    <div class="product-list-action">
                                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                        <div class="product-action-cart">
                                                            <button title="Add to Cart">Add to cart</button>
                                                        </div>
                                                        <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="pro-pagination-style text-center mt-50">
                                <ul>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#"><i class="icofont-long-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endsection(); ?>