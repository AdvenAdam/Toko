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
                    <a href="#komponen" data-toggle="collapse" aria-expanded="false">
                        <span class="link-title">CRUD Komponen</span>
                        <i class="mdi mdi-library-plus link-icon"></i>
                    </a>
                    <ul class="collapse navigation-submenu" id="komponen">
                        <li>
                            <a href="/motherboard">Motherboard</a>
                        </li>
                        <li>
                            <a href="/casing">Cassing</a>
                        </li>
                        <li>
                            <a href="/procesor">Processor</a>
                        </li>
                        <li>
                            <a href="/ram">Ram</a>
                        </li>
                        <li>
                            <a href="/vga">VGA</a>
                        </li>
                        <li>
                            <a href="/memori">Memory</a>
                        </li>
                        <li>
                            <a href="/psu">Power Supply</a>
                        </li>
                        <li>
                            <a href="/pendingin">Cooler</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#stok" data-toggle="collapse" aria-extended="false">
                        <span class="link-title">Re Stock Barang</span>
                        <i class="mdi mdi-clipboard-outline link-icon"></i>
                    </a>
                    <ul class="collapse navigation-submenu" id="stok">
                        <li>
                            <a href="/motherboard/tambah">Motherboard</a>
                        </li>
                        <li>
                            <a href="/casing/tambah">Cassing</a>
                        </li>
                        <li>
                            <a href="/procesor/tambah">Processor</a>
                        </li>
                        <li>
                            <a href="/ram/tambah">Ram</a>
                        </li>
                        <li>
                            <a href="/vga/tambah">VGA</a>
                        </li>
                        <li>
                            <a href="/memori/tambah">Memory</a>
                        </li>
                        <li>
                            <a href="/psu/tambah">Power Supply</a>
                        </li>
                        <li>
                            <a href="/pendingin/tambah">Cooler</a>
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
            <?php } ?>
            <!-- Teknisi level -->
            <?php if (session()->get('level') == 'Teknisi') { ?>
                <li>
                    <a href="/service">
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