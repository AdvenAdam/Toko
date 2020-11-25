<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title; ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/zz/src/assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <link rel="stylesheet" href="/zz/src/assets/vendors/css/vendor.addons.css">
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/zz/src/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="/zz/src/assets/css/demo_1/style.css">
    <!-- Layout style -->
    <link rel="shortcut icon" href="/zz/src/asssets/images/favicon.ico" />

    <!-- DataTables -->
    <link rel="stylesheet" href="/zz/src/assets/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/zz/src/assets/datatables-responsive/css/responsive.bootstrap4.min.css">


</head>

<body class="header-fixed">
    <div class="grid">
        <div class="grid-header">
            <h2>
                <?= $title; ?>
            </h2>
        </div>
        <div class="card-body">
            <table id="example" class="table table-bordered table-hover">
                <thead>
                    <tr align="middle">
                        <th width="5%"><b>No</th>
                        <th><b>Tanggal</th>
                        <th><b>Jenis Kas</th>
                        <th><b>Pemasukan</th>
                        <th><b>Pengeluaran</th>
                        <th><b>Saldo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kas as $val) : ?>
                        <?php
                        $pemasukan += intval($val['pemasukan']);
                        $pengeluaran += intval($val['pengeluaran']);
                        $saldo += intval($val['pemasukan'] - $val['pengeluaran']);

                        ?>
                        <tr align="middle">
                            <td><?= $i++; ?></td>
                            <td><?= $val['created_at']; ?></td>
                            <td><?= $val['jenis_kas']; ?></td>
                            <td><?= number_format($val['pemasukan']); ?></td>
                            <td><?= number_format($val['pengeluaran']); ?></td>
                            <td><?= number_format($val['pemasukan'] - $val['pengeluaran']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

                <tr>
                    <th colspan="3">
                        <center>
                            <h2>Total</h2>
                        </center>
                    </th>
                    <th><b>
                            <h4>Rp. <?= number_format($pemasukan) ?></h4>
                        </b></th>
                    <th><b>
                            <h4>Rp. <?= number_format($pengeluaran) ?></h4>
                        </b></th>
                    <td colspan="2"><b>
                            <h4>Rp. <?= number_format($saldo) ?></h4>
                        </b></td>
                </tr>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <script>
        window.print()
    </script>