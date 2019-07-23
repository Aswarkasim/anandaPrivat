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
                                            <img src="<?= base_url('assets/uploads/images/' . $tentor->foto); ?>" alt="img description">
                                            <div class="wt-userdropdown wt-online">
                                            </div>
                                        </figure>
                                        <div class="wt-title">
                                            <h4>Hubungi Saya</h4>

                                            <span>
                                                <i class="fa fa-envelope-o mr-2 mb-2" style="color: black;" aria-hidden="true"></i>
                                                <?= $tentor->email ?> <br>
                                                <i class="fa fa-phone mr-2 mb-2" style="color: green;" aria-hidden="true"></i><?= $tentor->no_telp ?><br>
                                                <i class="fa fa-facebook mr-2 mb-2" style="color: Blue;" aria-hidden="true"></i> <?= $tentor->fb ?> <br>
                                                <i class="fa fa-twitter mr-2 mb-2" style="color: lightblue;" aria-hidden="true"></i> @<?= $tentor->twitter ?> <br>
                                                <i class="fa fa-instagram mr-2 mb-2" style="color: red;" aria-hidden="true"></i> @<?= $tentor->ig ?>
                                                <br>
                                            </span>

                                        </div>
                                    </div>
                                    <section class="wt-haslayout wt-dbsectionspace wt-padding-add-top wt-moredetailsholder">
                                        <div class="row">
                                            <div class="col">
                                                <div class="wt-insightsitem wt-dashboardbox">
                                                    <div class="wt-title text-center">
                                                        <h3><i class="fa fa-money" aria-hidden="true"></i><br>
                                                            Rp. 200.000</h3>
                                                    </div>

                                                    <div class="wt-insightdetails">
                                                        <a href="#">Deposit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="wt-haslayout wt-dbsectionspace wt-padding-add-top wt-moredetailsholder">
                                        <div class="row">
                                            <div class="col">
                                                <a class="wt-btn mb-3 btn-block" href="<?= base_url('tentor/profil/edit/' . $tentor->id_tentor) ?>">
                                                    <i class="fa fa-edit"></i> Lengkapi Profil
                                                </a>
                                            </div>
                                        </div>
                                    </section>



                                </div>
                                <div class="col-12 col-lg-9">
                                    <div class="">
                                        <h2><?= $tentor->nama_lengkap ?></h2>
                                        <ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo mb-4">
                                            <li><span>
                                                    <?php
                                                    if ($tentor->gender == "Laki-laki") {
                                                        echo '<i class="fa fa-male mr-2" style="color: lightblue;" aria-hidden="true"></i> Pria';
                                                    } else if ($tentor->gender == "Perempuan") {
                                                        echo '<i class="fa fa-female mr-2" style="color: pink;" aria-hidden="true"></i> Perempuan';
                                                    }
                                                    ?>


                                                </span></li>
                                            <li><span>
                                                    <i class="fa fa-suitcase mr-2" aria-hidden="true"></i>
                                                    <?= $tentor->pekerjaan ?></span></li>
                                            <li><i class="fa fa-map-marker mr-2" style="color:red;" aria-hidden="true"></i>
                                                <?= $tentor->alamat ?></li>
                                        </ul>
                                        <div>
                                            <h4>Tentang Saya</h4>
                                            <p><?= $tentor->about ?></p>
                                        </div>
                                        <br>
                                        <ul class="wt-navarticletab nav navbar-nav">
                                            <li class="nav-item">
                                                <a class="active show" id="all-tab" data-toggle="tab" href="#kompetensi">List Kompetensi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a id="business-tab" data-toggle="tab" href="#siswabimbingan" class="">Siswa Bimbingan</a>
                                        </ul>
                                        <br>
                                        <div class="tab-content wt-haslayout">
                                            <!-- Kompetensi -->
                                            <?php include('kompetensi.php')  ?>
                                            <!-- end kompetensi -->

                                            <!-- Bimbingan -->
                                            <?php include('bimbingan.php')  ?>
                                            <!--end Bimbingan -->

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