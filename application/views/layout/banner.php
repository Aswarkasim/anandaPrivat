<?php
$konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');

?>
<style>
    .wt-bannerholder {
        background-image: url(<?= base_url('assets/uploads/konfigurasi/' . $konfigurasi->banner_main) ?>);
        background-size: cover;
        background-repeat: no-repeat;
        position: relative;
    }
</style>

<!--Home Banner Start-->
<div class="wt-haslayout wt-bannerholder">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                <div class="wt-bannerimages">
                    <figure class="wt-bannermanimg" data-tilt>
                        <img src="<?= base_url('assets/uploads/konfigurasi/' . $konfigurasi->banner_char_1) ?>" alt="img description">
                        <img src="<?= base_url('assets/uploads/konfigurasi/' . $konfigurasi->banner_char_2) ?>" class="wt-bannermanimgone" alt="img description">
                        <img src="<?= base_url('assets/uploads/konfigurasi/' . $konfigurasi->banner_char_3) ?>" class="wt-bannermanimgtwo" alt="img description">
                    </figure>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                <div class="wt-bannercontent">
                    <div class="wt-bannerhead">
                        <div class="wt-title">
                            <h1><?= $konfigurasi->judul_utama ?></h1>
                        </div>
                        <div class="wt-description">
                            <p><?= $konfigurasi->deskripsi ?></p>
                        </div>
                    </div>
                    <!-- <form class="wt-formtheme wt-formbanner">
                        <fieldset>
                            <div class="form-group">
                                <input type="text" name="fullname" class="form-control" placeholder="I’m looking for">
                                <div class="wt-formoptions">
                                    <div class="wt-dropdown">
                                        <span>In: <em class="selected-search-type">Freelancers </em><i class="lnr lnr-chevron-down"></i></span>
                                    </div>
                                    <div class="wt-radioholder">
                                        <span class="wt-radio">
                                            <input id="wt-freelancers" data-title="Freelancers" type="radio" name="searchtype" value="freelancer" checked>
                                            <label for="wt-freelancers">Freelancers</label>
                                        </span>
                                        <span class="wt-radio">
                                            <input id="wt-jobs" data-title="Jobs" type="radio" name="searchtype" value="job">
                                            <label for="wt-jobs">Jobs</label>
                                        </span>
                                        <span class="wt-radio">
                                            <input id="wt-company" data-title="Companies" type="radio" name="searchtype" value="job">
                                            <label for="wt-company">Companies</label>
                                        </span>
                                    </div>
                                    <a href="userlisting.html" class="wt-searchbtn"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                            </div>
                        </fieldset>
                    </form> -->
                    <div class="wt-videoholder">
                        <div class="wt-videoshow">
                            <a data-rel="prettyPhoto[video]" href="<?= $konfigurasi->link_video ?>"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="wt-videocontent">
                            <span>Bagaimana saya memulai?<em>Simak video ini.</em></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Home Banner End-->