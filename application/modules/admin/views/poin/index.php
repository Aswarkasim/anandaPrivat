<div class="wt-dashboardbox wt-dashboardinvocies">
    <div class="wt-dashboardboxtitle wt-titlewithsearch">
        <h2>Provinsi</h2>
        <form style="display: inline;" class="wt-formtheme wt-formsearch" action="<?= base_url('admin/provinsi/index'); ?>" method="post">
            <fieldset>
                <div class="form-group">
                    <input type="text" name="search" id="search" class="form-control" placeholder="Search Here" autocomplete="off" autofocus>
                    <button class="wt-searchgbtn" type="submit" name="submit" value="submit"><i class="lnr lnr-magnifier"></i></button>
                    <button style="float: right; padding: 0 17px;" type="submit" name="submit" value="submit" class="ml-3 wt-btn"><i class="fas fa-redo-alt"></i></button>
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
                    <th>Nama Tentor</th>
                    <th>Jumlah Poin</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($order as $row) { ?>
                    <tr>
                        <td><span class="bt-content"><?= ++$start; ?></span></td>
                        <td><span class="bt-content"><?= $row->date_created; ?></span></td>
                        <td><span class="bt-content"><?= $row->nama_lengkap; ?></span></td>
                        <td><span class="bt-content"><?= $row->jumlah_poin; ?></span></td>
                        <td><span class="bt-content">
                                <div class="wt-actionbtn">
                                    <a href="<?= base_url('admin/poin/request/' . $row->id_order_poin) ?>" class=" wt-addinfo wt-skillsaddinfo"><i class="fa fa-edit"></i>
                                    </a>
                                </div>
                            </span></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?= $this->pagination->create_links(); ?>
    </div>
</div>