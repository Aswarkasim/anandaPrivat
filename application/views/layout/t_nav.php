<?php

$nama_user = "";
$email = "";
$foto = "";
$role = "";
$banner = "";
if (($this->session->userdata('id_user')) != "") {
    $id_user = $this->session->userdata('id_user');
    $user = $this->Crud_model->listingOne('tbl_user', 'id_user', $id_user);
    $tentor = $this->Crud_model->listingOne('tbl_tentor', 'id_tentor', $id_user);
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
                <img src="<?php if ($tentor->banner == "") {
                                echo base_url('assets/uploads/banners/default.jpg');
                            } else {
                                base_url('assets/uploads/banners/' . $tentor->banner);
                            } ?>" alt="img description">
            </figure>
            <div class="wt-companysinfo">
                <figure><img src="<?php if ($tentor->foto == "") {
                                        echo base_url('assets/uploads/banners/default.jpg');
                                    } else {
                                        echo base_url('assets/uploads/images/' . $tentor->foto);
                                    } ?>" alt="img description"></figure>
                <div class="wt-title">
                    <h2><a href="javascript:void(0);"> <?= $nama_user ?></a></h2>
                    <span><?= $role ?></span>
                </div>
                <div class="wt-btnarea"><a href="<?= base_url() ?>" class="wt-btn">Home</a></div>
            </div>
        </div>
        <nav id="wt-navdashboard" class="wt-navdashboard">
            <ul>
                <li>
                    <a href="<?= base_url('tentor/profil') ?>">
                        <i class="ti-user"></i>
                        <span>Profil</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('tentor/kompetensi') ?>">
                        <i class="ti-panel"></i>
                        <span>Kompetensi</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('tentor/bimbingan') ?>">
                        <i class="ti-ruler-pencil"></i>
                        <span>Bimbingan</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('tentor/poin') ?>">
                        <i class="ti-widget"></i>
                        <span>Poin</span>
                    </a>
                </li>

                <li class="menu-item-has-children">
                    <a href="javascript:void(0);">
                        <i class="ti-harddrives"></i>
                        <span>Pengaturan Akun</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <hr><a href="<?= base_url('tentor/profil/edit/' . $id_user) ?>">General</a></li>
                        <li>
                        <li>
                            <hr><a href="<?= base_url('tentor/alamat') ?>">Alamat</a></li>
                        <li>
                            <hr><a href="<?= base_url('tentor/profil/sampul') ?>">Sampul</a></li>
                        <li>
                            <hr><a href="<?= base_url('tentor/profil/ubahPassword') ?>">Ubah Password</a></li>
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