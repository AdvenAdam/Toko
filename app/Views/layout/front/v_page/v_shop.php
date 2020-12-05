<div class="product-area fix pb-120" id="shop">
    <div class=" container">
        <div class=" row">
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="product-tab-list-2 nav mb-50">
                    <a class="active" href="#casing" data-toggle="tab">
                        <img class="inject-me" src="/front/dking/assets/images/icon-img/casing.svg" alt="">
                        Casing
                    </a>
                    <a href="#motherboard" data-toggle="tab">
                        <img class="inject-me" src="/front/dking/assets/images/icon-img/motherboard.svg" alt="">
                        Motherboard
                    </a>
                    <a href="#procesor" data-toggle="tab">
                        <img class="inject-me" src="/front/dking/assets/images/icon-img/procesor.svg" alt="">
                        Processor
                    </a>
                    <a href="#memory" data-toggle="tab">
                        <img class="inject-me" src="/front/dking/assets/images/icon-img/memory.svg" alt="">
                        Memory
                    </a>
                    <a href="#vga" data-toggle="tab">
                        <img class="inject-me" src="/front/dking/assets/images/icon-img/vga.svg" alt="">
                        VGA
                    </a>
                    <a href="#ram" data-toggle="tab">
                        <img class="inject-me" src="/front/dking/assets/images/icon-img/ram.svg" alt="">
                        RAM
                    </a>
                    <a href="#cooler" data-toggle="tab">
                        <img class="inject-me" src="/front/dking/assets/images/icon-img/cooler.svg" alt="">
                        Cooler
                    </a>
                    <a href="#psu" data-toggle="tab">
                        <img class="inject-me" src="/front/dking/assets/images/icon-img/psu.svg" alt="">
                        Power Supply
                    </a>
                </div>
            </div>

            <div class="col-xl-9 col-lg-8 col-md-8">
                <div class="tab-content jump-2">
                    <div id="casing" class="tab-pane active">
                        <div class="row">
                            <?php foreach (array_reverse($casing) as $val) : ?>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-25">
                                            <img src="/img/casing/<?= $val['gambar']; ?>" class="gambar" alt="">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <?= $val['nama']; ?></a></h4>
                                            <div class="product-price">
                                                <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                <!-- <span class="old-price">$ 110</span> -->
                                            </div>
                                        </div>
                                        <div class="product-action-position-1 text-center">
                                            <div class="product-content">
                                                <?= $val['nama']; ?></a></h4>
                                                <div class="product-price">
                                                    <span><?= 'Rp.' . number_format(intval($val['harga'])); ?></span>
                                                    <!-- <span class="old-price">$ 110</span> -->
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
                            <?php endforeach; ?>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="/Shop/Casing">
                                            <img src="/img/aset/more.png" class="gambar" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="motherboard" class="tab-pane">
                        <div class="row">
                            <?php foreach (array_reverse($motherboard) as $val) :  ?>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-25">
                                            <img src="/img/motherboard/<?= $val['gambar']; ?>" class="gambar" alt="">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <?= $val['nama']; ?></a></h4>
                                            <div class="product-price">
                                                <span><?= 'Rp.' . number_format(intval($val['harga'])) ?></span>
                                                <!-- <span class="old-price">$ 110</span> -->
                                            </div>
                                        </div>
                                        <div class="product-action-position-1 text-center">
                                            <div class="product-content">
                                                <?= $val['nama']; ?></a></h4>
                                                <div class="product-price">
                                                    <span><?= 'Rp.' . number_format(intval($val['harga'])) ?></span>
                                                    <!-- <span class="old-price">$ 110</span> -->
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
                            <?php endforeach; ?>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="/Shop/Motherboard">
                                            <img src="/img/aset/more.png" class="gambar" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="procesor" class="tab-pane">
                        <div class="row">
                            <?php foreach (array_reverse($procesor) as $val) : ?>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-25">
                                            <img src="/img/procesor/<?= $val['gambar']; ?>" class="gambar" alt="">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <?= $val['nama']; ?></a></h4>
                                            <div class="product-price">
                                                <span><?= 'Rp.' . number_format(intval($val['harga'])) ?></span>
                                                <!-- <span class="old-price">$ 110</span> -->
                                            </div>
                                        </div>
                                        <div class="product-action-position-1 text-center">
                                            <div class="product-content">
                                                <?= $val['nama']; ?></a></h4>
                                                <div class="product-price">
                                                    <span><?= 'Rp.' . number_format(intval($val['harga'])) ?></span>
                                                    <!-- <span class="old-price">$ 110</span> -->
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
                            <?php endforeach; ?>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="/Shop/Processor">
                                            <img src="/img/aset/more.png" class="gambar" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="memory" class="tab-pane">
                        <div class="row">

                            <?php foreach (array_reverse($memory) as $val) : ?>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-25">
                                            <img src="/img/memori/<?= $val['gambar']; ?>" class="gambar" alt="">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <?= $val['nama']; ?></a></h4>
                                            <div class="product-price">
                                                <span><?= 'Rp.' . number_format(intval($val['harga'])) ?></span>
                                                <!-- <span class="old-price">$ 110</span> -->
                                            </div>
                                        </div>
                                        <div class="product-action-position-1 text-center">
                                            <div class="product-content">
                                                <?= $val['nama']; ?></a></h4>
                                                <div class="product-price">
                                                    <span><?= 'Rp.' . number_format(intval($val['harga'])) ?></span>
                                                    <!-- <span class="old-price">$ 110</span> -->
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
                            <?php endforeach; ?>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="/Shop/Memory">
                                            <img src="/img/aset/more.png" class="gambar" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="vga" class="tab-pane">
                        <div class="row">
                            <?php foreach (array_reverse($vga) as $val) { ?>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-25">
                                            <img src="/img/vga/<?= $val['gambar']; ?>" class="gambar" alt="">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <?= $val['nama']; ?></a></h4>
                                            <div class="product-price">
                                                <span><?= 'Rp.' . number_format(intval($val['harga'])) ?></span>
                                                <!-- <span class="old-price">$ 110</span> -->
                                            </div>
                                        </div>
                                        <div class="product-action-position-1 text-center">
                                            <div class="product-content">
                                                <?= $val['nama']; ?></a></h4>
                                                <div class="product-price">
                                                    <span><?= 'Rp.' . number_format(intval($val['harga'])) ?></span>
                                                    <!-- <span class="old-price">$ 110</span> -->
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
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="/Shop/VGA">
                                            <img src="/img/aset/more.png" class="gambar" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="ram" class="tab-pane">
                        <div class="row">
                            <?php foreach (array_reverse($ram) as $val) { ?>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-25">
                                            <img src="/img/ram/<?= $val['gambar']; ?>" class="gambar" alt="">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <?= $val['nama']; ?></a></h4>
                                            <div class="product-price">
                                                <span><?= 'Rp.' . number_format(intval($val['harga'])) ?></span>
                                                <!-- <span class="old-price">$ 110</span> -->
                                            </div>
                                        </div>
                                        <div class="product-action-position-1 text-center">
                                            <div class="product-content">
                                                <?= $val['nama']; ?></a></h4>
                                                <div class="product-price">
                                                    <span><?= 'Rp.' . number_format(intval($val['harga'])) ?></span>
                                                    <!-- <span class="old-price">$ 110</span> -->
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
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="/Shop/RAM">
                                            <img src="/img/aset/more.png" class="gambar" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="cooler" class="tab-pane">
                        <div class="row">
                            <?php foreach (array_reverse($pendingin) as $val) { ?>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-25">
                                            <img src="/img/pendingin/<?= $val['gambar']; ?>" class="gambar" alt="">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <?= $val['nama']; ?></a></h4>
                                            <div class="product-price">
                                                <span><?= 'Rp.' . number_format(intval($val['harga'])) ?></span>
                                                <!-- <span class="old-price">$ 110</span> -->
                                            </div>
                                        </div>
                                        <div class="product-action-position-1 text-center">
                                            <div class="product-content">
                                                <?= $val['nama']; ?></a></h4>
                                                <div class="product-price">
                                                    <span><?= 'Rp.' . number_format(intval($val['harga'])) ?></span>
                                                    <!-- <span class="old-price">$ 110</span> -->
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
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="/Shop/Cooler">
                                            <img src="/img/aset/more.png" class="gambar" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="psu" class="tab-pane">
                        <div class="row">
                            <?php foreach (array_reverse($psu) as $val) { ?>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-25">
                                            <img src="/img/psu/<?= $val['gambar']; ?>" class="gambar" alt="">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <?= $val['nama']; ?></a></h4>
                                            <div class="product-price">
                                                <span><?= 'Rp.' . number_format(intval($val['harga'])) ?></span>
                                                <!-- <span class="old-price">$ 110</span> -->
                                            </div>
                                        </div>
                                        <div class="product-action-position-1 text-center">
                                            <div class="product-content">
                                                <?= $val['nama']; ?></a></h4>
                                                <div class="product-price">
                                                    <span><?= 'Rp.' . number_format(intval($val['harga'])) ?></span>
                                                    <!-- <span class="old-price">$ 110</span> -->
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
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-25">
                                        <a href="/Shop/PSU">
                                            <img src="/img/aset/more.png" class="gambar" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="product-area section-padding-6 pt-155 pb-155 fix" id="upcoming">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title-7 mb-30">
                    <h1>Our Upcoming<br> Product</h1>
                    <div class="banner-btn-4 banner-btn-4-electric2">
                        <a href="shop.html">Browse All Categories <img class="inject-me" src="/front/dking/assets/images/icon-img/right-arrow-banner.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="product-slider-active-3">
                    <?php for ($i = 1; $i < 5; $i++) { ?>
                        <div class="product-wrap-plr-1">
                            <div class="product-wrap">
                                <div class="product-img product-img-zoom mb-25">
                                    <img src="/front/dking/assets/images/product/product-109.jpg" alt="">
                                    </a>
                                    <div class=" timer-2 timer-style-1 product-timer timer-style-1-center automobile-timer">
                                        <div data-countdown="2021/01/01"></div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    Product Title</a></h4>

                                </div>
                                <div class="product-action-position-1 text-center">
                                    <div class="product-content">
                                        Product Title</a></h4>
                                    </div>
                                    <div class="product-action-wrap">
                                        <button data-toggle="modal" data-target="#exampleModal"><i class="icon-zoom"></i></button>
                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                        <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
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