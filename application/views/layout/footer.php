<?php
$konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');

?>

<footer id="wt-footer" class="wt-footer wt-haslayout">
    <div class="wt-footerholder wt-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="wt-footerlogohold">
                        <strong class="wt-logo"><a href="index.html"><img src="<?= base_url('assets/uploads/konfigurasi/' . $konfigurasi->logo) ?>" alt="company logo here"></a></strong>
                        <div class="wt-description">
                            <p><?= character_limiter($konfigurasi->tentang, '200') ?> <a href="">lanjut...</a></p>
                        </div>
                        <ul class="wt-socialiconssimple wt-socialiconfooter">
                            <li class="wt-facebook"><a target="blank" href="<?= $konfigurasi->fb ?>"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="wt-twitter"><a target="blank" href="<?= $konfigurasi->tw ?>"><i class="fab fa-twitter"></i></a></li>
                            <li class="wt-youtube"><a target="blank" href="<?= $konfigurasi->yt ?>"><i class="fab fa-youtube"></i></a></li>
                            <li class="wt-instagram"><a target="blank" href="<?= $konfigurasi->ig ?>"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="wt-footercol wt-widgetcompany">
                        <div class="wt-fwidgettitle">
                            <h3>Company</h3>
                        </div>
                        <ul class="wt-fwidgetcontent">
                            <li><a href="javascript:void(0);">About Us</a></li>
                            <li><a href="javascript:void(0);">How It Works</a></li>
                            <li><a href="javascript:void(0);">Careers</a></li>
                            <li><a href="javascript:void(0);">Terms &amp; Conditions</a></li>
                            <li><a href="javascript:void(0);">Trust &amp; Safety</a></li>
                            <li class="wt-viewmore"><a href="javascript:void(0);">+ View All</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="wt-footercol wt-widgetexplore">
                        <div class="wt-fwidgettitle">
                            <h3>Explore More</h3>
                        </div>
                        <ul class="wt-fwidgetcontent">
                            <li><a href="javascript:void(0);">Freelancers in USA</a></li>
                            <li><a href="javascript:void(0);">Freelancers in Canada</a></li>
                            <li><a href="javascript:void(0);">Freelancers in Australia</a></li>
                            <li><a href="javascript:void(0);">Jobs in USA</a></li>
                            <li><a href="javascript:void(0);">Find Jobs</a></li>
                            <li class="wt-viewmore"><a href="javascript:void(0);">+ View All</a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="wt-haslayout wt-joininfo">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 push-lg-1">
                    <div class="wt-companyinfo">
                        <span><a href="javascript:void(0);"><?= $konfigurasi->email ?></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wt-haslayout wt-footerbottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="wt-copyrights"><span>ScrollUp Studio</span> © 2018 All Rights Reserved.</p>
                    <nav class="wt-addnav">
                        <ul>
                            <li><a href="javascript:void(0);">Developer Team</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer End-->
</div>
<!--Content Wrapper End-->
</div>
<!--Wrapper End-->
<script src="<?= base_url('assets/')  ?>js/vendor/jquery-3.3.1.js"></script>
<script src="<?= base_url('assets/')  ?>js/vendor/jquery-library.js"></script>
<script src="<?= base_url('assets/')  ?>js/vendor/bootstrap.min.js"></script>
<script src="<?= base_url('assets/')  ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/')  ?>js/chosen.jquery.js"></script>
<script src="<?= base_url('assets/')  ?>js/scrollbar.min.js"></script>
<script src="<?= base_url('assets/')  ?>js/tilt.jquery.js"></script>
<script src="<?= base_url('assets/')  ?>js/prettyPhoto.js"></script>
<script src="<?= base_url('assets/')  ?>js/jquery-ui.js"></script>
<script src="<?= base_url('assets/')  ?>js/readmore.js"></script>
<script src="<?= base_url('assets/')  ?>js/countTo.js"></script>
<script src="<?= base_url('assets/')  ?>js/appear.js"></script>
<script src="<?= base_url('assets/')  ?>js/tipso.js"></script>
<script src="<?= base_url('assets/')  ?>js/jRate.js"></script>
<script src="<?= base_url('assets/')  ?>js/main.js"></script>
<script src="<?= base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<script src="<?= base_url('assets/') ?>js/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets/') ?>js/mySwal.js"></script>
</body>

</html>