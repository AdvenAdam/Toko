<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="page-content-wrapper">
    <div class="page-content-wrapper-inner">
        <div class="content-viewport">
            <div class="row">
                <div class="col-12 py-5">
                    <h4><?= $title; ?></h4>
                    <p class="text-gray">Welcome aboard,<?= session()->get('username'); ?></p>
                </div>
            </div>
            <div class="row">
                <!-- chart rate -->
                <div class="col-md-6">
                    <div class="grid">
                        <h2 class="grid-header"><b>Rating</b> </h2>
                        <div class="grid-body">
                            <div class="item-wrapper">
                                <canvas id="chartjs-doughnut-chart" width="500" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- subs &Guest  -->
                <div class="col-md-6 equel-grid">
                    <div class="grid">
                        <div class="grid-header py-3">
                            <p class="card-title ml-n1"><b>Subs Email</b></p>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-sm">
                                <thead>
                                    <tr class="solid-header">
                                        <th><b>Email</b></th>
                                    </tr>
                                </thead>

                                <?php foreach (array_reverse($subs) as $val) { ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $val['emailsub']; ?></td>
                                        </tr>
                                    </tbody>
                                <?php } ?>
                            </table>
                        </div>
                        <div class="grid-body py-3">
                            <div class="grid-header">
                                <p><b>Jumlah Akun Pengguna</b></p>
                            </div>
                            <div class="d-flex align-items-end mt-2">
                                <h1><b><?= $guest; ?></b></h1>
                                <p class="ml-1 font-weight-bold"> Akun </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- toko -->
                <div class="col-md-8 equel-grid">
                    <div class="grid">
                        <p class="grid-header ml-n1"><b>Toko Online</b></p>
                        <div class="grid-body py-3">
                            <div class="table-responsive">
                                <table class="table table-hover table-sm">
                                    <thead>
                                        <tr class="solid-header">
                                            <th><b>Nama</b></th>
                                            <th><b>Platform</b></th>
                                            <th><b>Link</b></th>
                                            <th><b>Tampil Dashboard</b></th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($toko as $val) { ?>
                                        <tbody>
                                            <tr>
                                                <td><?= $val['nama']; ?></td>
                                                <td><?= $val['platform']; ?></td>
                                                <td><?= $val['link']; ?></td>
                                                <td><?= $val['tampil']; ?></td>
                                            </tr>
                                        </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User kecuali Guest    -->
                <div class="col-md-4 equel-grid">
                    <div class="grid">
                        <p class="grid-header ml-n1"><b>User Bukan Guest</b></p>
                        <div class="grid-body py-3">
                            <div class="table-responsive">
                                <table class="table table-hover table-sm">
                                    <thead>
                                        <tr class="solid-header">
                                            <th><b>Username</b></th>
                                            <th><b>Level</b></th>
                                        </tr>
                                    </thead>

                                    <?php foreach ($user as $val) { ?>
                                        <tbody>
                                            <tr>
                                                <td><?= $val['username']; ?></td>
                                                <td><?= $val['level']; ?></td>
                                            </tr>
                                        </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end -->
            </div>
        </div>
    </div>
</div>

<!-- chart js  -->
<!-- jQuery -->
<script src="/zz/src/assets/jquery/jquery.min.js"></script>

<script>
    $(function() {
        'use strict';
        if ($("#chartjs-doughnut-chart").length) {
            var DoughnutData = {
                datasets: [{
                    data: [<?php echo json_encode($bintang1); ?>, <?php echo json_encode($bintang2); ?>, <?php echo json_encode($bintang3); ?>, <?php echo json_encode($bintang4); ?>, <?php echo json_encode($bintang5); ?>],
                    backgroundColor: chartColors,
                    borderColor: chartColors,
                    borderWidth: chartColors
                }],
                labels: [
                    'Bintang 1',
                    'Bintang 2',
                    'Bintang 3',
                    'Bintang 4',
                    'Bintang 5',
                ]
            };
            var DoughnutOptions = {
                responsive: true,
                animation: {
                    animateScale: true,
                    animateRotate: true
                }
            };
            var doughnutChartCanvas = $("#chartjs-doughnut-chart").get(0).getContext("2d");
            var doughnutChart = new Chart(doughnutChartCanvas, {
                type: 'doughnut',
                data: DoughnutData,
                options: DoughnutOptions
            });
        }
    });
</script>
<?= $this->endSection(); ?>