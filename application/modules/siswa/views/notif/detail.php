<main id="wt-main" class="">
    <!--Sidebar Start-->

    <div class="col-xs-12">
        <div class="wt-haslayout wt-dbsectionspace">
            <div class="wt-dashboardbox wt-dashboardtabsholder">
                <div class="wt-dashboardboxtitle">
                    <h2>Pesan</h2>
                </div>
                <div style="width: 100%;" class="wt-tabscontent tab-content">
                    <div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">
                        <div class="wt-skills">
                            <div class="wt-tabscontenttitle mb-0">
                                <h2>Dari Admin</h2>
                            </div>
                            <div class="wt-skillscontent-holder">
                                <div class="wt-myskills mt-0">
                                    <div class="col-12">
                                        <div class="wt-haslayout wt-dbsectionspace">
                                            <div class="wt-dashboardbox ">
                                                <div class="wt-dashboardboxtitle wt-yeartag">
                                                    <h2><?= $notif->judul ?></h2>
                                                </div>
                                                <div class="wt-dashboardboxcontent">
                                                    <?= $notif->isi ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group wt-btnarea mt-4">
                                    <a href="<?= base_url() ?>siswa/notif" class="wt-btn">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>