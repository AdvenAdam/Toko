<?= $this->extend('/layout/front/v_page/v_template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('/layout/front/v_page/v_nav'); ?>
<div class="breadcrumb-area breadcrumb-mt bg-gray breadcrumb-ptb-1">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2><?= $title; ?></h2>
            <p>Anda dapat mensimulasikan merakit PC di sini</p>
        </div>
    </div>
    <div class="breadcrumb-img-1">
        <img src="/img/aset/rakit.jpg" alt="">
    </div>
    <div class="breadcrumb-img-2">
        <img src="/img/aset/rakit.jpg" alt="">
    </div>
</div>

<div class="contact-us-area">
    <div class="container">
        <div class="single-car-details">
            <div class="single-car-form-wrap">
                <form id="contact-form" action="assets/mail-php/mail.php" method="post">
                    <div class="row">
                        <label for="nama" class="col-sm-2 col-form-label">Merk Processor</label>
                        <div class="col-lg-5 col-md-5">
                            <div class="single-car-form mb-50">
                                <select class="nice-select nice-select-style-3" id="merk" name="merk" value="">
                                    <option value="<?= (old('merk')) ? (old('merk')) : "" ?>" selected><?= (old('merk')) ? (old('merk')) : "Pilih Merk" ?></option>
                                    <option value="INTEL">INTEL</option>
                                    <option value="AMD">AMD</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                        </div>
                        <label for="nama" class="col-sm-2 col-form-label">Processor</label>
                        <div class="col-lg-5 col-md-5">
                            <div class="single-car-form mb-50">
                                <select class="nice-select nice-select-style-3" id="procesor" name="procesor" value="">
                                    <option value="" selected> Pilih Processor </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <div class="single-car-form mb-50">
                                <input type="hidden" name="qtyProcesor" id="qtyProcesor" value="1">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="single-car-form mb-50">
                                <input type="text" id="hargaP" name="hargaP" readonly value="0">
                            </div>
                        </div>
                        <label for="nama" class="col-sm-2 col-form-label">Motherboard</label>
                        <div class="col-lg-5 col-md-5">
                            <div class="single-car-form mb-50">
                                <select class="nice-select nice-select-style-3" id="motherboard" name="motherboard" value="">
                                    <option value="" selected> Pilih Motherboard</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <div class="single-car-form mb-50">
                                <input type="hidden" name="qtyMotherboard" id="qtyMotherboard" value="1">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="single-car-form mb-50">
                                <input type="text" id="hargaM" name="hargaM" readonly value="0">
                            </div>
                        </div>
                        <label for="nama" class="col-sm-2 col-form-label">RAM</label>
                        <div class="col-lg-5 col-md-5">
                            <div class="single-car-form mb-50">
                                <select class="nice-select nice-select-style-3" id="ram" name="ram" value="">
                                    <option value="" selected> Pilih RAM </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2" align="center">
                            <div class="single-car-form mb-50">
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box qtyRam" type=" text" name="qtyRam" id="qtyRam" value="1">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="single-car-form mb-50">
                                <input type="text" id="hargaR" name="hargaR" value="0" readonly>
                            </div>
                        </div>
                        <label for="nama" class="col-sm-2 col-form-label">VGA</label>
                        <div class="col-lg-5 col-md-5">
                            <div class="single-car-form mb-50">
                                <select class="nice-select nice-select-style-3" id="vga" name="vga" value="">
                                    <option value="<?= (old('vga')) ? (old('vga')) : "" ?>" selected><?= (old('vga')) ? (old('vga')) : "Pilih VGA" ?></option>
                                    <?php foreach ($vga as $val) : ?>
                                        <option value="<?= $val['id']; ?>" data-harga="<?= $val['harga']; ?>"><?= $val['nama']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2" align="center">
                            <div class="single-car-form mb-50">
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtyVga" id="qtyVga" value="1" readonly>
                                    </div>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="single-car-form mb-50">
                                <input type="text" id="hargaV" name="hargaV" value="0" readonly>
                            </div>
                        </div>
                        <label for="nama" class="col-sm-2 col-form-label">Memori Penyimpanan</label>
                        <div class="col-lg-5 col-md-5">
                            <div class="single-car-form mb-50">
                                <select class="nice-select nice-select-style-3" id="memori" name="memori" value="">
                                    <option value="<?= (old('memori')) ? (old('memori')) : "" ?>" selected><?= (old('memori')) ? (old('memori')) : "Pilih Memori" ?></option>
                                    <?php foreach ($memori as $val) : ?>
                                        <option value="<?= $val['id']; ?>" data-harga="<?= $val['harga']; ?>"><?= $val['nama']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2" align="center">
                            <div class="single-car-form mb-50">
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtyMemori" id="qtyMemori" value="1" readonly>
                                    </div>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="single-car-form mb-50">
                                <input type="text" id="hargaMemori" nama="hargaMemori" value="0" readonly>
                            </div>
                        </div>
                        <label for="nama" class="col-sm-2 col-form-label">Pendingin</label>
                        <div class="col-lg-5 col-md-5">
                            <div class="single-car-form mb-50">
                                <select class="nice-select nice-select-style-3" id="pendingin" name="pendingin" value="">
                                    <option value="<?= (old('pendingin')) ? (old('pendingin')) : "" ?>" selected><?= (old('pendingin')) ? (old('pendingin')) : "Pilih Pendingin" ?></option>
                                    <?php foreach ($pendingin as $val) : ?>
                                        <option value="<?= $val['id']; ?>" data-harga="<?= $val['harga']; ?>"><?= $val['nama']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2" align="center">
                            <div class="single-car-form mb-50">
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtyPendingin" id="qtyPendingin" value="1" readonly>
                                    </div>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="single-car-form mb-50">
                                <input type="text" id="hargaCooler" value="0" name="hargaCooler" readonly>
                            </div>
                        </div>
                        <label for="nama" class="col-sm-2 col-form-label">Casing</label>
                        <div class="col-lg-5 col-md-5">
                            <div class="single-car-form mb-50">
                                <select class="nice-select nice-select-style-3" id="casing" name="casing" value="">
                                    <option value="<?= (old('casing')) ? (old('casing')) : "" ?>" selected><?= (old('casing')) ? (old('casing')) : "Pilih Casing" ?></option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <div class="single-car-form mb-50">
                                <input type="hidden" value="1">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="single-car-form mb-50">
                                <input type="text" id="hargaCasing" value="0" name="hargaCasing" readonly>
                            </div>
                        </div>
                        <label for="nama" class="col-sm-2 col-form-label">Power Supply</label>
                        <div class="col-lg-5 col-md-5">
                            <div class="single-car-form mb-50">
                                <select class="nice-select nice-select-style-3" id="psu" name="psu" value="">
                                    <option value="<?= (old('psu')) ? (old('psu')) : "" ?>" selected><?= (old('psu')) ? (old('psu')) : "Pilih Power Supply" ?></option>
                                    <?php foreach ($psu as $val) : ?>
                                        <option value="<?= $val['id']; ?>" data-harga="<?= $val['harga']; ?>"><?= $val['nama']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <div class="single-car-form mb-50">
                                <input type="hidden" value="1">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="single-car-form mb-50">
                                <input type="text" id="hargaPsu" name="hargaPsu" value="0" readonly>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <div class="single-car-form mb-50">
                                <input type="hidden" value="1">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="single-car-form mb-50">
                                <input type="text" id="total" name="Total" placeholder="total" readonly>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="/zz/src/assets/jquery/jquery.min.js"></script>

<!-- select processor -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#merk').change(function() {
            var merk = $("#merk").val();
            $.ajax({
                url: "<?php echo site_url('rakit/getProcie'); ?>",
                method: "POST",
                data: {
                    merk: merk
                },
                async: true,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    html += '<option value="" selected> Pilih Processor </option>';
                    for (i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].id + ' data-socket=' + data[i].socket + ' data-harga=' + data[i].harga + '>' + data[i].nama + '</option>';
                    }
                    $('#procesor').html(html);
                    $('#procesor').niceSelect('update');
                }
            });
            return false;
        });
    });
