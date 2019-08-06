<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
    <div class="wt-haslayout wt-innerbannerholder">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                    <div class="wt-innerbannercontent">
                        <div class="wt-title">
                            <h2><?= $kursus->nama_kursus ?></h2>
                        </div>
                        <ol class="wt-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="wt-active">Join Now</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="wt-haslayout wt-main-section">
        <!-- User Listing Start-->
        <div class="container">
            <div class="row">
                <div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">

                    <?php

                    echo form_open('home/order/buat_order/' . $kursus->id_kursus);
                    ?>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-right">

                        <div class="wt-projectdetail-holder" style="border-bottom: 3px solid red">

                            <?php echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i>', '</div>'); ?>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <label for="" class="pt-3">
                                            <h4>PAKET</h4>
                                        </label>
                                    </div>
                                    <div class="col-9 mx-auto">
                                        <span class="wt-select">
                                            <select name="id_paket">
                                                <option value="none">--- Pilih Paket ---</option>
                                                <?php foreach ($paket as $row) { ?>
                                                    <option value="<?= $row->id_paket ?>"><?= $row->nama_paket ?></option>
                                                <?php  } ?>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <label for="" class="pt-3">
                                            <h4>WAKTU</h4>
                                        </label>
                                    </div>
                                    <div class="col-9 mx-auto">
                                        <span class="wt-select">
                                            <select name="id_waktu">
                                                <option value="none">--- Pilih Waktu ---</option>
                                                <?php foreach ($waktu as $row) { ?>
                                                    <option value="<?= $row->id_waktu ?>"><?= $row->nama_waktu ?></option>
                                                <?php  } ?>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <label for="" class="pt-3">
                                            <h4>JENJANG</h4>
                                        </label>
                                    </div>
                                    <div class="col-9 mx-auto">
                                        <span class="wt-select">
                                            <select name="id_jenjang">
                                                <option value="none">--- Pilih Paket ---</option>
                                                <?php foreach ($jenjang as $row) { ?>
                                                    <option value="<?= $row->id_jenjang ?>"><?= $row->nama_jenjang ?></option>
                                                <?php  } ?>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <label for="" class="pt-3">
                                            <h4>TINGKAT</h4>
                                        </label>
                                    </div>
                                    <div class="col-9 mx-auto">
                                        <span class="wt-select">
                                            <select name="id_tingkat">
                                                <option value="none">--- Pilih Paket ---</option>
                                                <?php foreach ($tingkat as $row) { ?>
                                                    <option value="<?= $row->id_tingkat ?>"><?= $row->nama_tingkat ?></option>
                                                <?php  } ?>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="wt-btnarea text-center">
                                <button class="wt-btn" type="submit"><i class="fa fa-shopping-cart mr-2"></i> order</button>
                            </div>
                        </div>
                    </div>

                    <?php echo form_close() ?>

                    <!-- Side -->
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left text-center">
                        <aside id="wt-sidebar" class="wt-sidebar">
                            <div class="wt-proposalsr" style="border-left: 3px solid red">
                                <div class="tg-authorcodescan">
                                    <h2><?= $kursus->nama_kursus ?></h2>
                                    <ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
                                        <li><span><i class="fa fa-list mr-2"></i><?= $kursus->nama_kategori ?></span></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>


                        <aside id="wt-sidebar" class="wt-sidebar">
                            <div class="wt-proposalsr" style="border-left: 3px solid red">
                                <div class="tg-authorcodescan">
                                    <h3> <i class="fa fa-money"> </i> <br>RP. <?= nominal($kursus->harga) ?></h3>
                                    <span>Biaya Kursus</span>
                                </div>
                            </div>
                        </aside>

                        <!-- <aside id="wt-sidebar" class="wt-sidebar">
                            <div class="wt-proposalsr">
                                <h4 class="mt-3">KETERANGAN</h4>
                                <ul class="wt-navarticletab wt-navarticletabvtwo nav navbar-nav mb-3">
                                    <li class="nav-item">
                                        <a class="active" id="all-tab" data-toggle="tab" href="#paket11">PAKET 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="business-tab" data-toggle="tab" href="#paket22">PAKET 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="trading-tab" data-toggle="tab" href="#paket33">PAKET 3</a>
                                    </li>
                                </ul>
                                <div class="tab-content wt-haslayout">
                                    <div class="wt-contentarticle tab-pane active fade show" id="paket11">
                                        <p>Senin, Rabu, & Jumat</p>
                                    </div>
                                    <div class="wt-contentarticle tab-pane fade" id="paket22">
                                        <p>Selasa, Kamis, & Sabtu</p>
                                    </div>
                                    <div class="wt-contentarticle tab-pane fade" id="paket33">
                                        <p>Sabtu & Minggu</p>
                                    </div>
                                </div>
                            </div>
                        </aside> -->

                        <aside id="wt-sidebar" class="wt-sidebar">
                            <div class="wt-proposalsr" style="border-left: 3px solid red">
                                <h4 class="mt-3">KETERANGAN</h4>
                                <ul class="wt-accordionhold accordion">
                                    <?php foreach ($paket as $row) { ?>
                                        <li>
                                            <div class="wt-accordiontitle collapsed" id="headingOne" data-toggle="collapse" data-target="#<?= $row->id_paket ?>" aria-expanded="false">
                                                <span class="text-danger" value="<?= $row->id_paket ?>"><?= $row->nama_paket ?></span>
                                            </div>
                                            <div class="wt-accordiondetails collapse" id="<?= $row->id_paket ?>" aria-labelledby="headingOne" style="border-right: 3px solid red;  background-color: white">
                                                <p><?= $row->hari ?> <br><?= $row->jumlah_pertemuan ?>x pertemuan</p>
                                            </div>
                                        </li>
                                    <?php  } ?>
                                </ul>
                            </div>
                        </aside>

                    </div>

                    <!-- End Side -->
                </div>
            </div>
        </div>
        <!-- User Listing End-->
    </div>
</main>