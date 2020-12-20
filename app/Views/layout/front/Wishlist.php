<?= $this->extend('layout/front/v_page/v_template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('layout/front/v_page/v_nav'); ?>
<?= $this->include('layout/front/v_page/v_modal.php'); ?>
<div class="breadcrumb-area breadcrumb-mt breadcrumb-ptb-2">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Wishlist</h2>
            <ul>
                <li>
                    <a href="/">Home </a>
                </li>
                <li><span> > </span></li>
                <li>
                    <a href="/Shop">Shop </a>
                </li>
                <li><span> > </span></li>
                <li class="active"> Wishlist </li>
            </ul>
        </div>
    </div>
</div>

<?php if ($wish == null) { ?>
    <div class="empty-cart-area pt-100 pb-160">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="empty-cart-content text-center">
                        <img src="/img/aset/cart.jpg" class="img-fluid" alt="logo">
                        <h3>Wishlist mu masih kosong :(</h3>
                        <div class="empty-cart-btn">
                            <a href="/Shop">Return To Shop</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else if ($wish != null) { ?>
    <div class="cart-area bg-gray pt-100 pb-100">
        <center>
            <h1><?= $title; ?></h1>
        </center>
        <div class="container mt-30">
            <div class="row">
                <?php foreach (array_reverse($wish) as $val) { ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-50">
                            <div class="product-img product-img-zoom mb-25">
                                <img src="/img/<?= $val['kategori']; ?>/<?= $val['gambar']; ?>" class="img-fluid" alt="">
                            </div>
                            <div class="product-content">
                                <h4><?= $val['nama']; ?></a></h4>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><?= $val['nama']; ?></a></h4>
                                    <div class="product-action-wrap">
                                        <div class="product-action-cart">
                                        </div>
                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
<?= $this->endsection(); ?>