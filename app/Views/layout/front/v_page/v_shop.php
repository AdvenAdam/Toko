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
                                                <?= $val['nama']; ?></a></h4>
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
                                                        <button title="Add to Cart">Add to cart</button>
                                                    <?php } else if (session()->get('level') == 'Guest') { ?>
                                                        <form action="wishlist/save" method="post">
                                                            <?php $slug =  url_title(session()->get('username') . $val['nama'], '-', true) ?>
                                                            <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                            <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
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
                                                <?= $val['nama']; ?></a></h4>
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
                                                        <button title="Add to Cart">Add to cart</button>
                                                    <?php } else if (session()->get('level') == 'Guest') { ?>
                                                        <form action="wishlist/save" method="post">
                                                            <?php $slug =  url_title(session()->get('username') . $val['nama'], '-', true) ?>
                                                            <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                            <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                            <button type="submit" class="button" title=" Add to Wishlist">Add To Wishlist</button>
                                                        </form>
                                                    <?php } ?>
                                                </div>
                                                <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                <button type="submit" title="Add to Compare"><i class="icon-compare"></i></button>
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
                                                <?= $val['nama']; ?></a></h4>
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
                                                        <button title="Add to Cart">Add to cart</button>
                                                    <?php } else if (session()->get('level') == 'Guest') { ?>
                                                        <form action="wishlist/save" method="post">
                                                            <?php $slug =  url_title(session()->get('username') . $val['nama'], '-', true) ?>
                                                            <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                            <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                            <button type="submit" class="button" title=" Add to Wishlist">Add To Wishlist</button>
                                                        </form>
                                                    <?php } ?>
                                                </div>
                                                <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                <button type="submit" title="Add to Compare"><i class="icon-compare"></i></button>
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
                                                <?= $val['nama']; ?></a></h4>
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
                                                        <button title="Add to Cart">Add to cart</button>
                                                    <?php } else if (session()->get('level') == 'Guest') { ?>
                                                        <form action="wishlist/save" method="post">
                                                            <?php $slug =  url_title(session()->get('username') . $val['nama'], '-', true) ?>
                                                            <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                            <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                            <button type="submit" class="button" title=" Add to Wishlist">Add To Wishlist</button>
                                                        </form>
                                                    <?php } ?>
                                                </div>
                                                <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                <button type="submit" title="Add to Compare"><i class="icon-compare"></i></button>
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
                                                <?= $val['nama']; ?></a></h4>
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
                                                        <button title="Add to Cart">Add to cart</button>
                                                    <?php } else if (session()->get('level') == 'Guest') { ?>
                                                        <form action="wishlist/save" method="post">
                                                            <?php $slug =  url_title(session()->get('username') . $val['nama'], '-', true) ?>
                                                            <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                            <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                            <button type="submit" class="button" title=" Add to Wishlist">Add To Wishlist</button>
                                                        </form>
                                                    <?php } ?>
                                                </div>
                                                <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                <button type="submit" title="Add to Compare"><i class="icon-compare"></i></button>
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
                                                <?= $val['nama']; ?></a></h4>
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
                                                        <button title="Add to Cart">Add to cart</button>
                                                    <?php } else if (session()->get('level') == 'Guest') { ?>
                                                        <form action="wishlist/save" method="post">
                                                            <?php $slug =  url_title(session()->get('username') . $val['nama'], '-', true) ?>
                                                            <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                            <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                            <button type="submit" class="button" title=" Add to Wishlist">Add To Wishlist</button>
                                                        </form>
                                                    <?php } ?>
                                                </div>
                                                <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                <button type="submit" title="Add to Compare"><i class="icon-compare"></i></button>
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
                                                <?= $val['nama']; ?></a></h4>
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
                                                        <button title="Add to Cart">Add to cart</button>
                                                    <?php } else if (session()->get('level') == 'Guest') { ?>
                                                        <form action="wishlist/save" method="post">
                                                            <?php $slug =  url_title(session()->get('username') . $val['nama'], '-', true) ?>
                                                            <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                            <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                            <button type="submit" class="button" title=" Add to Wishlist">Add To Wishlist</button>
                                                        </form>
                                                    <?php } ?>
                                                </div>
                                                <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                <button type="submit" title="Add to Compare"><i class="icon-compare"></i></button>
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
                                                <?= $val['nama']; ?></a></h4>
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
                                                        <button title="Add to Cart">Add to cart</button>
                                                    <?php } else if (session()->get('level') == 'Guest') { ?>
                                                        <form action="wishlist/save" method="post">
                                                            <?php $slug =  url_title(session()->get('username') . $val['nama'], '-', true) ?>
                                                            <input type="hidden" name="slug" value="<?= $slug; ?>">
                                                            <input type="hidden" name="nama" value="<?= $val['nama']; ?>">
                                                            <button type="submit" class="button" title=" Add to Wishlist">Add To Wishlist</button>
                                                        </form>
                                                    <?php } ?>
                                                </div>
                                                <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                <button type="submit" title="Add to Compare"><i class="icon-compare"></i></button>
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

