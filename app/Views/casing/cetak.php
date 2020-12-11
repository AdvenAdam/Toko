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
            <table id="example" class="table table-hover">
                <thead>
                    <tr align="middle">
                        <th width="5%"><b>No</b></th>
                        <th><b>Merk</b></th>
                        <th><b>Nama</b></th>
                        <th><b>Faktor Bentuk</b></th>
                        <th><b>Harga</b></th>
                        <th><b>Stok</b></th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($casing as $val) : ?>
                        <tr align="middle">
                            <td><?= $i++; ?></td>
                            <td><?= $val['merk']; ?></td>
                            <td><?= $val['nama']; ?></td>
                            <td><?= $val['faktor_bentuk']; ?></td>
                            <td><?= number_format($val['harga']); ?></td>
                            <td><?= $val['stok']; ?></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <script>
            window.print()
        </script>