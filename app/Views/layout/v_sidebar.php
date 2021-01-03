<div class="page-body">
    <!-- partial:partials/_sidebar.html -->
    <div class="sidebar">
        <div class="user-profile">
            <div class="display-avatar animated-avatar">
                <img class="profile-img img-lg rounded-circle" src="/img/user/<?= session()->get('foto') ?>" alt="profile image">
            </div>
            <div class="info-wrapper">
                <p class="user-name"><?= session()->get('username'); ?></p>
                <p><?= session()->get('level'); ?></p>

            </div>
        </div>
        <ul class="navigation-menu">
            <li class="nav-category-divider">MAIN</li>
            <li>
                <a href="/Dashboard">
                    <span class="link-title">Dashboard</span>
                    <i class="mdi mdi-gauge link-icon"></i>
                </a>
            </li>
            <!-- Warehouse level -->
            <?php if (session()->get('level') == 'Warehouse') { ?>
                <li>
                    <!-- motherboard -->
                    <a href="#motherboard" data-toggle="collapse" aria-expanded="false">
                        <span class="link-title">Motherboard</span>
                        <i class=" mdi mdi-crop-square link-icon"></i>
                    </a>
                    <ul class="collapse navigation-submenu" id="motherboard">
                        <li>
                            <a href="/motherboard/">Data Master</a>
                        </li>
                        <li>
                            <a href="/motherboard/tambah/">Tambah Stok</a>
                        </li>
                        <li>
                            <a href="/motherboard/create/">Input Data</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <!-- Processor -->
                    <a href="#procesor" data-toggle="collapse" aria-expanded="false">
                        <span class="link-title">Processor</span>
                        <i class=" mdi mdi-crop-square link-icon"></i>
                    </a>

                    <ul class="collapse navigation-submenu" id="procesor">
                        <li>
                            <a href="/procesor/">Data Master</a>
                        </li>
                        <li>
                            <a href="/procesor/tambah/">Tambah Stok</a>
                        </li>
                        <li>
                            <a href="/procesor/create/">Input Data</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <!-- RAM -->
                    <a href="#ram" data-toggle="collapse" aria-expanded="false">
                        <span class="link-title">RAM</span>
                        <i class=" mdi mdi-crop-square link-icon"></i>
                    </a>

                    <ul class="collapse navigation-submenu" id="ram">
                        <li>
                            <a href="/ram/">Data Master</a>
                        </li>
                        <li>
                            <a href="/ram/tambah/">Tambah Stok</a>
                        </li>
                        <li>
                            <a href="/ram/create/">Input Data</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <!-- VGA -->
                    <a href="#vga" data-toggle="collapse" aria-expanded="false">
                        <span class="link-title">VGA</span>
                        <i class=" mdi mdi-crop-square link-icon"></i>
                    </a>

                    <ul class="collapse navigation-submenu" id="vga">
                        <li>
                            <a href="/vga/">Data Master</a>
                        </li>
                        <li>
                            <a href="/vga/tambah/">Tambah Stok</a>
                        </li>
                        <li>
                            <a href="/vga/create/">Input Data</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <!-- memory -->
                    <a href="#memori" data-toggle="collapse" aria-expanded="false">
                        <span class="link-title">Memory</span>
                        <i class=" mdi mdi-crop-square link-icon"></i>
                    </a>

                    <ul class="collapse navigation-submenu" id="memori">
                        <li>
                            <a href="/memori/">Data Master</a>
                        </li>
                        <li>
                            <a href="/memori/tambah/">Tambah Stok</a>
                        </li>
                        <li>
                            <a href="/memori/create/">Input Data</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <!-- psu -->
                    <a href="#psu" data-toggle="collapse" aria-expanded="false">
                        <span class="link-title">Power Supply</span>
                        <i class=" mdi mdi-crop-square link-icon"></i>
                    </a>

                    <ul class="collapse navigation-submenu" id="psu">
                        <li>
                            <a href="/psu/">Data Master</a>
                        </li>
                        <li>
                            <a href="/psu/tambah/">Tambah Stok</a>
                        </li>
                        <li>
                            <a href="/psu/create/">Input Data</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <!-- casing -->
                    <a href="#casing" data-toggle="collapse" aria-expanded="false">
                        <span class="link-title">Cassing</span>
                        <i class=" mdi mdi-crop-square link-icon"></i>
                    </a>

                    <ul class="collapse navigation-submenu" id="casing">
                        <li>
                            <a href="/casing/">Data Master</a>
                        </li>
                        <li>
                            <a href="/casing/tambah/">Tambah Stok</a>
                        </li>
                        <li>
                            <a href="/casing/create/">Input Data</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <!-- pendingin -->
                    <a href="#pendingin" data-toggle="collapse" aria-expanded="false">
                        <span class="link-title">Pendingin</span>
                        <i class=" mdi mdi-crop-square link-icon"></i>
                    </a>

                    <ul class="collapse navigation-submenu" id="pendingin">
                        <li>
                            <a href="/pendingin/">Data Master</a>
                        </li>
                        <li>
                            <a href="/pendingin/tambah/">Tambah Stok</a>
                        </li>
                        <li>
                            <a href="/pendingin/create/">Input Data</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/merk">
                        <span class="link-title">Merk</span>
                        <i class="mdi mdi mdi-label link-icon"></i>
                    </a>
                </li>
            <?php } ?>
            <!-- admin level -->
            <?php if (session()->get('level') == 'Admin') { ?>
                <li>
                    <a href="/pegawai">
                        <span class="link-title">Pegawai</span>
                        <i class="mdi mdi-account-multiple link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="/user">
                        <span class="link-title">User</span>
                        <i class="mdi mdi-account link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="/toko">
                        <span class="link-title">Toko</span>
                        <i class="mdi mdi-shopping  link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="/slider">
                        <span class="link-title">Slider Dashboard Toko</span>
                        <i class="mdi mdi mdi-monitor-multiple  link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="/rating">
                        <span class="link-title">Review&Rating</span>
                        <i class="mdi  mdi mdi-tooltip  link-icon"></i>
                    </a>
                </li>
            <?php } ?>
            <!-- Acccountant Level -->
            <?php if (session()->get('level') == 'Accountant') { ?>
                <li>
                    <a href="/kas">
                        <span class="link-title">Kas</span>
                        <i class="mdi mdi-calculator  link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="/trx">
                        <span class="link-title">Transaksi</span>
                        <i class="mdi mdi-calculator  link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="#diskon" data-toggle="collapse" aria-extended="false">
                        <span class="link-title">Tambah Diskon</span>
                        <i class="mdi mdi-percent link-icon"></i>
                    </a>
                    <ul class="collapse navigation-submenu" id="diskon">
                        <li>
                            <a href="/diskon/Casing">Casing</a>
                        </li>
                        <li>
                            <a href="/diskon/Memori">Memori</a>
                        </li>
                        <li>
                            <a href="/diskon/Motherboard">Motherboard</a>
                        </li>
                        <li>
                            <a href="/diskon/Pendingin">Pendingin</a>
                        </li>
                        <li>
                            <a href="/diskon/Procesor">Processor</a>
                        </li>
                        <li>
                            <a href="/diskon/Psu">Power Supply</a>
                        </li>
                        <li>
                            <a href="/diskon/Ram">Ram</a>
                        </li>
                        <li>
                            <a href="/diskon/Vga">Vga</a>
                        </li>
                    </ul>

                </li>
            <?php } ?>
            <!-- Teknisi level -->
            <?php if (session()->get('level') == 'Teknisi') { ?>
                <li>
                    <a href="/service/teknisi">
                        <span class="link-title">Service</span>
                        <i class="mdi mdi-auto-fix  link-icon"></i>
                    </a>
                </li>
            <?php } ?>
            <li class="nav-category-divider">Akun</li>
            <li>
                <a href="/auth/logout">
                    <span class="link-title">Logout</span>
                    <i class="mdi mdi-logout link-icon"></i>
                </a>
            </li>
        </ul>

    </div>