<main id="wt-main" class="">
    <div class="">
        <!-- User Listing Start-->
        <div class="container-fluid">
            <div class="row">
                <div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
                    <div class="col-12">
                        <div class="row">
                            <div class="wt-proposalholder">
                                <div class="wt-proposalhead">
                                    <h2><?= $online->nama_kursus ?></h2>
                                    <ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
                                        <li><span><i class="fa fa-graduation-cap" aria-hidden="true"> </i><?= $online->nama_lengkap ?></span></li>
                                        <li><span><i class="fa fa-graduation-cap" aria-hidden="true"> </i><?= $online->alamat ?></span></li>
                                    </ul>
                                </div>
                                <div class="wt-btnarea text-center">
                                    <a href="#" class="wt-btn mt-2">Download Absen</a>
                                    <a href="<?= base_url() ?>tentor/bimbingan" class="wt-btn mt-2">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
                        <div class="row">
                            <div class="wt-proposalholder">
                                <div class="wt-proposalhead">
                                    <h3>Upload Absen</h3>

                                </div>
                                <div class="wt-description mt-3">
                                    <p class="text-center">Setelah Kursus Selesai, Silahkan Upload Bukti Absen Di Sini</p>

                                    <fieldset class="" style="border:solid 1px white">
                                        <div class="form-group form-group-label">
                                            <div class="wt-labelgroup">
                                                <label for="filep">
                                                    <span class="wt-btn">Select Files</span>
                                                    <input type="file" name="file" id="filep">
                                                </label>
                                                <span>Drop files here to upload</span>
                                                <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
                                            </div>
                                        </div>

                                    </fieldset>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="row">
                                    <div class="wt-companysdetails">
                                        <figure class="wt-companysimg">
                                            <img src="<?= base_url() ?>assets/images/company/img-01.jpg" alt="img description">
                                        </figure>
                                        <div class="wt-companysinfo">
                                            <figure><img src="<?= base_url() ?>assets/images/company/img-01.png" alt="img description"></figure>
                                            <div class="wt-title">
                                                <h2><?= $online->nama_lengkap ?></h2>
                                            </div>
                                            <ul class="wt-postarticlemeta">
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <span><?= $online->gender ?></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <span>Lihat Profile</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <h4><i class="fa fa-check-circle text-success ml-2 float-right"></i></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="wt-companysdetails" style="background-color:#ff5851">
                                    <div class="wt-companysinfo" style="border-left:solid 5px lightgreen">
                                        <br><br><br>
                                        <div class="wt-title pr-4">
                                            <h2 class="text-white"><b><?= $online->nama_paket ?></b><i class="fa fa-check-circle text-white ml-2 float-left"></i></h2>
                                        </div>
                                        <ul class="wt-postarticlemeta">
                                            <li>
                                                <i class=" lnr lnr-clock text-white"></i>
                                                <span class="text-white"><?= $online->hari ?></span>
                                            </li>
                                            <li>
                                                <span class="text-white"><?= $online->jumlah_pertemuan ?>x pertemuan</span>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="wt-companysdetails" style="background-color:#ff5851">

                                    <div class="wt-companysinfo" style="border-left:solid 5px lightgreen">
                                        <br><br><br>
                                        <div class="wt-title pr-4">
                                            <h2 class="text-white"><b><?= $online->nama_waktu ?></b><i class="fa fa-check-circle text-white ml-2 float-left"></i></h2>
                                        </div>
                                        <ul class="wt-postarticlemeta">
                                            <li>
                                                <i class=" lnr lnr-clock text-white"></i>
                                                <span class="text-white"><?= $online->awal ?> - <?= $online->akhir ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="wt-companysdetails" style="background-color:#ff5851">

                                    <div class="wt-companysinfo" style="border-left:solid 5px lightgreen">
                                        <br><br><br>
                                        <ul class="wt-postarticlemeta">
                                            <div class="wt-title pr-4">
                                                <h2 class="text-white"><b><?= $online->nama_jenjang ?></b><i class="fa fa-check-circle text-white ml-2 float-left"></i></h2>
                                            </div>
                                            <li>
                                                <span class=" text-white"><b><?= $online->nama_tingkat ?><br></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
                        <div class="wt-widget wt-reportjob text-center">
                            <div class="wt-widgettitle">
                                <h2>Kirim keluhan Anda ke Admin</h2>
                            </div>
                            <div class="wt-widgetcontent">
                                <form class="wt-formtheme wt-formreport">
                                    <fieldset>
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Pesan . . ."></textarea>
                                        </div>
                                        <div class="form-group mt-2">
                                            <a href="" class="wt-btn">Kirim Pesan</a>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- User Listing End-->
    </div>
</main>