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

                            <table class="table DataTables">
                                <thead style="background-color:#ff5851" class="text-white">
                                    <tr>
                                        <th width="100px">No</th>
                                        <th>Nama Zona</th>
                                        <th width="100px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($zonasi as $row) { ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row->nama_zonasi ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/zonasi/edit/' . $row->id_zonasi) ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                <a href="<?= base_url('admin/zonasi/delete/' . $row->id_zonasi) ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash"></i></a>
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