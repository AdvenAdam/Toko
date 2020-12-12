<html lang="en">

<head>
    <link rel="stylesheet" href="/front/dking/assets/css/style.min.css">
    <link rel="stylesheet" href="/front/dking/assets/css/vendor/vendor.min.css">

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
                                        <img src="/front/dking/assets/images/logo/logo-9.png" alt="logo">
                                    </div>
                                    <div class="col-9 mb-20 ml-auto mr-auto">
                                        <center>
                                            <h3><b>SpaceComp</b></h3>
                                            <h6>Service Center</h6>
                                        </center>
                                    </div>
                                </div>

                                <h4 class="checkout-title">Bukti Service</h4>
                                <ul>
                                    <li>Nama <span><?= $val['nama']; ?></span></li>
                                    <li>No Antrian <span><?= $val['antrian_pc']; ?></span></li>
                                    <li>Customer <span><?= session()->get('username') ?></span></li>
                                </ul>
                                <div class="total-order">
                                    <ul>
                                        <li>Masuk <span><?= format_indo($val['created_at']); ?></span></li>
                                        <br><br>
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