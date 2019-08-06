<!--Sidebar Start-->
<div id="wt-sidebarwrapper" class="wt-sidebarwrapper">
    <div id="wt-btnmenutoggle" class="wt-btnmenutoggle">
        <span class="menu-icon">
            <em></em>
            <em></em>
            <em></em>
        </span>
    </div>
    <div id="wt-verticalscrollbar" class="wt-verticalscrollbar">
        <div class="wt-companysdetails wt-usersidebar">
            <figure class="wt-companysimg">
                <img src="<?= base_url('assets/')  ?>images/sidebar/img-01.jpg" alt="img description">
            </figure>
            <div class="wt-companysinfo">
                <figure><img src="<?= base_url('assets/')  ?>images/sidebar/img-02.jpg" alt="img description"></figure>
                <div class="wt-title">
                    <h2><a href="javascript:void(0);"> Louanne Mattioli</a></h2>
                    <span>Amento Tech</span>
                </div>
            </div>
        </div>
        <nav id="wt-navdashboard" class="wt-navdashboard">
            <ul>
                <li>
                    <a href="<?= base_url('admin/profil') ?>">
                        <i class="ti-spray"></i>
                        <span>Profil</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/online') ?>">
                        <i class="ti-spray"></i>
                        <span>Kursus Online</span>
                    </a>
                </li>

                <li class="menu-item-has-children">
                    <a href="javascript:void(0);">
                        <i class="fa fa-money"></i>
                        <span>Pembayaran</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <hr><a href="<?= base_url('admin/pembayaran') ?>">Manajemen Pembayaran</a></li>
                        <li>
                            <hr><a href="<?= base_url('admin/pembayaran/masuk') ?>">Masuk</a></li>
                        <li>
                            <hr><a href="<?= base_url('admin/pembayaran/selesai') ?>">Selesai</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="javascript:void(0);">
                        <i class="fa fa-money"></i>
                        <span>Poin</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <hr><a href="<?= base_url('admin/poin') ?>">Tambah Poin</a></li>
                        <li>
                            <hr><a href="<?= base_url('admin/poin/pencairan_poin') ?>">Pencairan</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children">
                    <a href="javascript:void(0);">
                        <i class="fa fa-money"></i>
                        <span>Kompetensi</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <hr><a href="<?= base_url('admin/kompetensi') ?>">Manajemen Kompetensi</a></li>
                        <li>
                            <hr><a href="<?= base_url('admin/kompetensi/masuk') ?>">Masuk</a></li>
                        <li>
                            <hr><a href="<?= base_url('admin/kompetensi/selesai') ?>">Selesai</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children">
                    <a href="javascript:void(0);">
                        <i class="ti-harddrives"></i>
                        <span>Kursus</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <hr><a href="<?= base_url('admin/kursus') ?>">Manajemen Kursus</a></li>
                        <li>
                            <hr><a href="<?= base_url('admin/kategori') ?>">Kategori</a></li>
                        <li>
                            <hr><a href="<?= base_url('admin/jenjang') ?>">Jenjang</a></li>
                        <li>
                            <hr><a href="<?= base_url('admin/tingkat') ?>">Tingkat</a></li>
                        <li>
                            <hr><a href="<?= base_url('admin/paket') ?>">Paket</a></li>
                        <li>
                            <hr><a href="<?= base_url('admin/waktu') ?>">Waktu</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children">
                    <a href="javascript:void(0);">
                        <i class="ti-harddrives"></i>
                        <span>Alamat</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <hr><a href="<?= base_url('admin/alamat') ?>">Manajemen Alamat</a></li>
                        <li>
                            <hr><a href="<?= base_url('admin/provinsi') ?>">Provinsi</a></li>
                        <li>
                            <hr><a href="<?= base_url('admin/kabupaten') ?>">Kabupaten</a></li>
                        <li>
                            <hr><a href="<?= base_url('admin/kecamatan') ?>">Kecamatan</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="javascript:void(0);">
                        <i class="ti-harddrives"></i>
                        <span>Zonasi</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <hr><a href="<?= base_url('admin/zonasi') ?>">Manajemen Zonasi</a></li>
                        <li>
                    </ul>
                </li>
                <li class="wt-notificationicon menu-item-has-children">
                    <a href="javascript:void(0);">
                        <i class="ti-pencil-alt"></i>
                        <span>Pesan</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <hr><a href="<?= base_url('admin/pesan') ?>">Kirim Pesan</a></li>
                        <li>
                            <hr><a href="dashboard-messages2.html">Messages V 2</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children">
                    <a href="javascript:void(0);">
                        <i class="fa fa-user"></i>
                        <span>User</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <hr><a href="<?= base_url('admin/user') ?>">Manajemen User</a></li>
                        <li>
                            <hr><a href="<?= base_url('admin/user/admin') ?>">Admin</a></li>
                        <li>
                            <hr><a href="<?= base_url('admin/user/tentor') ?>">Tentor</a></li>
                        <li>
                            <hr><a href="<?= base_url('admin/user/siswa') ?>">Siswa</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="javascript:void(0);">
                        <i class="ti-settings"></i>
                        <span>Konfigurasi</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <hr><a href="<?= base_url('admin/konfigurasi') ?>">General</a></li>
                        <li>
                            <hr><a href="<?= base_url('admin/konfigurasi/gambar') ?>">Gambar</a></li>
                    </ul>
                </li>

            </ul>
        </nav>
        <div class="wt-navdashboard-footer">
            <span>Worktern. © 2019 All Rights Reserved.</span>
        </div>
    </div>
</div>
<!--Sidebar Start-->