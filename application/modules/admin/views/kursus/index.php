<div class="wt-dashboardbox wt-dashboardinvocies">
    <div class="wt-dashboardboxtitle wt-titlewithsearch"><h2>Kompetensi Tentor</h2>
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
                    <th width="50px">Icon</th>
                    <th>Kursus</th>
                    <th>Kategori</th>
                    <th>Jenjang</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($kursus as $row){ ?>
                <tr>
                    <td><span class="bt-content"><?= ++$start; ?></span></td>
                    <td><span class="bt-content">
                        <img src="<?php if ($row->icon) {
                                                            echo base_url('assets/uploads/icons/' . $row->icon);
                                                        } else {
                                                            echo base_url('assets/uploads/images/default.jpg');
                                                        } ?>" alt="">
                    </span></td>
                    <td><span class="bt-content"><?= $row->nama_kursus; ?></span></td>
                    <td><span class="bt-content"><?= $row->nama_kategori; ?></span></td>
                    <td><span class="bt-content"><?= $row->nama_user; ?></span></td>
                    <td><span class="bt-content"><?= character_limiter($row->deskripsi, 50); ?></span></td>
                    <td><span class="bt-content">
                        <?php
                            if (($row->is_aktif) == 1) {
                                echo '<a href="' . base_url('admin/kursus/status/') . $row->id_kursus . '" class="btn btn-success tombol-ubah-status">Enable</a>';
                            } else {
                                echo '<a href="' . base_url('admin/kursus/status/') . $row->id_kursus . '" class="btn btn-danger tombol-ubah-status">Disable</a>';
                            }
                        ?>
                    </span></td>
                    <td><span class="bt-content"><?= $row->date_created; ?></span></td>
                    <td><span class="bt-content">
                        <a href="<?= base_url('admin/kursus/edit/' . $row->id_kursus) ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="<?= base_url('admin/kursus/delete/' . $row->id_kursus) ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash"></i></a>
                    </span></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?= $this->pagination->create_links(); ?>
    </div>
</div>