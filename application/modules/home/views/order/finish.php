<!-- Banner -->
<div class="wt-haslayout wt-innerbannerholder">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                <div class="wt-innerbannercontent">
                    <div class="wt-title">
                        <h2>Order Detail</h2>
                    </div>
                    <ol class="wt-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="javascript:void(0);">Order</a></li>
                        <li class="wt-active">Order Detail</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner -->

<!-- Main Content -->
<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
    <div class="wt-haslayout wt-main-section">
        <!-- User Listing Start-->
        <div class="container">
            <div class="row">
                <div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 float-left">
                        <div class="wt-proposalholder">
                            <div class="wt-proposalhead">
                                <h2><?= $order->nama_kursus ?></h2>
                                <ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
                                    <li><span><i class="fas fa-archive"></i> <?= $order->nama_paket ?></span></li>
                                    <li><span><i class="fas fa-map-marker-alt"></i> Lokasi</span></li>
                                    <li><span><i class="far fa-folder"></i> <?= $order->nama_kategori ?></span></li>
                                    <li><span><i class="far fa-clock"></i> <?= $order->nama_waktu ?></span></li>
                                </ul>
                            </div>
                            <div class="wt-btnarea">
                                <a href="<?= base_url('siswa/keranjang') ?>" class="wt-btn">
                                    <i class="fa fa-shopping-cart"></i> Lihat Keranjang
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
                        <div class="wt-projectdetail-holder">
                            <div class="wt-projectdetail">
                                <div class="wt-title">
                                    <h3>Detail Pembayaran</h3>
                                </div>
                                <div class="wt-proposalamount accordion">
                                    <ul class="wt-totalamount collapse show" id="collapseOne" aria-labelledby="headingOne">
                                        <li>
                                            <h3>( <i class="fas fa-archive"></i> ) <em>- <?= $order->nama_paket ?></em></h3>
                                            <span><strong><?= $order->hari ?></strong><i class="fa fa-exclamation-circle template-content tipso_style" data-tipso="Plus Member"></i></span>
                                        </li>
                                        <li>
                                            <h3>(<i class="far fa-clock"></i> ) <em>- <?= $order->nama_waktu ?></em></h3>
                                            <span><strong><?= $order->awal ?> - <?= $order->akhir ?></strong><i class="fa fa-exclamation-circle template-content tipso_style" data-tipso="Plus Member"></i></span>
                                        </li>
                                        <li>
                                            <h3>( <i class="fas fa-user"></i> ) <em>- <?= $order->nama_lengkap ?></em></h3>
                                            <span><strong> Belum ada data Tentor Matematika</strong><i class="fa fa-exclamation-circle template-content tipso_style" data-tipso="Plus Member"></i></span>
                                        </li>
                                        <li>
                                            <h3>( <i class="fas fa-money-bill-wave-alt">Rp</i> ) <em>- <?= $order->total ?>,-</em></h3>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
                        <aside id="wt-sidebar" class="wt-sidebar">
                            <div class="wt-widget wt-companysinfo-jobsingle">
                                <div class="wt-companysdetails">
                                    <figure class="wt-companysimg">
                                        <img src="<?= base_url('assets/uploads/banners/' . $order->banner) ?>" alt="img description">
                                    </figure>
                                    <div class="wt-companysinfo">
                                        <figure><img src="<?= base_url('assets/uploads/images/' . $order->foto) ?>" alt="img description"></figure>
                                        <div class="wt-title">
                                            <h2><?= $order->nama_lengkap  ?></h2>
                                        </div>
                                        <ul class="wt-postarticlemeta">
                                            <li>
                                                <a href="" target="blank" class="wt-btn">
                                                    Lihat Profil
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
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
<!-- Main Content -->