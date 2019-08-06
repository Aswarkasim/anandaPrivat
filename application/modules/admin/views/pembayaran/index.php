<div class="wt-dashboardbox wt-dashboardinvocies">
    <div class="wt-dashboardboxtitle wt-titlewithsearch"><h2>Provinsi</h2>
        <form style="display: inline;" class="wt-formtheme wt-formsearch" action="<?= base_url('admin/provinsi/index'); ?>" method="post">
            <fieldset>
                <div class="form-group">
                    <input type="text" name="search" id="search" class="form-control" placeholder="Search Here" autocomplete="off" autofocus>
                    <button class="wt-searchgbtn" type="submit" name="submit" value="submit"><i class="lnr lnr-magnifier"></i></button>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="wt-dashboardboxcontent wt-categoriescontentholder wt-categoriesholder">
        <table class="wt-tablecategories">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tanggal</th>
                    <th>Metode Pembayaran</th>
                    <th width="600px">Nama Siswa</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($pembayaran as $row){ ?>
                <tr class="<?php if ($row->is_read == 0) { echo 'bg-info text-white'; } ?>">
                    <td><span class="bt-content"><?= ++$start; ?></span></td>
                    <td><span class="bt-content"><?= $row->tanggal; ?></span></td>
                    <td><span class="bt-content"><?= $row->metode; ?></span></td>
                    <td><span class="bt-content"><?= $row->id_user; ?></span></td>
                    <td><span class="bt-content">
                        <?php if ($row->is_valid == 'Menunggu') {
                            echo '<span class="btn btn-warning">Menunggu</span>';
                        } elseif ($row->is_valid == 'Valid') {
                            echo '<span class="btn btn-success">Valid</span>';
                        } elseif ($row->is_valid == 'Unvalid') {
                            echo '<span class="btn btn-danger">Tidak Valid</span>';
                        } ?>
                    </span></td>
                    <td><span class="bt-content">
                        <a href="<?= base_url('admin/pembayaran/detail/' . $row->id_pembayaran) ?>" class="text-white btn <?php if ($row->is_read == 0) {
                                                    echo "btn-primary";
                                                } else {
                                                    echo "btn-success";
                                                }  ?>"><i class="<?php if ($row->is_read == 0) {
                                                    echo "fa fa-envelope";
                                                } else {
                                                    echo "fa fa-envelope-open";
                                                }  ?>"></i/a>
                                                <a href="<?= base_url('admin/pembayaran/delete/' . $row->id_pembayaran) ?>" class="btn btn-danger tombol-hapus"> <i class="fa fa-trash" aria-hidden="true"></i></a>
                    </span></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?= $this->pagination->create_links(); ?>
    </div>
</div>