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
                        <th><b>Merk</th>
                        <th><b>Nama</th>
                        <th><b>Sertifikat</th>
                        <th><b>Jenis Kabel</th>
                        <th><b>Power</th>
                        <th><b>Harga</th>
                        <th><b>Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($psu as $val) : ?>
                        <tr align="middle">
                            <td><?= $i++; ?></td>
                            <td><?= $val['merk']; ?></td>
                            <td><?= $val['nama']; ?></td>
                            <td><?= $val['sertifikat']; ?></td>
                            <td><?= $val['jenis_kabel']; ?></td>
                            <td><?= $val['mb_power'] . "Watt"; ?></td>
                            <td><?= $val['harga']; ?></td>
                            <td><?= $val['stok']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <script>
        window.print()
    </script>