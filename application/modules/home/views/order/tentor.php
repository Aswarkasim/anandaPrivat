<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
    <div class="wt-haslayout wt-innerbannerholder">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                    <div class="wt-innerbannercontent">
                        <div class="wt-title">
                            <h2><?= $order->nama_kursus ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wt-haslayout wt-main-section">
        <div class="container">
            <div class="row justify-content-md-center mb-4">

                <div class="wt-replaybox">
                    <h2 class="text-center"><b>PILIH TENTOR ANDA</b></h2>
                    <ul class="wt-joinsteps">
                        <li class="wt-done-next"><a href="javascrip:void(0);"><i class="fa fa-check"></i></a></li>
                        <li class="wt-active"><a href="javascrip:void(0);">02</a></li>
                    </ul>
                </div>

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
                    </div>
                </div>

                <?php foreach ($tentor as $row) {  ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="wt-companysdetails">
                            <figure class="wt-companysimg">
                                <img src="<?php if ($row->banner == "") {
                                                echo base_url('assets/uploads/banners/default.jpg');
                                            } else {
                                                echo base_url('assets/uploads/banners/') . $row->banner;
                                            }  ?>" alt="img description">
                            </figure>
                            <div class="wt-companysinfo">
                                <figure><img src="<?php if ($row->foto == "") {
                                                        echo base_url('assets/uploads/images/default.jpg');
                                                    } else {
                                                        echo base_url('assets/uploads/images/') . $row->foto;
                                                    }  ?>" alt="img description"></figure>
                                <div class="wt-title">
                                    <?php if ($row->gender == "Pria") {
                                        echo '<i class="fa fa-male mr-1" style="color:dodgerblue" aria-hidden="true"></i> Pria';
                                    } else if ($row->gender == "Wanita") {
                                        echo '<i class="fa fa-female mr-1" style="color:dodgerblue" aria-hidden="true"></i> Wanita';
                                    } else {
                                        echo ' ';
                                    }
                                    ?>

                                    <h2><?= $row->nama_lengkap  ?></h2>
                                </div>
                                <ul class="wt-postarticlemeta">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span><?= $row->pekerjaan  ?></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('home/order/detail_tentor/' . $row->id_tentor) ?>" target="blank">
                                            <span>Lihat Profile</span>
                                        </a>
                                    </li><br>
                                </ul>
                            </div>
                            <div class="container mt-10">
                                <form action="<?= base_url('home/order/pilih_tentor/' . $row->id_tentor) ?>" method="post">
                                    <input type="hidden" name="id_order" value="<?= $order->id_order ?>">
                                    <?php
                                    if ($row->id_tentor == $order->id_tentor) {
                                        echo '<button class="btn btn-success btn-block"><i class="fa fa-check"></i> Terpilih</button>';
                                    } else {
                                        echo '<button class="btn btn-primary btn-block">Pilih</button>';
                                    }
                                    ?>

                                </form>
                            </div>
                            <br>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="pull-right">
                <a href="<?= base_url('home/order/finish/' . $order->id_order) ?>" class="wt-btn">Selesai</a>
            </div>
        </div>
    </div>
</main>