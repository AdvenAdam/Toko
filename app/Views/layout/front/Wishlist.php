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
                    <a href="index.html">Home </a>
                </li>
                <li><span> > </span></li>
                <li>
                    <a href="index.html">Product </a>
                </li>
                <li><span> > </span></li>
                <li class="active"> Wishlist </li>
            </ul>
        </div>
    </div>
</div>
<div class="cart-area bg-gray pt-100 pb-100">
    <center>
        <h1><?= $title; ?></h1>
    </center>
    <div class="container mt-30">
        <form action="#">
            <div class="cart-table-content wishlist-wrap">
                <div class="table-content table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th class="th-text-center"> Price</th>
                                <th class="th-text-center">Quantity</th>
                                <th class="th-text-center">Total Prce</th>
                                <th class="th-text-center">Add To Cart</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($wish as $val) { ?>
                                <?php $slug = url_title($val['nama'], '-', true); ?>
                                <tr>
                                    <td class="cart-product">
                                        <div class="product-img-info-wrap">
                                            <div class="product-info">
                                                <h4><a href="" data-toggle="modal" data-target="#exampleModal<?= $slug; ?>"><?= $val['nama']; ?></a></h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price"><span class="amount"><?= $val['harga']; ?></span></td>
                                    <td class="cart-quality">
                                        <div class="pro-details-quality">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box plus-minus-width-inc" type="text" name="qtybutton" value="02">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-total"><span>$112.00</span></td>
                                    <td class="product-wishlist-cart"><a href="#">Add To Cart</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endsection(); ?>