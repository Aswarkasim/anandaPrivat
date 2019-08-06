<?php
$id_user = $this->session->userdata('id_user');


$nama_user = "";
$email = "";
$siswa = "";
$foto = "";
$role = "";
if (($this->session->userdata('id_user')) != "") {

    $user = $this->Crud_model->listingOne('tbl_user', 'id_user', $id_user);
    $siswa = $this->Crud_model->listingOne('tbl_siswa', 'id_user', $id_user);
    $nama_user = $user->nama_user;
    $email = $user->email;
    $foto = $user->foto;
    $role = $user->role;
}

?>
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
                <img src="<?php if ($siswa->banner == "") {
                                echo base_url('assets/uploads/images/default.jpg');
                            } else {
                                echo base_url('assets/uploads/banners/' . $siswa->banner);
                            }  ?>" alt="img description">
            </figure>
            <div class="wt-companysinfo">
                <figure>
                    <img src="<?php if ($siswa->foto == "") {
                                    echo base_url('assets/uploads/images/default.jpg');
                                } else {
                                    echo base_url('assets/uploads/images/' . $siswa->foto);
                                }  ?>" width="100px" height="100px" alt="img description">
                </figure>
                <div class="wt-title">
                    <h2><a href="javascript:void(0);"> <?= $siswa->nama_lengkap ?></a></h2>
                </div>
            </div>
        </div>
        <nav id="wt-navdashboard" class="wt-navdashboard">
            <ul>
                <li>
                    <a href="<?= base_url('siswa/profil') ?>">
                        <i class="ti-user"></i>
                        <span>Profil</span>
                    </a>
                </li>
                <li class="<?php if (cek_notif_read('tbl_online', 'id_siswa')) {
                                echo "wt-notificationicon";
                            } ?>">
                    <a href="<?= base_url('siswa/kursus') ?>">
                        <i class="ti-write"></i>
                        <span>Kursus</span>
                    </a>
                </li>
                <li class="<?php if (cek_notif_read('tbl_order', 'id_siswa')) {
                                echo "wt-notificationicon";
                            } ?>">
                    <a href="<?= base_url('siswa/keranjang') ?>">
                        <i class="ti-bag"></i>
                        <span>Keranjang</span>
                    </a>
                </li>
                <?php
                $this->load->model('siswa/Siswa_model', 'SM');
                $id_siswa = $this->session->userdata('id_user');
                $tagihan = $this->SM->listingTagihan('id_siswa', $id_siswa)->result();
                ?>

                <?php

                //$cek = $this->Crud_model->cek('tbl_notif', 'id_user', $id_user, 'is_read', '0');

                ?>

                <li class="<?php if (cek_notif_read('tbl_notif', 'id_user')) {
                                echo "wt-notificationicon";
                            } ?>">
                    <a href="<?= base_url('siswa/notif') ?>">
                        <i class="ti-envelope"></i>
                        <span>Notifikasi</span>
                    </a>
                </li>
                <li class="menu-item-has-children">
                    <a href="javascript:void(0);">
                        <i class="ti-settings"></i>
                        <span>Pengaturan Akun</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <hr><a href="<?= base_url('siswa/profil/edit/' . $id_user) ?>">General</a></li>
                        <li>
                        <li>
                            <hr><a href="<?= base_url('siswa/alamat') ?>">Alamat</a></li>
                        <li>
                            <hr><a href="<?= base_url('siswa/profil/sampul') ?>">Sampul</a></li>
                        <li>
                            <hr><a href="<?= base_url('siswa/profil/ubahPassword') ?>">Ubah Password</a></li>
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