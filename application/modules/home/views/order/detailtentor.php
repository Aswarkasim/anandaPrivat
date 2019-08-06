<!-- <div class="preloader-outer">
    <div class="loader"></div>
</div> -->
<!-- Preloader End -->
<!-- Wrapper Start -->
<div id="wt-wrapper" class="wt-wrapper wt-haslayout">
    <!-- Content Wrapper Start -->
    <div class="wt-contentwrapper">
        <!--Inner Home Banner Start-->
        <div class="wt-haslayout wt-innerbannerholder">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                        <div class="wt-innerbannercontent">
                            <div class="wt-title">
                                <h2><?= $tentor->nama_lengkap ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Inner Home End-->
        <!--Main Start-->
        <main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
            <div class="wt-haslayout wt-main-section">
                <!-- User Listing Start-->
                <div class="wt-haslayout">
                    <div class="container">
                        <div class="row">
                            <div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">

                                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
                                    <aside id="wt-sidebar" class="wt-sidebar">
                                        <div class="wt-proposalsr wt-proposalsrvtwo">
                                            <figure class="wt-companysimg">
                                                <img src="<?php if ($tentor->banner == "") {
                                                                echo base_url('assets/uploads/banners/default.jpg');
                                                            } else {
                                                                echo base_url('assets/uploads/banners/') . $tentor->banner;
                                                            }  ?>" alt="img description">
                                            </figure>
                                            <div class="wt-widgetcontent wt-companysinfo">
                                                <figure><img src="<?php if ($tentor->foto == "") {
                                                                        echo base_url('assets/uploads/images/default.jpg');
                                                                    } else {
                                                                        echo base_url('assets/uploads/images/') . $tentor->foto;
                                                                    }  ?>" alt="img description"></figure>
                                                <div class="wt-title">
                                                    <div class="wt-title">
                                                        <?php if ($tentor->gender == "Pria") {
                                                            echo '<i class="fa fa-male mr-1" style="color:dodgerblue" aria-hidden="true"></i> Pria';
                                                        } else if ($tentor->gender == "Wanita") {
                                                            echo '<i class="fa fa-female mr-1" style="color:dodgerblue" aria-hidden="true"></i> Wanita';
                                                        } else {
                                                            echo ' ';
                                                        }
                                                        ?>
                                                        || <i class="fa fa-briefcase"></i> Pekerjaan : <?= $tentor->pekerjaan ?>
                                                        <h2><?= $tentor->nama_lengkap  ?></h2>
                                                    </div>
                                                    <h2>Sultan Dirga Pratama</h2>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="wt-widget wt-sharejob">
                                            <div class="wt-widgettitle text-center">
                                                <h2>Hubungi Saya</h2>
                                            </div>
                                            <div class="wt-widgetcontent text-center">
                                                <ul class="wt-socialiconssimple">
                                                    <li class="wt-facebook"><a href=""><i class="fab fa-facebook-f"></i><?= $tentor->fb ?></a></li>
                                                    <li class="wt-twitter"><a href=""><i class="fab fa-twitter"></i><?= $tentor->twitter ?></a></li>
                                                    <li class="wt-googleplus"><a href=""> <i class="fa fa-instagram" aria-hidden="true"></i> <?= $tentor->ig ?></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
                                    <div class="wt-userlistingholder wt-haslayout">
                                        <div class="wt-comcontent">
                                            <div class="wt-title">
                                                <h3>Tentang “<?= $tentor->nama_lengkap ?>”</h3>
                                            </div>
                                            <div class="wt-description">
                                                <p><?= $tentor->about ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Listing End-->
            </div>
        </main>
        <!--Main End-->
    </div>
    <!--Content Wrapper End-->
</div>