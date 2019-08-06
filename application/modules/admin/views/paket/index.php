<div class="wt-dashboardbox wt-dashboardinvocies">
    <div class="wt-dashboardboxtitle wt-titlewithsearch"><h2>Kompetensi Tentor</h2>
        <!-- <a style="float: right; padding: 0 17px;" href="<?= base_url('admin/provinsi/index') ?>" class="ml-3 wt-btn"><i class="fas fa-plus"></i> Reset</a> -->
        <a style="float: right; padding: 0 17px;" href="<?= base_url('admin/paket/add') ?>" class="ml-3 wt-btn"><i class="fas fa-plus"></i> Tambah</a>
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
                    <th>Paket</th>
                    <th>Hari</th>
                    <th>Jumlah Pertemuan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($paket as $row){ ?>
                <tr>
                    <td><span class="bt-content"><?= ++$start; ?></span></td>
                    <td><span class="bt-content"><?= $row->nama_paket; ?></span></td>
                    <td><span class="bt-content"><?= $row->hari; ?></span></td>
                    <td><span class="bt-content"><?= $row->jumlah_pertemuan; ?></span></td>
                    <td><span class="bt-content">
                        <a href="<?= base_url('admin/paket/edit/' . $row->id_paket) ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="<?= base_url('admin/paket/delete/' . $row->id_paket) ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash"></i></a>
                    </span></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?= $this->pagination->create_links(); ?>
    </div>
</div>