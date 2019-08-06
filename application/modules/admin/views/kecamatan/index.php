<div class="wt-dashboardbox wt-dashboardinvocies">
    <div class="wt-dashboardboxtitle wt-titlewithsearch">
        <h2>Kecamatan</h2>
        <a style="float: right; padding: 0 17px;" href="<?= base_url($add) ?>" class="ml-3 wt-btn"><i class="fas fa-plus"></i> Tambah</a>
        <form class="wt-formtheme wt-formsearch">
            <fieldset>
                <div class="form-group">
                    <input type="text" name="SearchKecamatan" class="form-control" placeholder="Search Here">
                    <a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="wt-dashboardboxcontent wt-categoriescontentholder wt-categoriesholder">
        <table class="wt-tablecategories">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Kecamatan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kecamatan as $row) { ?>
                    <tr>
                        <td><span class="bt-content"><?= ++$start; ?></span></td>
                        <td><span class="bt-content"><?= $row->nama_kecamatan; ?></span></td>
                        <td><span class="bt-content">
                                <div class="wt-actionbtn">
                                    <a href="<?= base_url('admin/kecamatan/edit/' . $row->id_kecamatan) ?>" class="wt-addinfo wt-skillsaddinfo"><i class="far fa-edit"></i></a>
                                    <a href="<?= base_url('admin/kecamatan/delete/' . $row->id_kecamatan) ?>" class="wt-deleteinfo"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </span></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?= $this->pagination->create_links(); ?>
    </div>
</div>