</script>
<!-- select MOtherboard  -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#procesor').change(function() {
            var socket = $("#procesor").find(':selected').data('socket');
            $.ajax({
                url: "<?php echo site_url('rakit/getMobos'); ?>",
                method: "POST",
                data: {
                    socket: socket
                },
                async: true,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    html += '<option value="" selected> Pilih Motherboard </option>';
                    for (i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].id + ' data-jenis_ram=' + data[i].jenis_ram + ' data-faktor_bentuk=' + data[i].faktor_bentuk + ' data-harga=' + data[i].harga + '>' + data[i].nama + '</option>';
                    }
                    $('#motherboard').html(html);
                    $('#motherboard').niceSelect('update');
                }
            });
            return false;
        });
    });
</script>
<!-- select ram  -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#motherboard').change(function() {
            var jenis_ram = $("#motherboard").find(':selected').data('jenis_ram');
            var hargaM = $("#motherboard").find(':selected').data('harga');
            document.getElementById('hargaM').value = hargaM;
            $.ajax({
                url: "<?php echo site_url('rakit/getRam'); ?>",
                method: "POST",
                data: {
                    jenis_ram: jenis_ram
                },
                async: true,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    html += '<option value="" selected> Pilih RAM </option>';
                    for (i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].id + ' data-harga=' + data[i].harga + '>' + data[i].nama + '</option>';
                    }
                    $('#ram').html(html);
                    $('#ram').niceSelect('update');
                }
            });
            return false;
        });
    });
