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
                            <?php if (session()->get('log') == true) { ?>
                                <div class="same-style"></div>
                                <div class="navbar-custom-menu">
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown user user-menu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <?= session()->get('username'); ?>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <!-- User image -->
                                                <li class="user-header">
                                                    <img src="img/user/<?= session()->get('foto'); ?>" class="img-circle" alt="User Image">



                                                </li>
                                                <!-- Menu Footer-->
                                                <li class="user-footer">
                                                    <div class="align-left">
                                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                                    </div>
                                                    <div class="align-right">
                                                        <a href="/Auth/logout" class="btn btn-default btn-flat">Log out</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            <?php } else { ?>
                                <div class="same-style">
                                    <a href="/Auth/Login"><i class="icofont-user-alt-3"></i></a>
                                </div>
                            <?php } ?>
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