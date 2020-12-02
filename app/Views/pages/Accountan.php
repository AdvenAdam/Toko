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
                <div class="col-md-6">
                    <div class="grid">
                        <div class="grid-body">
                            <h2 class="grid-title">Coba Chart</h2>
                            <div class="item-wrapper">
                                <canvas id="chartjs-staked-bar-chart" width="600" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="grid">
                        <div class="grid-body">
                            <h2 class="grid-title">Coba Chart</h2>
                            <div class="item-wrapper">
                                <canvas id="chartjs-staked-line-chart2" width="600" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $a = 0;
        $b = 0;
        $c = 0;
        ?>

        <?php foreach ($kas as $val) : ?>
            <?php
            $b += intval($val['pemasukan']);
            $c += intval($val['pengeluaran']);
            ?>
            <?php $pemasukan[] = $b; ?>
            <?php $pengeluaran[] = $c; ?>
            <?php $a += intval($val['pemasukan'] - $val['pengeluaran']); ?>
            <?php $saldo[] = (float)$a; ?>
            <?php $tgl[]   = $val['created_at']; ?>

        <?php endforeach; ?>

        <!-- jQuery -->
        <script src="/zz/src/assets/jquery/jquery.min.js"></script>

        <script>
            $(function() {
                "use strict";
                var StatsLineOptions = {
                    scales: {
                        responsive: false,
                        maintainAspectRatio: true,
                        yAxes: [{
                            display: false
                        }],
                        xAxes: [{
                            display: false
                        }]
                    },
                    legend: {
                        display: false
                    },
                    elements: {
                        point: {
                            radius: 0
                        }
                    },
                    stepsize: 100
                }
                if ($("#chartjs-staked-bar-chart").length) {
                    var BarData = {
                        labels: <?= json_encode($tgl); ?>,
                        datasets: [{
                                label: 'Pemasukan',
                                data: <?= json_encode($pemasukan); ?>,
                                backgroundColor: chartColors[0],
                                borderColor: chartColors[0],
                                borderWidth: 0
                            },
                            {
                                label: 'pengeluaran',
                                data: <?= json_encode($pengeluaran); ?>,
                                backgroundColor: chartColors[1],
                                borderColor: chartColors[1],
                                borderWidth: 0
                            }
                        ]
                    };
                    var barChartCanvas = $("#chartjs-staked-bar-chart").get(0).getContext("2d");
                    var barChart = new Chart(barChartCanvas, {
                        type: 'bar',
                        data: BarData,
                        options: {
                            tooltips: {
                                mode: 'index',
                                intersect: false
                            },
                            responsive: true,
                            scales: {
                                xAxes: [{
                                    stacked: true,
                                }],
                                yAxes: [{
                                    stacked: true
                                }]
                            },
                            legend: false
                        }
                    });
                }
                if ($("#chartjs-staked-line-chart2").length) {
                    var options = {
                        type: 'line',
                        data: {
                            labels: <?php echo json_encode($tgl); ?>,
                            datasets: [{
                                label: '#Saldo',
                                data: <?php echo json_encode($saldo); ?>,
                                borderWidth: 2,
                                fill: false,
                                backgroundColor: chartColors[2],
                                borderColor: chartColors[2],
                                borderWidth: 0
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        reverse: false
                                    }
                                }]
                            },
                            fill: true,
                            legend: false
                        }
                    }

                    var ctx = document.getElementById('chartjs-staked-line-chart2').getContext('2d');
                    new Chart(ctx, options);
                }


            });
        </script>

        <?= $this->endSection(); ?>