</script>
<!-- select Casing -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#motherboard').change(function() {
            var faktor_bentuk = $("#motherboard").find(':selected').data('faktor_bentuk');
            $.ajax({
                url: "<?php echo site_url('rakit/getCasing'); ?>",
                method: "POST",
                data: {
                    faktor_bentuk: faktor_bentuk
                },
                async: true,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    html += '<option value="" selected> Pilih Cassing </option>';
                    for (i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].id + ' data-harga=' + data[i].harga + '>' + data[i].nama + '</option>';
                    }
                    $('#casing').html(html);
                    $('#casing').niceSelect('update');
                }
            });
            return false;
        });
    });
</script>

<!-- GEt Harga0 -->
<script>
    $(document).ready(function() {

        $('#procesor').change(function() {
            var hargaP = $("#procesor").find(':selected').data('harga');
            var qty = document.getElementById('qtyProcesor').value;
            var hasil = parseInt(hargaP) * parseInt(qty);
            document.getElementById('hargaP').value = hasil;
            // menjumlah semua ke total 
            var subtotalP = parseInt($("#hargaP").val());
            var subtotalM = parseInt($("#hargaM").val());
            var subtotalR = parseInt($("#hargaR").val());
            var subtotalV = parseInt($("#hargaV").val());
            var subtotalCooler = parseInt($("#hargaCooler").val());
            var subtotalMemori = parseInt($("#hargaMemori").val());
            var subtotalCasing = parseInt($("#hargaCasing").val());
            var subtotalPsu = parseInt($("#hargaPsu").val());
            var jumlah = parseInt(subtotalP + subtotalM + subtotalR + subtotalV + subtotalCooler + subtotalMemori + subtotalCasing + subtotalPsu);
            // conversi ke rupiah
            var total = jumlah.toLocaleString('id-ID', {
                currency: 'IDR',
                style: 'currency'
            });
            document.getElementById('total').value = total;

        });
        $('#motherboard').change(function() {
            var hargaM = $("#motherboard").find(':selected').data('harga');
            var qty = document.getElementById('qtyMotherboard').value;
            var hasil = parseInt(hargaM) * parseInt(qty);
            document.getElementById('hargaM').value = hasil;
            // menjumlah semua ke total 
            var subtotalP = parseInt($("#hargaP").val());
            var subtotalM = parseInt($("#hargaM").val());
            var subtotalR = parseInt($("#hargaR").val());
            var subtotalV = parseInt($("#hargaV").val());
            var subtotalCooler = parseInt($("#hargaCooler").val());
            var subtotalMemori = parseInt($("#hargaMemori").val());
            var subtotalCasing = parseInt($("#hargaCasing").val());
            var subtotalPsu = parseInt($("#hargaPsu").val());
            var jumlah = parseInt(subtotalP + subtotalM + subtotalR + subtotalV + subtotalCooler + subtotalMemori + subtotalCasing + subtotalPsu);
            // conversi ke rupiah
            var total = jumlah.toLocaleString('id-ID', {
                currency: 'IDR',
                style: 'currency'
            });
            document.getElementById('total').value = total;

        });
        $('#ram').change(function() {
            var hargaR = $("#ram").find(':selected').data('harga');
            document.getElementById('hargaR').value = hargaR;
            // menjumlah semua ke total 
            var subtotalP = parseInt($("#hargaP").val());
            var subtotalM = parseInt($("#hargaM").val());
            var subtotalR = parseInt($("#hargaR").val());
            var subtotalV = parseInt($("#hargaV").val());
            var subtotalCooler = parseInt($("#hargaCooler").val());
            var subtotalMemori = parseInt($("#hargaMemori").val());
            var subtotalCasing = parseInt($("#hargaCasing").val());
            var subtotalPsu = parseInt($("#hargaPsu").val());
            var jumlah = parseInt(subtotalP + subtotalM + subtotalR + subtotalV + subtotalCooler + subtotalMemori + subtotalCasing + subtotalPsu);
            // conversi ke rupiah
            var total = jumlah.toLocaleString('id-ID', {
                currency: 'IDR',
                style: 'currency'
            });
            document.getElementById('total').value = total;
            $('.inc,.dec').click(function() {
                var qty = document.getElementById('qtyRam').value;
                var hasil = parseInt(hargaR) * parseInt(qty);
                document.getElementById('hargaR').value = hasil;
                // menjumlah semua ke total 
                var subtotalP = parseInt($("#hargaP").val());
                var subtotalM = parseInt($("#hargaM").val());
                var subtotalR = parseInt($("#hargaR").val());
                var subtotalV = parseInt($("#hargaV").val());
                var subtotalCooler = parseInt($("#hargaCooler").val());
                var subtotalMemori = parseInt($("#hargaMemori").val());
                var subtotalCasing = parseInt($("#hargaCasing").val());
                var subtotalPsu = parseInt($("#hargaPsu").val());
                var jumlah = parseInt(subtotalP + subtotalM + subtotalR + subtotalV + subtotalCooler + subtotalMemori + subtotalCasing + subtotalPsu);
                // conversi ke rupiah
                var total = jumlah.toLocaleString('id-ID', {
                    currency: 'IDR',
                    style: 'currency'
                });
                document.getElementById('total').value = total;
            });
        });
        $('#vga').change(function() {
            var hargaV = $("#vga").find(':selected').data('harga');
            document.getElementById('hargaV').value = hargaV;
            // menjumlah semua ke total 
            var subtotalP = parseInt($("#hargaP").val());
            var subtotalM = parseInt($("#hargaM").val());
            var subtotalR = parseInt($("#hargaR").val());
            var subtotalV = parseInt($("#hargaV").val());
            var subtotalCooler = parseInt($("#hargaCooler").val());
            var subtotalMemori = parseInt($("#hargaMemori").val());
            var subtotalCasing = parseInt($("#hargaCasing").val());
            var subtotalPsu = parseInt($("#hargaPsu").val());
            var jumlah = parseInt(subtotalP + subtotalM + subtotalR + subtotalV + subtotalCooler + subtotalMemori + subtotalCasing + subtotalPsu);
            // conversi ke rupiah
            var total = jumlah.toLocaleString('id-ID', {
                currency: 'IDR',
                style: 'currency'
            });
            document.getElementById('total').value = total;
            $('.inc,.dec').click(function() {
                var qty = document.getElementById('qtyVga').value;
                var hasil = parseInt(hargaV) * parseInt(qty);
                document.getElementById('hargaV').value = hasil;
                // menjumlah semua ke total 
                var subtotalP = parseInt($("#hargaP").val());
                var subtotalM = parseInt($("#hargaM").val());
                var subtotalR = parseInt($("#hargaR").val());
                var subtotalV = parseInt($("#hargaV").val());
                var subtotalCooler = parseInt($("#hargaCooler").val());
                var subtotalMemori = parseInt($("#hargaMemori").val());
                var subtotalCasing = parseInt($("#hargaCasing").val());
                var subtotalPsu = parseInt($("#hargaPsu").val());
                var jumlah = parseInt(subtotalP + subtotalM + subtotalR + subtotalV + subtotalCooler + subtotalMemori + subtotalCasing + subtotalPsu);
                // conversi ke rupiah
                var total = jumlah.toLocaleString('id-ID', {
                    currency: 'IDR',
                    style: 'currency'
                });
                document.getElementById('total').value = total;
            });
        });
        $('#memori').change(function() {
            var hargaMemori = $("#memori").find(':selected').data('harga');
            document.getElementById('hargaMemori').value = hargaMemori;
            // menjumlah semua ke total 
            var subtotalP = parseInt($("#hargaP").val());
            var subtotalM = parseInt($("#hargaM").val());
            var subtotalR = parseInt($("#hargaR").val());
            var subtotalV = parseInt($("#hargaV").val());
            var subtotalCooler = parseInt($("#hargaCooler").val());
            var subtotalMemori = parseInt($("#hargaMemori").val());
            var subtotalCasing = parseInt($("#hargaCasing").val());
            var subtotalPsu = parseInt($("#hargaPsu").val());
            var jumlah = parseInt(subtotalP + subtotalM + subtotalR + subtotalV + subtotalCooler + subtotalMemori + subtotalCasing + subtotalPsu);
            // conversi ke rupiah
            var total = jumlah.toLocaleString('id-ID', {
                currency: 'IDR',
                style: 'currency'
            });
            document.getElementById('total').value = total;
            $('.inc,.dec').click(function() {
                var qty = document.getElementById('qtyMemori').value;
                var hasil = parseInt(hargaMemori) * parseInt(qty);
                document.getElementById('hargaMemori').value = hasil;
                // menjumlah semua ke total 
                var subtotalP = parseInt($("#hargaP").val());
                var subtotalM = parseInt($("#hargaM").val());
                var subtotalR = parseInt($("#hargaR").val());
                var subtotalV = parseInt($("#hargaV").val());
                var subtotalCooler = parseInt($("#hargaCooler").val());
                var subtotalMemori = parseInt($("#hargaMemori").val());
                var subtotalCasing = parseInt($("#hargaCasing").val());
                var subtotalPsu = parseInt($("#hargaPsu").val());
                var jumlah = parseInt(subtotalP + subtotalM + subtotalR + subtotalV + subtotalCooler + subtotalMemori + subtotalCasing + subtotalPsu);
                // conversi ke rupiah
                var total = jumlah.toLocaleString('id-ID', {
                    currency: 'IDR',
                    style: 'currency'
                });
                document.getElementById('total').value = total;
            });
        });
        $('#pendingin').change(function() {
            var hargaCooler = $("#pendingin").find(':selected').data('harga');
            document.getElementById('hargaCooler').value = hargaCooler;
            // menjumlah semua ke total 
            var subtotalP = parseInt($("#hargaP").val());
            var subtotalM = parseInt($("#hargaM").val());
            var subtotalR = parseInt($("#hargaR").val());
            var subtotalV = parseInt($("#hargaV").val());
            var subtotalCooler = parseInt($("#hargaCooler").val());
            var subtotalMemori = parseInt($("#hargaMemori").val());
            var subtotalCasing = parseInt($("#hargaCasing").val());
            var subtotalPsu = parseInt($("#hargaPsu").val());
            var jumlah = parseInt(subtotalP + subtotalM + subtotalR + subtotalV + subtotalCooler + subtotalMemori + subtotalCasing + subtotalPsu);
            // conversi ke rupiah
            var total = jumlah.toLocaleString('id-ID', {
                currency: 'IDR',
                style: 'currency'
            });
            document.getElementById('total').value = total;
            $('.inc,.dec').click(function() {
                var qty = document.getElementById('qtyPendingin').value;
                var hasil = parseInt(hargaCooler) * parseInt(qty);
                document.getElementById('hargaCooler').value = hasil;
                // menjumlah semua ke total 
                var subtotalP = parseInt($("#hargaP").val());
                var subtotalM = parseInt($("#hargaM").val());
                var subtotalR = parseInt($("#hargaR").val());
                var subtotalV = parseInt($("#hargaV").val());
                var subtotalCooler = parseInt($("#hargaCooler").val());
                var subtotalMemori = parseInt($("#hargaMemori").val());
                var subtotalCasing = parseInt($("#hargaCasing").val());
                var subtotalPsu = parseInt($("#hargaPsu").val());
                var jumlah = parseInt(subtotalP + subtotalM + subtotalR + subtotalV + subtotalCooler + subtotalMemori + subtotalCasing + subtotalPsu);
                // conversi ke rupiah
                var total = jumlah.toLocaleString('id-ID', {
                    currency: 'IDR',
                    style: 'currency'
                });
                document.getElementById('total').value = total;
            });
        });
        $('#casing').change(function() {
            var hargaCasing = $("#casing").find(':selected').data('harga');
            document.getElementById('hargaCasing').value = hargaCasing;
            // menjumlah semua ke total 
            var subtotalP = parseInt($("#hargaP").val());
            var subtotalM = parseInt($("#hargaM").val());
            var subtotalR = parseInt($("#hargaR").val());
            var subtotalV = parseInt($("#hargaV").val());
            var subtotalCooler = parseInt($("#hargaCooler").val());
            var subtotalMemori = parseInt($("#hargaMemori").val());
            var subtotalCasing = parseInt($("#hargaCasing").val());
            var subtotalPsu = parseInt($("#hargaPsu").val());
            var jumlah = parseInt(subtotalP + subtotalM + subtotalR + subtotalV + subtotalCooler + subtotalMemori + subtotalCasing + subtotalPsu);
            // conversi ke rupiah
            var total = jumlah.toLocaleString('id-ID', {
                currency: 'IDR',
                style: 'currency'
            });
            document.getElementById('total').value = total;
        });
        $('#psu').change(function() {
            var hargaPsu = $("#psu").find(':selected').data('harga');
            document.getElementById('hargaPsu').value = hargaPsu;
            // menjumlah semua ke total 
            var subtotalP = parseInt($("#hargaP").val());
            var subtotalM = parseInt($("#hargaM").val());
            var subtotalR = parseInt($("#hargaR").val());
            var subtotalV = parseInt($("#hargaV").val());
            var subtotalCooler = parseInt($("#hargaCooler").val());
            var subtotalMemori = parseInt($("#hargaMemori").val());
            var subtotalCasing = parseInt($("#hargaCasing").val());
            var subtotalPsu = parseInt($("#hargaPsu").val());
            var jumlah = parseInt(subtotalP + subtotalM + subtotalR + subtotalV + subtotalCooler + subtotalMemori + subtotalCasing + subtotalPsu);
            // conversi ke rupiah
            var total = jumlah.toLocaleString('id-ID', {
                currency: 'IDR',
                style: 'currency'
            });
            document.getElementById('total').value = total;
        });


    });
</script>

<?= $this->endsection(); ?>

<!-- cara rubah ke indo currency -->
<!-- var hargaP = $("#procesor").find(':selected').data('harga').toLocaleString('id-ID', {
                currency: 'IDR',
                style: 'currency'
            }); -->