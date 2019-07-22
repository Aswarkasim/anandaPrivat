<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
    <div class="wt-haslayout wt-dbsectionspace">
        <div class="wt-dashboardbox wt-dashboardtabsholder">
            <div class="wt-dashboardboxtitle">
                <h2>Edit Alamat</h2>
            </div>
            <div style="width: 100%;" class="wt-tabscontent tab-content">
                <div class="wt-location wt-tabsinfo">
                    <div class="wt-tabscontenttitle">
                        <h2>Alamat Anda</h2>
                    </div>
                    <div class="container-fluid">
                        <table>
                            <tr>
                                <td width="200">Alamat Lengkap</td>
                                <td align="left"><?= $alamat->alamat; ?></td>
                            </tr>
                            <tr>
                                <td width="200">Provinsi</td>
                                <td align="left"><?= $alamat->nama_provinsi; ?></td>
                            </tr>
                            <tr>
                                <td width="200">Kabupaten</td>
                                <td align="left"><?= $alamat->nama_kabupaten; ?></td>
                            </tr>
                            <tr>
                                <td width="200">Kecamatan</td>
                                <td align="left"><?= $alamat->nama_kecamatan; ?></td>
                            </tr>
                        </table>
                        <div class="wt-btnarea"><a href="<?= base_url('tentor/alamat/edit/'.$alamat->id_alamat); ?>" class="wt-btn">Edit</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    