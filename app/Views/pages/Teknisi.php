<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="page-content-wrapper">
    <div class="page-content-wrapper-inner">
        <div class="content-viewport">
            <div class="row">
                <div class="col-12 py-5">
                    <h4><?= $title; ?></h4>
                    <p class="text-gray">Welcome aboard,<?= session()->get('username') ?></p>
                </div>
            </div>
            <div class="row">
                <!-- teknisi -->
                <div class="col-md-6 equel-grid">
                    <div class="grid">
                        <p class="grid-header ml-n1"><b>Daftar Teknisi</b></p>
                        <div class="grid-body py-3">
                            <div class="table-responsive">
                                <table class="table table-hover table-sm">
                                    <thead>
                                        <tr class="solid-header">
                                            <th><b>Nama</b></th>
                                            <th><b>Email</b></th>
                                            <th><b>No Pegawai</b></th>
                                            <th><b>Foto</b></th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($teknisi as $val) { ?>
                                        <tbody>
                                            <tr>
                                                <td><?= $val['username']; ?></td>
                                                <td><?= $val['email']; ?></td>
                                                <td><?= $val['no_pegawai']; ?></td>
                                                <td><img src="/img/user/<?= $val['foto']; ?>" class="tablegambar" alt=""></td>
                                            </tr>
                                        </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 equel-grid">
                    <div class="grid">
                        <h2 class="grid-header"><b>Satistik Service</b> </h2>
                        <div class="grid-body">
                            <div class="item-wrapper">
                                <canvas id="chartjs-doughnut-chart" width="500" height="400"></canvas>
                            </div>
                        </div>
                    </div>
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
                        data: [<?php echo json_encode($diproses); ?>, <?php echo json_encode($diterima); ?>, <?php echo json_encode($selesai); ?>],
                        backgroundColor: chartColors,
                        borderColor: chartColors,
                        borderWidth: chartColors
                    }],
                    labels: [
                        'diproses',
                        'diterima',
                        'selesai',
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