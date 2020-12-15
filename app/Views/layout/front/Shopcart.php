<?= $this->extend('layout/front/v_page/v_template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('layout/front/v_page/v_nav'); ?>
<div class="breadcrumb-area breadcrumb-mt breadcrumb-ptb-2">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Cart</h2>
            <ul>
                <li>
                    <a href="/">Home </a>
                </li>
                <li><span> > </span></li>
                <li>
                    <a href="/Shop">Shop </a>
                </li>
                <li><span> > </span></li>
                <li class="/Shop/cart"> Cart </li>
            </ul>
        </div>
    </div>
</div>

<?php if ($cart->contents()  == null) { ?>
    <div class="empty-cart-area pt-100 pb-160">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="empty-cart-content text-center">
                        <img src="/front/dking/assets/images/cart/empty-cart.png" alt="logo">
                        <h3>Keranjang mu masih kosong :(</h3>
                        <div class="empty-cart-btn">
                            <a href="/Shop">Return To Shop</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else if ($cart->contents()  != null) { ?>
    <div class="cart-check-order-link-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 ml-auto mr-auto">
                    <div class="cart-check-order-link">
                        <a class="active" href="cart.html">Shopping Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cart-area bg-gray pt-40 pb-40">
        <div class="container">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>
            <div class="proceed-btn">
                <a href="#">Proceed to Checkout</a>
            </div>
            <div class="cart-table-content">
                <form action="/Shop/update">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Produk</th>
                                    <th class="th-text-center"> Harga</th>
                                    <th class="th-text-center">Qty</th>
                                    <th class="th-text-center">Sub Total</th>
                                    <th class="th-text-center">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($cart->contents() as $val) { ?>
                                    <tr>
                                        <td class="cart-product">
                                            <div class="product-img-info-wrap">
                                                <div class="product-img">
                                                    <a href=""><img src="/img/<?= $val['options']['kategori']; ?>/<?= $val['options']['gambar']; ?>" class="img-fluid" alt=""></a>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#"><?= $val['name']; ?></a></h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-price"><span class="amount"><?= number_to_currency($val['price'], 'Rp.'); ?></span></td>
                                        <td class="cart-quality ">
                                            <div class="pro-details-quality pl-50 pr-50">
                                                <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="qty<?= $i++; ?>" value="<?= $val['qty']; ?>">
                                            </div>
                                        </td>
                                        <td class="product-total"><span><?= number_to_currency($val['subtotal'], 'Rp.'); ?></span></td>
                                        <td align="center"><a href="/Shop/delete/<?= $val['rowid']; ?>"><img class="inject-me" src="/front/dking/assets/images/icon-img/close.svg" alt=""></a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-8"></div>
                        <div class="col-lg-4">
                            <div class="table-content table-responsive mt-50">
                                <table>
                                    <tr>
                                        <td class="td-text-center">Total :</td>
                                        <td class="product-total"><?= number_to_currency($cart->Total(), 'Rp.'); ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="cart-shiping-update-wrapper">
                        <button type="submit" class="button">Refesh Keranjang</button>
                        <a href="/Shop/clear">Kosongkan Keranjang</a>
                        <a href="/Shop">Lanjut Belanja</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<script src="/zz/src/assets/jquery/jquery.min.js"></script>


<?= $this->endsection(); ?>