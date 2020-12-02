<?= $this->extend('layout/front/v_template'); ?>
<?= $this->section('content'); ?>
<!-- V_NAV Tanpa Smooth Scroll -->
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
                                    <li><a href="/ #home">Home</a></li>
                                    <li><a href="/ #shop">Shop</a>
                                    <li><a href="/ #brand">Brand's</a> </li>
                                    <li><a href="/ #upcoming">Upcoming product</a> </li>
                                    <li><a href="/ #contact">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-action-wrap header-action-flex header-action-width header-action-mrg-1">
                        <div class="search-style-1">
                            <form>
                                <div class="form-search-1">
                                    <input class="input-text" value="" placeholder="Type to search (Ex: Phone, Laptop)" type="search">
                                    <button>
                                        <i class="icofont-search-1"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="same-style">
                            <a href="/Auth"><i class="icofont-user-alt-3"></i></a>
                        </div>
                        <div class="same-style header-cart">
                            <a class="cart-active" href="#"><i class="icofont-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            <a class="cart-active" href="#"><i class="icofont-shopping-cart"></i></a>
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
                <li class="single-product-cart">
                    <div class="cart-img">
                        <a href="#"><img src="/front/dking/assets/images/cart/cart-1.jpg" alt=""></a>
                    </div>
                    <div class="cart-title">
                        <h4><a href="#">Awesome Mobile</a></h4>
                        <span> 1 × $49.00 </span>
                    </div>
                    <div class="cart-delete">
                        <a href="#">×</a>
                    </div>
                </li>
                <li class="single-product-cart">
                    <div class="cart-img">
                        <a href="#"><img src="/front/dking/assets/images/cart/cart-2.jpg" alt=""></a>
                    </div>
                    <div class="cart-title">
                        <h4><a href="#">Smart Watch</a></h4>
                        <span> 1 × $49.00 </span>
                    </div>
                    <div class="cart-delete">
                        <a href="#">×</a>
                    </div>
                </li>
            </ul>
            <div class="cart-total">
                <h4>Subtotal: <span>$170.00</span></h4>
            </div>
            <div class="cart-checkout-btn">
                <a class="btn-hover cart-btn-style" href="cart.html">view cart</a>
                <a class="no-mrg btn-hover cart-btn-style" href="checkout.html">checkout</a>
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
<div class="breadcrumb-area breadcrumb-mt-0 breadcrumb-ptb-2">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Login / Register</h2>
            <ul>
                <li>
                    <a href="/ #contact">Home </a>
                </li>
                <li><span> > </span></li>
                <li class="active"> Login / Register </li>
            </ul>
        </div>
    </div>
</div>
<div class="login-register-area bg-gray pt-20 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> login </h4>
                        </a>
                        <a data-toggle="tab" href="#lg2">
                            <h4> register </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= session()->getFlashdata('pesan') ?>
                            </div>
                        <?php elseif (session()->getFlashdata('success')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('success') ?>
                            </div>
                        <?php endif; ?>
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="/Auth/cek_login" method="POST" enctype="multipart/form-data">
                                        <input type="text" name="username" placeholder="Username" autofocus required>
                                        <input type="password" name="password" placeholder="Password" required>
                                        <input type="hidden">
                                        <div class="button-box ">
                                            <button type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="/user/save_guest" method="post">
                                        <input type="text" name="username" placeholder="Username" autofocus required>
                                        <small class=" col-sm-5 col-form-label text-muted">
                                            Pastikan panjang Password antara 8-20
                                        </small>
                                        <input type="password" class="form-control  <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" name="password" placeholder="Password" required>
                                        <small class=" col-sm-5 col-form-label text-muted">
                                            Pastikan Password diketik sama
                                        </small>
                                        <input type="password" class="form-control  <?= ($validation->hasError('repassword')) ? 'is-invalid' : ''; ?>" name="repassword" placeholder="Ketik Ulang Password" required>
                                        <input name="email" placeholder="Email" type="email" required>
                                        <div class="button-box">
                                            <button type="submit">Register</button>
                                        </div>
                                    </form>
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
<?= $this->endsection(); ?>