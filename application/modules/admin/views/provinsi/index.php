<div class="wt-dashboardbox wt-dashboardinvocies">
    <div class="wt-dashboardboxtitle wt-titlewithsearch">
        <h2>Provinsi</h2>
        <!-- <a style="float: right; padding: 0 17px;" href="<?= base_url('admin/provinsi/index') ?>" class="ml-3 wt-btn"><i class="fas fa-plus"></i> Reset</a> -->
        <a style="float: right; padding: 0 17px;" href="<?= base_url($add) ?>" class="ml-3 wt-btn"><i class="fas fa-plus"></i> Tambah</a>
        <form style="display: inline;" class="wt-formtheme wt-formsearch" action="<?= base_url('admin/provinsi/index'); ?>" method="post">
            <fieldset>
                <div class="form-group">
                    <input type="text" name="searchProvinsi" id="search" class="form-control" placeholder="Search Here" autocomplete="off" autofocus>
                    <button class="wt-searchgbtn" type="submit" name="submit" value="submit"><i class="lnr lnr-magnifier"></i></button>
                    <!-- <button style="float: right; padding: 0 17px;" type="submit" name="submit" value="submit" class="ml-3 wt-btn"><i class="fas fa-redo-alt"></i></button> -->
                </div>
            </fieldset>
        </form>
    </div>
    <div class="wt-dashboardboxcontent wt-categoriescontentholder wt-categoriesholder">
        <table class="wt-tablecategories">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Provinsi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($provinsi)) { ?>
                    <tr>
                        <td colspan="4">
                            <div class="text-center alert alert-danger alert-dismissible fade show">
                                <em><b>Data tidak ditemukan!</b></em>
                            </div>
                        </td>
                    </tr>
                <?php } ?>

                <?php foreach ($provinsi as $row) { ?>
                    <tr>
                        <td><span class="bt-content"><?= ++$start; ?></span></td>
                        <td><span class="bt-content"><?= $row->nama_provinsi; ?></span></td>
                        <td><span class="bt-content">
                                <div class="wt-actionbtn">
                                    <a href="<?= base_url('admin/provinsi/edit/' . $row->id_provinsi) ?>" class="wt-addinfo wt-skillsaddinfo"><i class="far fa-edit"></i></a>
                                    <a href="<?= base_url('admin/provinsi/delete/' . $row->id_provinsi) ?>" class="wt-deleteinfo"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </span></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?= $this->pagination->create_links(); ?>
    </div>
</div>