<?= $this->extend('layout/front/v_page/v_template'); ?>
<?= $this->section('content'); ?>
<!-- Custom Navbar -->
<header class="header-area section-padding-1 transparent-bar">
    <div class="header-large-device">
        <div class="header-bottom sticky-bar">
            <div class="container-fluid">
                <div class="header-bottom-flex">
                    <div class="logo-menu-wrap">
                        <div class="logo">
                            <a href="/">
                                <img src="/front/dking/assets/images/logo/logo-9.png" alt="logo">
                            </a>
                        </div>
                        <div class="main-menu menu-lh-1 main-menu-padding-1 menu-mrg-1">
                            <nav>
                                <ul>
                                    <li><a class="smooth" href="/ #home">Home</a></li>
                                    <li><a class="smooth" href="/ #shop">Shop</a>
                                        <ul class="sub-menu-width">
                                            <li><a href="/Shop">Shop</a></li>
                                            <li><a href="/Service">Service Computer</a></li>
                                            <li><a href="/Rakit">Simulasi Rakit PC</a></li>

                                        </ul>
                                    </li>
                                    <li><a class="smooth" href="/ #brand">Brand's</a> </li>
                                    <li><a class="smooth" href="/ #dotd">Deals</a> </li>
                                    <li><a class="smooth" href="/ #contact">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-action-wrap header-action-flex header-action-width header-action-mrg-1">
                        <div class="search-style-1">
                            <form action="/Home/search" method="POST">
                                <div class="form-search-1">
                                    <input class="input-text" value="" name="keyword" placeholder="Ketik Untuk Mencari (Cth: Produk)" type="search">
                                    <button type="submit">
                                        <i class="icofont-search-1"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- rakit -->
                        <div class="same-style">
                            <a href="/Rakit" title="Rakit PC"><i class="icofont-computer"></i></a>
                        </div>
                        <!-- lojen -->
                        <?php if (session()->get('log') == true) { ?>
                            <div class="same-style">
                                <div class="navbar-custom-menu">
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown user user-menu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <?= session()->get('username'); ?>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <!-- Menu Footer-->
                                                <li class="user-footer">
                                                    <div class="align-right">
                                                        <a href="/auth/logout" class="btn btn-default btn-flat">Log out</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="same-style">
                                <a href="/Auth/Login"><i class="icofont-user-alt-3"></i></a>
                            </div>
                        <?php } ?>
                        <!-- cart/wishlist -->
                        <div class="same-style header-cart">
                            <?php if (session()->get('level') == 'Customer_service') { ?>
                                <a class="cart-active" href="#"><i class="icofont-shopping-cart"></i></a>
                            <?php } else if (session()->get('level') == 'Guest') { ?>
                                <a href="/wishlist/wish/<?= session()->get('username'); ?>"><i class="icofont-heart"></i></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- in header pas mobile  -->
    <div class="header-small-device header-small-ptb sticky-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="mobile-logo mobile-logo-width">
                        <a href="index.html">
                            <img alt="" src="/front/dking/assets/images/logo/logo-9.png">
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="header-action-wrap header-action-flex header-action-mrg-1">
                        <div class="same-style header-cart">
                            <?php if (session()->get('level') == 'Customer_service') { ?>
                                <a class="cart-active" href="#"><i class="icofont-shopping-cart"></i></a>
                            <?php } else if (session()->get('level') == 'Guest') { ?>
                                <a class="cart-active" href=""><i class="icofont-heart"></i></a>
                            <?php } ?>
                        </div>
                        <div class="same-style header-info">
                            <button class="mobile-menu-button-active">
                                <span class="info-width-1"></span>
                                <span class="info-width-2"></span>
                                <span class="info-width-3"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- mini cart start -->
<div class="sidebar-cart-active">
    <div class="sidebar-cart-all">
        <a class="cart-close" href="#"><i class="icofont-close-line"></i></a>
        <div class="cart-content">
            <h3>Shopping Cart</h3>
            <ul>
                <?php foreach ($cart->contents() as $val) { ?>
                    <li class="single-product-cart">
                        <div class="cart-img">
                            <a href=""><img src="/img/<?= $val['options']['kategori']; ?>/<?= $val['options']['gambar']; ?>" class="img-fluid" alt=""></a>
                        </div>
                        <div class="cart-title">
                            <h4><a href=""><?= $val['name']; ?></a></h4>
                            <span><?= $val['qty']; ?> × Rp. <?= number_format($val['price']); ?></span>
                        </div>
                        <div class="cart-delete">
                            <a href="/Shop/delete/<?= $val['rowid']; ?>">×</a>
                        </div>
                    </li>
                <?php } ?>
            </ul>
            <div class="cart-total">
                <h4>Total: Rp. <?= number_format($cart->Total()); ?></h4>
            </div>
            <div class="cart-checkout-btn">
                <?php if (session()->get('level') == 'Guest') { ?>
                    <a class="btn-hover cart-btn-style" href="/wishlist/wish/<?= session()->get('username'); ?>">view Wishlist</a>
                <?php } else if (session()->get('level') == 'Customer_service') { ?>
                    <a class="no-mrg btn-hover cart-btn-style" href="/shop/cart">checkout</a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- Mobile menu start -->
<div class="mobile-menu-active clickalbe-sidebar-wrapper-style-1">
    <div class="clickalbe-sidebar-wrap">
        <a class="sidebar-close"><i class="icofont-close-line"></i></a>
        <div class="mobile-menu-content-area sidebar-content-100-percent">
            <div class="mobile-search">
                <form class="search-form" action="#">
                    <input type="text" placeholder="Search here…">
                    <button class="button-search"><i class="icofont-search-1"></i></button>
                </form>
            </div>
            <div class="clickable-mainmenu-wrap clickable-mainmenu-style1">
                <nav>
                    <ul>
                        <li><a href="#">Home</a> </li>
                        <li><a href="#">shop</a> </li>
                        <li><a href="#">Pages</a> </li>
                        <li><a href="shop.html">Collections</a></li>
                        <li><a href="contact-us.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="aside-contact-info">
                <ul>
                    <li><i class="icofont-clock-time"></i>Monday - Friday: 9:00 - 19:00</li>
                    <li><i class="icofont-envelope"></i>Info@example.com</li>
                    <li><i class="icofont-stock-mobile"></i>(+55) 254. 254. 254</li>
                    <li><i class="icofont-home"></i>Helios Tower 75 Tam Trinh Hoang - Ha Noi - Viet Nam</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?= $this->include('layout/front/v_page/v_home.php'); ?>
<?= $this->include('layout/front/v_page/v_shop.php'); ?>
<?= $this->include('layout/front/v_page/v_brand&rate.php'); ?>
<?= $this->include('layout/front/v_page/v_contact.php'); ?>
<?= $this->include('layout/front/v_page/v_modal.php'); ?>


<?= $this->endsection(); ?>