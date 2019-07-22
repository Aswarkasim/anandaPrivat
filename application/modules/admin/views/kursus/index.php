<section class="wt-haslayout">
    <div class="row">
        <div class="col-md-12">

            <div class="wt-haslayout wt-dbsectionspace">
                <div class="wt-dashboardbox wt-dashboardtabsholder">



                    <div class="wt">

                        <div class="container-fluid"><br><br>
                            <p>
                                <!-- Button trigger modal -->
                                <a href="<?= base_url($add) ?>" class="btn btn-primary">
                                    <i class="fa fa-plus"></i> Tambah
                                </a>

                            </p>

                            <table class="table table-hover DataTables">
                                <thead>
                                    <tr>
                                        <th width="50px">No</th>
                                        <th width="50px">ICON</th>
                                        <th>KURSUS</th>
                                        <th>KATEGORI</th>
                                        <th>OLEH</th>
                                        <th>DESKRIPSI</th>
                                        <th>STATUS</th>
                                        <th>DATE CREATED</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($kursus as $row) { ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td>
                                                <img src="<?php if ($row->icon) {
                                                                echo base_url('assets/uploads/icons/' . $row->icon);
                                                            } else {
                                                                echo base_url('assets/uploads/images/default.jpg');
                                                            } ?>" alt="">
                                            </td>
                                            <td><?= $row->nama_kursus; ?></td>
                                            <td><?= $row->nama_kategori; ?></td>
                                            <td><?= $row->nama_user; ?></td>
                                            <td><?= character_limiter($row->deskripsi, 50); ?></td>
                                            <td>
                                                <?php
                                                if (($row->is_aktif) == 1) {
                                                    echo '<a href="' . base_url('admin/kursus/status/') . $row->id_kursus . '" class="btn btn-success tombol-ubah-status">Enable</a>';
                                                } else {
                                                    echo '<a href="' . base_url('admin/kursus/status/') . $row->id_kursus . '" class="btn btn-danger tombol-ubah-status">Disable</a>';
                                                }
                                                ?>
                                            </td>
                                            <td><?= $row->date_created; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/kursus/edit/' . $row->id_kursus) ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                <a href="<?= base_url('admin/kursus/delete/' . $row->id_kursus) ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php $no++;
                                    } ?>
                                </tbody>
                            </table>

                            <br><br>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>