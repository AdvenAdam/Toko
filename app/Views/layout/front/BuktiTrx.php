<html lang="en">

<head>
    <link rel="stylesheet" href="/front/dking/assets/css/style.min.css">
    <link rel="stylesheet" href="/front/dking/assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="/front/dking/assets/css/vendor/vendor.min.css">
    <title><?= $title; ?></title>
</head>

<body>
    <div class="main-wrapper main-wrapper-3">
        <div class="checkout-area bg-gray pt-160 pb-160">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-10">
                        <div class="payment-details mb-40">
                            <div class="row">
                                <div class="col-3">
                                    <img src="/img/aset/logo.png" alt="logo">
                                </div>
                                <div class="col-9 mb-20 ml-auto mr-auto">
                                    <center>
                                        <h3><b>SpaceComp</b></h3>
                                        <h7>Computer & Service Center</h7>
                                    </center>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <h4 class="checkout-title"><?= $title; ?></h4>
                                </div>
                                <div class="col-6" align="right">
                                    <h7><?= (date('Y-m-d')); ?></h7>
                                </div>
                            </div>

                            <div class="cart-table-content">
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Produk</th>
                                                <th class="th-text-center"> Harga</th>
                                                <th class="th-text-center">Qty</th>
                                                <th class="th-text-center">Sub Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($cart->contents() as $val) { ?>
                                                <tr>
                                                    <td class="cart-product">
                                                        <div class="product-img-info-wrap">
                                                            <div class="product-info">
                                                                <h4><a href="#"><?= $val['name']; ?></a></h4>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <?php $a = $i++; ?>
                                                    <td class="product-price"><span class="amount"><?= number_to_currency($val['price'], 'Rp.'); ?></span></td>
                                                    <td class="cart-quality ">
                                                        <div class="pro-details-quality pl-50 pr-50">
                                                            <span class="amount"><?= $val['qty']; ?></span>
                                                        </div>
                                                    </td>
                                                    <td class="product-total"><span class="amount"><?= number_to_currency($val['subtotal'], 'Rp.'); ?></span></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="total-order">
                                    <div class="row">
                                        <div class="col-lg-8">CS : <?= session()->get('username'); ?></div>
                                        <div class="col-lg-4">
                                            <div class="table-content table-responsive mt-50">
                                                <table>
                                                    <tr>
                                                        <td>Total </td>
                                                        <td class="product-total"><b><?= number_to_currency($cart->Total(), 'Rp.'); ?></b></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    window.print()
</script>

</html>