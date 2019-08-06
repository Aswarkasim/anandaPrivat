<section class="wt-haslayout wt-dbsectionspace">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
            <div class="wt-dashboardbox">
                <div class="wt-dashboardboxtitle">
                    <h2>Konfigurasi Banner</h2>
                </div>
                <div class="wt-dashboardboxcontent wt-packages">
                    <div class="container-fluid"><br><br>
                        <div class="row">

                            <div class="col-md-6">
                                <?php
                                if (isset($error)) {
                                    echo $error;
                                }
                                ?>
                                <div class="form-group">
                                    <div class="row pb-10">
                                        <div class="col-md-3 float-right">
                                            <label for=""><strong> Logo</strong></label>
                                        </div>
                                        <div class="col-md-8">
                                            <?php include('logo.php') ?>
                                            <img src="<?= base_url('assets/uploads/konfigurasi/' . $konfigurasi->logo) ?>" width="100px" alt=""><br>
                                        </div>
                                    </div><br>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3 float-right">
                                            <label for=""><strong> Banner Utama</strong></label>
                                        </div>
                                        <div class="col-md-8">
                                            <?php include('banner_main.php') ?>
                                            <img src="<?= base_url('assets/uploads/konfigurasi/' . $konfigurasi->banner_main) ?>" width="70%" alt="">
                                        </div>
                                    </div><br>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3 float-right">
                                            <label for=""><strong> Sub Banner</strong></label>
                                        </div>
                                        <div class="col-md-8">
                                            <?php include('sub_banner.php') ?>
                                            <img src="<?= base_url('assets/uploads/konfigurasi/' . $konfigurasi->sub_banner) ?>" width="70%" alt="">
                                        </div>
                                    </div><br>
                                    <hr>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3 float-right">
                                        <label for=""><strong> Banner Char 1</strong></label>
                                    </div>
                                    <div class="col-md-8">
                                        <?php include('char_1.php') ?>
                                        <img src="<?= base_url('assets/uploads/konfigurasi/' . $konfigurasi->banner_char_1) ?>" width="70%" alt="">
                                    </div>
                                </div><br>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3 float-right">
                                        <label for=""><strong> Banner Char 2</strong></label>
                                    </div>
                                    <div class="col-md-8">
                                        <?php include('char_2.php') ?>
                                        <img src="<?= base_url('assets/uploads/konfigurasi/' . $konfigurasi->banner_char_2) ?>" width="70%" alt="">
                                    </div>
                                </div><br>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3 float-right">
                                        <label for=""><strong> Banner Char 3</strong></label>
                                    </div>
                                    <div class="col-md-8">
                                        <?php include('char_3.php') ?>
                                        <img src="<?= base_url('assets/uploads/konfigurasi/' . $konfigurasi->banner_char_3) ?>" width="70%" alt="">
                                    </div>
                                </div><br>
                                <hr>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>