<div class="wt-dashboardbox wt-dashboardinvocies">
    <div class="wt-dashboardboxtitle wt-titlewithsearch"><h2>Manajemen User</h2>
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
                    <th width="50">#</th>
                    <th width="100">Foto</th>
                    <th>Nama User</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Date Created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($user as $row){ ?>
                <tr>
                    <td><span class="bt-content"><?= ++$start; ?></span></td>
                    <td><span class="bt-content">
                        <img src="<?php if ($row->foto) {
                                    echo base_url('assets/uploads/images/' . $row->foto);
                                } else {
                                    echo base_url('assets/uploads/images/default.jpg');
                                } ?>" alt="">
                    </span></td>
                    <td><span class="bt-content"><?= $row->nama_user; ?></span></td>
                    <td><span class="bt-content"><?= $row->email; ?></span></td>
                    <td><span class="bt-content"><?= $row->role; ?></span></td>
                    <td><span class="bt-content">
                        <?php
                            if (($row->is_aktif) == 1) {
                                echo '<span class="btn btn-success">Aktif</span>';
                            } else {
                                echo '<span class="btn btn-danger">Tidak Aktif</span>';
                            }
                        ?>
                    </span></td>
                    <td><span class="bt-content"><?= $row->date_created; ?></span></td>
                    <td><span class="bt-content">
                        <a href="<?= base_url('admin/user/edit/' . $row->id_user) ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="<?= base_url('admin/user/delete/' . $row->id_user) ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash"></i></a>
                    </span></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?= $this->pagination->create_links(); ?>
    </div>
</div>