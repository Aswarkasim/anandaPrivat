<section class="wt-haslayout">
    <div class="row">
        <div class="col-md-12">

            <div class="wt-haslayout wt-dbsectionspace">
                <div class="wt-dashboardbox wt-dashboardtabsholder">



                    <div class="wt">

                        <div class="container-fluid"><br><br>
                            <div class="row">
                                <div class="col-12 col-lg-3">

                                    <div class="wt-userprofile">
                                        <figure>
                                            <img src="<?php if ($siswa->foto == "") {
                                                            echo base_url('assets/uploads/images/default.jpg');
                                                        } else {
                                                            echo base_url('assets/uploads/images/' . $siswa->foto);
                                                        } ?>" alt="img description">
                                        </figure>
                                        <div class="wt-title">
                                            <h4>Hubungi Saya</h4>

                                            <span>
                                                <i class="fa fa-envelope-o mr-2 mb-2" style="color: black;" aria-hidden="true"></i>
                                                <?= $siswa->email ?> <br>
                                                <i class="fa fa-phone mr-2 mb-2" style="color: green;" aria-hidden="true"></i><?= $siswa->no_telp ?><br>
                                                <i class="fa fa-facebook mr-2 mb-2" style="color: Blue;" aria-hidden="true"></i> <?= $siswa->fb ?> <br>
                                                <i class="fa fa-twitter mr-2 mb-2" style="color: lightblue;" aria-hidden="true"></i> @<?= $siswa->twitter ?> <br>
                                                <i class="fa fa-instagram mr-2 mb-2" style="color: red;" aria-hidden="true"></i> @<?= $siswa->ig ?>
                                                <br>
                                            </span>

                                        </div>
                                    </div>
                                    <section class="wt-haslayout wt-dbsectionspace wt-padding-add-top wt-moredetailsholder">
                                        <div class="row">
                                            <div class="col">
                                                <a class="wt-btn mb-3 btn-block" href="<?= base_url('siswa/profil/edit/' . $siswa->id_siswa) ?>">
                                                    <i class="fa fa-edit"></i> Lengkapi Profil
                                                </a>
                                            </div>
                                        </div>
                                    </section>



                                </div>
                                <div class="col-12 col-lg-9">
                                    <div class="">
                                        <h2><?php

                                            if ($siswa->nama_lengkap == "") {
                                                echo $siswa->nama_user;
                                            } else {
                                                echo $siswa->nama_lengkap;
                                            }

                                            ?></h2>
                                        <ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo mb-4">
                                            <li><span>
                                                    <?php if ($siswa->gender == '') {
                                                        echo '<i class="fa fa-male mr-2" style="color: lightblue;" aria-hidden="true"></i><i class="fa fa-female mr-2" style="color: pink;" aria-hidden="true"></i> Jenis Kelamin';
                                                    } else if ($siswa->gender == 'Pria') {
                                                        echo '<i class="fa fa-male mr-2" style="color: lightblue;" aria-hidden="true"></i> Pria';
                                                    } else if ($siswa->gender == 'Wanita') {
                                                        echo '<i class="fa fa-female mr-2" style="color: pink;" aria-hidden="true"></i> Perempuan';
                                                    }
                                                    ?>

                                                </span></li>
                                            <li><span>
                                                    <i class="fa fa-suitcase mr-2" aria-hidden="true"></i>
                                                    <?php if ($siswa->pekerjaan == '') {
                                                        echo "Pekerjaan";
                                                    } else {
                                                        echo $siswa->pekerjaan;
                                                    } ?>
                                                </span>
                                            </li>
                                            <li><i class="fa fa-map-marker mr-2" style="color:red;" aria-hidden="true"></i>
                                                <?php if ($siswa->alamat == '') {
                                                    echo "Alamat";
                                                } else {
                                                    echo $siswa->alamat;
                                                } ?>
                                            </li>
                                        </ul>

                                        <br>
                                        <ul class="wt-navarticletab nav navbar-nav">
                                            <li class="nav-item">
                                                <a class="active show" id="all-tab" data-toggle="tab" href="#kursus">Kursus Yang Diikuti</a>
                                            </li>
                                            <li class="nav-item">
                                                <a id="business-tab" data-toggle="tab" href="#keranjang" class="">Keranjang</a>
                                        </ul>
                                        <br>
                                        <div class="tab-content wt-haslayout">
                                            <?php include('kursus_online.php') ?>
                                            <?php include('keranjang.php') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
</section>



</div>
<div class=" wt-innerbannerholder">

</div>