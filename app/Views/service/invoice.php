<html lang="en">

<head>
    <link rel="stylesheet" href="/front/dking/assets/css/style.min.css">
    <link rel="stylesheet" href="/front/dking/assets/css/vendor/vendor.min.css">
    <title><?= $title; ?></title>
</head>

<body>
    <div class="main-wrapper main-wrapper-3">
        <div class="checkout-area bg-gray pt-160 pb-160">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-6">
                        <?php foreach ($service as $val) : ?>
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

                                <ul>
                                    <li>Nama <span><?= $val['nama']; ?></span></li>
                                    <li>No Antrian <span><?= $val['antrian_pc']; ?></span></li>
                                    <li>Customer <span><?= session()->get('username') ?></span></li>
                                    <li>Biaya <span><?= $val['biaya'] ?></span></li>
                                    <li>Rincian Service <span><textarea readonly='readonly'><?= $val['rincian_service']; ?></textarea></span></li>
                                </ul>
                                <div class="total-order">
                                    <ul> <br><br>
                                        <span style="color: red;">*Bukti ini jangan sampai hilang</span>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    window.print()
</script>

</html>