<!-- Bagian Officoal Stores -->
<div class="product-area section-padding-6 pt-35 pb-50 fix">
    <div class="container">
        <div class="col-lg-4 col-md-4">
            <div class="section-title-7 mb-30">
                <h2 class="bold">Official Stores</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="product-slider-active-1">
                    <?php foreach ($toko as $val) : ?>
                        <div class="product-wrap-plr-1">
                            <div class="product-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="<?= $val['link']; ?>">
                                        <img src="/img/toko/<?= $val['gambar']; ?>" class="banner" title="<?= $val['nama']; ?>">
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- upcomong -->
<div class="product-area section-padding-6 pt-155 pb-155 fix" id="dotd">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="section-title-7 mb-30">
                    <h2 class="bold">Deals Of The Day<br> Product</h2>
                    <div class="banner-btn-4 banner-btn-4-electric2">
                        <a href="shop.html">Browse All Categories <img class="inject-me" src="/front/dking/assets/images/icon-img/right-arrow-banner.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="product-slider-active-3">
                    <!-- casing -->
                    <?php if ($diskonCasing != null) { ?>
                        <?php foreach ($diskonCasing as $val) { ?>
                            <?php if ($val['berlaku'] > date('Y-m-d')) { ?>
                                <div class="product-wrap-plr-1">
                                    <div class="product-wrap">
                                        <div class="product-img product-img-zoom mb-25">
                                            <a href="">
                                                <img src="img/casing/<?= $val['gambar']; ?>" class="diskon" alt="">
                                            </a>
                                            <div class="timer-3 timer-style-1 product-timer timer-style-1-center mega-fashion-timer">
                                                <div data-countdown="<?= $val['berlaku']; ?>"></div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><?= $val['nama']; ?></h4>
                                            <div class="product-price">
                                                <span><?= number_format($val['harga_new']); ?></span>
                                                <span class="old-price"><?= number_format($val['harga']); ?></span>
                                            </div>
                                        </div>
                                        <div class="product-action-position-1 text-center">
                                            <div class="product-content">
                                                <h4><?= $val['nama']; ?></h4>
                                                <div class="product-price">
                                                    <span><?= number_format($val['harga_new']); ?></span>
                                                    <span class="old-price"><?= number_format($val['harga']); ?></span>
                                                </div>
                                            </div>
                                            <div class="product-action-wrap">
                                                <div class="product-action-cart">
                                                    <?php if (session()->get('level') == 'Customerservice') { ?>
                                                        <button title="Add to Cart">Add to cart</button>
                                                    <?php } ?>
                                                </div>
                                                <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                    <!-- memori -->
                    <?php if ($diskonMemori != null) { ?>
                        <?php foreach ($diskonMemori as $val) { ?>
                            <?php if ($val['berlaku'] > date('Y-m-d')) { ?>
                                <div class="product-wrap-plr-1">
                                    <div class="product-wrap">
                                        <div class="product-img product-img-zoom mb-25">
                                            <a href="">
                                                <img src="img/memori/<?= $val['gambar']; ?>" class="diskon" alt="">
                                            </a>
                                            <div class="timer-3 timer-style-1 product-timer timer-style-1-center mega-fashion-timer">
                                                <div data-countdown="<?= $val['berlaku']; ?>"></div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><?= $val['nama']; ?></h4>
                                            <div class="product-price">
                                                <span><?= number_format($val['harga_new']); ?></span>
                                                <span class="old-price"><?= number_format($val['harga']); ?></span>
                                            </div>
                                        </div>
                                        <div class="product-action-position-1 text-center">
                                            <div class="product-content">
                                                <h4><?= $val['nama']; ?></h4>
                                                <div class="product-price">
                                                    <span><?= number_format($val['harga_new']); ?></span>
                                                    <span class="old-price"><?= number_format($val['harga']); ?></span>
                                                </div>
                                            </div>
                                            <div class="product-action-wrap">
                                                <div class="product-action-cart">
                                                    <?php if (session()->get('level') == 'Customerservice') { ?>
                                                        <button title="Add to Cart">Add to cart</button>
                                                    <?php } ?>
                                                </div>
                                                <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                    <!-- Motherboard -->
                    <?php if ($diskonMobo != null) { ?>
                        <?php foreach ($diskonMobo as $val) { ?>
                            <?php if ($val['berlaku'] > date('Y-m-d')) { ?>
                                <div class="product-wrap-plr-1">
                                    <div class="product-wrap">
                                        <div class="product-img product-img-zoom mb-25">
                                            <a href="">
                                                <img src="img/motherboard/<?= $val['gambar']; ?>" class="diskon" alt="">
                                            </a>
                                            <div class="timer-3 timer-style-1 product-timer timer-style-1-center mega-fashion-timer">
                                                <div data-countdown="<?= $val['berlaku']; ?>"></div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><?= $val['nama']; ?></h4>
                                            <div class="product-price">
                                                <span><?= number_format($val['harga_new']); ?></span>
                                                <span class="old-price"><?= number_format($val['harga']); ?></span>
                                            </div>
                                        </div>
                                        <div class="product-action-position-1 text-center">
                                            <div class="product-content">
                                                <h4><?= $val['nama']; ?></h4>
                                                <div class="product-price">
                                                    <span><?= number_format($val['harga_new']); ?></span>
                                                    <span class="old-price"><?= number_format($val['harga']); ?></span>
                                                </div>
                                            </div>
                                            <div class="product-action-wrap">
                                                <div class="product-action-cart">
                                                    <?php if (session()->get('level') == 'Customerservice') { ?>
                                                        <button title="Add to Cart">Add to cart</button>
                                                    <?php } ?>
                                                </div>
                                                <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                    <!-- Pedingin -->
                    <?php if ($diskonCooler != null) { ?>
                        <?php foreach ($diskonCooler as $val) { ?>
                            <?php if ($val['berlaku'] > date('Y-m-d')) { ?>
                                <div class="product-wrap-plr-1">
                                    <div class="product-wrap">
                                        <div class="product-img product-img-zoom mb-25">
                                            <a href="">
                                                <img src="img/pendingin/<?= $val['gambar']; ?>" class="diskon" alt="">
                                            </a>
                                            <div class="timer-3 timer-style-1 product-timer timer-style-1-center mega-fashion-timer">
                                                <div data-countdown="<?= $val['berlaku']; ?>"></div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><?= $val['nama']; ?></h4>
                                            <div class="product-price">
                                                <span><?= number_format($val['harga_new']); ?></span>
                                                <span class="old-price"><?= number_format($val['harga']); ?></span>
                                            </div>
                                        </div>
                                        <div class="product-action-position-1 text-center">
                                            <div class="product-content">
                                                <h4><?= $val['nama']; ?></h4>
                                                <div class="product-price">
                                                    <span><?= number_format($val['harga_new']); ?></span>
                                                    <span class="old-price"><?= number_format($val['harga']); ?></span>
                                                </div>
                                            </div>
                                            <div class="product-action-wrap">
                                                <div class="product-action-cart">
                                                    <?php if (session()->get('level') == 'Customerservice') { ?>
                                                        <button title="Add to Cart">Add to cart</button>
                                                    <?php } ?>
                                                </div>
                                                <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                    <!-- Processor -->
                    <?php if ($diskonProcie != null) { ?>
                        <?php foreach ($diskonProcie as $val) { ?>
                            <?php if ($val['berlaku'] > date('Y-m-d')) { ?>
                                <div class="product-wrap-plr-1">
                                    <div class="product-wrap">
                                        <div class="product-img product-img-zoom mb-25">
                                            <a href="">
                                                <img src="img/procesor/<?= $val['gambar']; ?>" class="diskon" alt="">
                                            </a>
                                            <div class="timer-3 timer-style-1 product-timer timer-style-1-center mega-fashion-timer">
                                                <div data-countdown="<?= $val['berlaku']; ?>"></div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><?= $val['nama']; ?></h4>
                                            <div class="product-price">
                                                <span><?= number_format($val['harga_new']); ?></span>
                                                <span class="old-price"><?= number_format($val['harga']); ?></span>
                                            </div>
                                        </div>
                                        <div class="product-action-position-1 text-center">
                                            <div class="product-content">
                                                <h4><?= $val['nama']; ?></h4>
                                                <div class="product-price">
                                                    <span><?= number_format($val['harga_new']); ?></span>
                                                    <span class="old-price"><?= number_format($val['harga']); ?></span>
                                                </div>
                                            </div>
                                            <div class="product-action-wrap">
                                                <div class="product-action-cart">
                                                    <?php if (session()->get('level') == 'Customerservice') { ?>
                                                        <button title="Add to Cart">Add to cart</button>
                                                    <?php } ?>
                                                </div>
                                                <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                    <!-- Psu -->
                    <?php if ($diskonPsu != null) { ?>
                        <?php foreach ($diskonPsu as $val) { ?>
                            <?php if ($val['berlaku'] > date('Y-m-d')) { ?>
                                <div class="product-wrap-plr-1">
                                    <div class="product-wrap">
                                        <div class="product-img product-img-zoom mb-25">
                                            <a href="">
                                                <img src="img/psu/<?= $val['gambar']; ?>" class="diskon" alt="">
                                            </a>
                                            <div class="timer-3 timer-style-1 product-timer timer-style-1-center mega-fashion-timer">
                                                <div data-countdown="<?= $val['berlaku']; ?>"></div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><?= $val['nama']; ?></h4>
                                            <div class="product-price">
                                                <span><?= number_format($val['harga_new']); ?></span>
                                                <span class="old-price"><?= number_format($val['harga']); ?></span>
                                            </div>
                                        </div>
                                        <div class="product-action-position-1 text-center">
                                            <div class="product-content">
                                                <h4><?= $val['nama']; ?></h4>
                                                <div class="product-price">
                                                    <span><?= number_format($val['harga_new']); ?></span>
                                                    <span class="old-price"><?= number_format($val['harga']); ?></span>
                                                </div>
                                            </div>
                                            <div class="product-action-wrap">
                                                <div class="product-action-cart">
                                                    <?php if (session()->get('level') == 'Customerservice') { ?>
                                                        <button title="Add to Cart">Add to cart</button>
                                                    <?php } ?>
                                                </div>
                                                <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                    <!-- Ram -->
                    <?php if ($diskonRam != null) { ?>
                        <?php foreach ($diskonRam as $val) { ?>
                            <?php if ($val['berlaku'] > date('Y-m-d')) { ?>
                                <div class="product-wrap-plr-1">
                                    <div class="product-wrap">
                                        <div class="product-img product-img-zoom mb-25">
                                            <a href="">
                                                <img src="img/ram/<?= $val['gambar']; ?>" class="diskon" alt="">
                                            </a>
                                            <div class="timer-3 timer-style-1 product-timer timer-style-1-center mega-fashion-timer">
                                                <div data-countdown="<?= $val['berlaku']; ?>"></div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><?= $val['nama']; ?></h4>
                                            <div class="product-price">
                                                <span><?= number_format($val['harga_new']); ?></span>
                                                <span class="old-price"><?= number_format($val['harga']); ?></span>
                                            </div>
                                        </div>
                                        <div class="product-action-position-1 text-center">
                                            <div class="product-content">
                                                <h4><?= $val['nama']; ?></h4>
                                                <div class="product-price">
                                                    <span><?= number_format($val['harga_new']); ?></span>
                                                    <span class="old-price"><?= number_format($val['harga']); ?></span>
                                                </div>
                                            </div>
                                            <div class="product-action-wrap">
                                                <div class="product-action-cart">
                                                    <?php if (session()->get('level') == 'Customerservice') { ?>
                                                        <button title="Add to Cart">Add to cart</button>
                                                    <?php } ?>
                                                </div>
                                                <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                    <!-- Vga -->
                    <?php if ($diskonVga != null) { ?>
                        <?php foreach ($diskonVga as $val) { ?>
                            <?php if ($val['berlaku'] > date('Y-m-d')) { ?>
                                <div class="product-wrap-plr-1">
                                    <div class="product-wrap">
                                        <div class="product-img product-img-zoom mb-25">
                                            <a href="">
                                                <img src="img/vga/<?= $val['gambar']; ?>" class="diskon" alt="">
                                            </a>
                                            <div class="timer-3 timer-style-1 product-timer timer-style-1-center mega-fashion-timer">
                                                <div data-countdown="<?= $val['berlaku']; ?>"></div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><?= $val['nama']; ?></h4>
                                            <div class="product-price">
                                                <span><?= number_format($val['harga_new']); ?></span>
                                                <span class="old-price"><?= number_format($val['harga']); ?></span>
                                            </div>
                                        </div>
                                        <div class="product-action-position-1 text-center">
                                            <div class="product-content">
                                                <h4><?= $val['nama']; ?></h4>
                                                <div class="product-price">
                                                    <span><?= number_format($val['harga_new']); ?></span>
                                                    <span class="old-price"><?= number_format($val['harga']); ?></span>
                                                </div>
                                            </div>
                                            <div class="product-action-wrap">
                                                <div class="product-action-cart">
                                                    <?php if (session()->get('level') == 'Customerservice') { ?>
                                                        <button title="Add to Cart">Add to cart</button>
                                                    <?php } ?>
                                                </div>
                                                <button data-toggle="modal" data-target="#exampleModal<?= $val['slug']; ?>"><i class="icon-zoom"></i></button>
                                                <button title="Add to Compare"><i class="icon-compare"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>