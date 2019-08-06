<div class="wt-dashboardbox wt-dashboardinvocies">
    <div class="wt-dashboardboxtitle wt-titlewithsearch"><h2>Pencairan Poin</h2>
        <!-- <a style="float: right; padding: 0 17px;" href="<?= base_url('admin/provinsi/index') ?>" class="ml-3 wt-btn"><i class="fas fa-plus"></i> Reset</a> -->
        <a style="float: right; padding: 0 17px;" href="#" class="ml-3 wt-btn"><i class="fas fa-plus"></i> Tambah</a>
        <form style="display: inline;" class="wt-formtheme wt-formsearch" action="#" method="post">
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
                    <th>Nama Tentor</th>
                    <th>Jumlah Poin</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pencairan as $row){ ?>
                <tr>
                    <td><span class="bt-content"><?= ++$start; ?></span></td>
                    <td><span class="bt-content"><?= $row->nama_lengkap; ?></span></td>
                    <td><span class="bt-content"><?= $row->poin; ?></span></td>
                    <td><span class="bt-content">
                        <div class="wt-actionbtn">
                            <a href="<?= base_url('admin/pencairan/edit/' . $row->id_pencairan) ?>" class="wt-addinfo wt-skillsaddinfo"><i class="far fa-edit"></i></a>
                            <a href="<?= base_url('admin/pencairan/delete/' . $row->id_pencairan) ?>" class="wt-deleteinfo"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </span></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?= $this->pagination->create_links(); ?>
    </div>
</div>