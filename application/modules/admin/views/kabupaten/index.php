<div class="wt-dashboardbox wt-dashboardinvocies">
    <div class="wt-dashboardboxtitle wt-titlewithsearch">
        <h2>Kabupaten</h2>
        <a style="float: right; padding: 0 17px;" href="<?= base_url($add) ?>" class="ml-3 wt-btn"><i class="fas fa-plus"></i> Tambah</a>
        <form class="wt-formtheme wt-formsearch" ction="<?= base_url('admin/kabupaten/index'); ?>" method="post">
            <fieldset>
                <div class="form-group">
                    <input type="text" name="searchKabupaten" class="form-control" placeholder="Search Here">
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
                    <th>Nama Kabupaten</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($kabupaten)) { ?>
                    <tr>
                        <td colspan="4">
                            <div class="text-center alert alert-danger alert-dismissible fade show">
                                <em><b>Data tidak ditemukan!</b></em>
                            </div>
                        </td>
                    </tr>
                <?php } ?>

                <?php foreach ($kabupaten as $row) { ?>
                    <tr>
                        <td><span class="bt-content"><?= ++$start; ?></span></td>
                        <td><span class="bt-content"><?= $row->nama_kabupaten; ?></span></td>
                        <td><span class="bt-content">
                                <div class="wt-actionbtn">
                                    <a href="<?= base_url('admin/kabupaten/edit/' . $row->id_kabupaten) ?>" class="wt-addinfo wt-skillsaddinfo"><i class="far fa-edit"></i></a>
                                    <a href="<?= base_url('admin/kabupaten/delete/' . $row->id_kabupaten) ?>" class="wt-deleteinfo"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </span></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?= $this->pagination->create_links(); ?>
    </div>
</div>