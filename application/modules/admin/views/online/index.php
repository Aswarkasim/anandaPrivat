<section class="wt-haslayout">
    <div class="row">
        <div class="col-md-12">

            <div class="wt-haslayout wt-dbsectionspace">
                <div class="wt-dashboardbox wt-dashboardtabsholder">



                    <div class="wt">

                        <div class="container-fluid"><br><br>
                            <table class="table table-hover DataTables">
                                <thead class="text-white" style="background-color:#ff5851">
                                    <tr>
                                        <th width="50px">No</th>
                                        <th>KELAS</th>
                                        <th width="100px">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1;
                                    foreach ($online as $row) { ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td>
                                                <div class="wt-managejobcontent mt-4">
                                                    <div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
                                                        <!-- <span class="wt-featuredtag"><img src="<?= base_url('assets/images/'); ?>featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span> -->
                                                        <div class="wt-userlistingcontent wt-userlistingcontentvtwo">

                                                            <div class="wt-contenthead">
                                                                <div class="wt-title">
                                                                    <h2><?= $row->nama_kursus . ' ' . $row->nama_jenjang . ' ' . $row->nama_tingkat ?></h2>
                                                                </div>
                                                                <ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
                                                                    <li><span class="wt-dashboraddoller"><i class="ti-bag"></i> <?= $row->nama_paket ?></span></li>
                                                                    <li><span> <i class="fa fa-handshake-o" aria-hidden="true"></i> <?= $row->jumlah_pertemuan ?> x pertemuan</span></li>
                                                                    <li><span class="wt-dashboradclock"><i class="far fa-clock"></i> <?= $row->hari ?></span></li>
                                                                    <li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="ti-timer" aria-hidden="true"></i> <?= $row->awal . ' - ' . $row->akhir ?></a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="wt-rightarea">
                                                                <div class="wt-btnarea">
                                                                    <span></span>
                                                                    <a href="<?= base_url('admin/online/detail/' . $row->id_online) ?>" class="wt-btn">Lihat</a>
                                                                </div>
                                                                <div class="wt-hireduserstatus">
                                                                    <h4 style="color: #349AE0">
                                                                        <?php echo $row->is_done ?>
                                                                    </h4><span><?= $row->nama_lengkap ?></span>
                                                                    <ul class="wt-hireduserimgs">
                                                                        <li>
                                                                            <figure><img src="<?= base_url('assets/uploads/images/' . $row->foto); ?>" alt="img description"></figure>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>
                                            </td>
                                            <td></td>
                                        </tr>

                                        <?php $no++;
                                    } ?>



                                </tbody>
                            </table>

                            <br><br>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>