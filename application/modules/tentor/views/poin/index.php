<div class="col-xs-12 mx-auto">
    <div class="wt-haslayout wt-dbsectionspace">
        <div class="wt-dashboardbox wt-dashboardtabsholder">
            <div class="wt-dashboardboxtitle">
                <h2>Poin</h2>
            </div>


            <div class="wt-personalskillshold row">

                <div class="wt-yourdetails wt-tabsinfo col-12 col-lg-6 ">
                    <div class="wt-tabscontenttitle text-center" style="border-right: 3px solid #ff5851">
                        <h2>Jumlah Poin</h2>
                    </div>
                    <div class="wt-insightsitem wt-dashboardbox ml-3">
                        <div class="wt-title text-center">
                            <h3><i class="fa fa-money" aria-hidden="true"></i><br>
                                Rp. 200.000</h3>
                        </div>

                        <div class="wt-insightdetails">
                            <a href="#">Poin</a>
                        </div>
                    </div>
                    <a href="<?= base_url('tentor/poin/tambah_poin') ?>" class="wt-btn float-md-right mt-3">Tambah Poin</a>
                </div>

                <div class="wt-yourdetails wt-tabsinfo col-12 col-lg-6">
                    <div class="wt-tabscontenttitle text-center" style="border-right: 3px solid #ff5851">
                        <h2>Cairkan Poin</h2>
                    </div>

                    <form class="wt-formtheme wt-userform text-center">
                        <div class="wt-description">
                            <p>Jumlah Poin Yang Dicairkan Minimal Rp. 500.000 <br> Jumlah Poin Tidak Boleh Kurang Dari Rp. 200.000</p>
                        </div>
                        <div class="form-group ">
                            <input type="text" name="tagline" class="form-control" value="Rp. ">
                            <input type="text" name="rekening" class="form-control mt-2" value="<?= $profil->rekening ?>" placeholder="Nomor Rekening">
                        </div>

                        <a href="#" class="wt-btn float-md-right mt-3">Cairkan</a>
                    </form>
                </div>

                <div class="wt-yourdetails wt-tabsinfo col-12">
                    <div class="wt-tabscontenttitle">
                        <h2>History Poin</h2>
                    </div>

                    <form class="wt-formtheme wt-userform">
                        <div class="wt-contentarticle tab-pane">
                            <div class="table-responsive">
                                <table class="table table-hover DataTables">
                                    <thead style="background-color:#ff5851" class="text-white">
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Jumlah Sebelum</th>
                                            <th>Jumlah Sesudah</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>08-08-2019</th>
                                            <th>Kursus Selesai</th>
                                            <th>Rp. 1.000.000</th>
                                            <th>Rp. 1.800.000</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <th>08-08-2019</th>
                                            <th>Mencairkan Poin</th>
                                            <th>Rp. 1.800.000</th>
                                            <th>Rp. 1.200.000</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <th>08-08-2019</th>
                                            <th>Kursus Selesai</th>
                                            <th>Rp. 1.200.000</th>
                                            <th>Rp. 2.000.000</th>
                                            <th>Action</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>