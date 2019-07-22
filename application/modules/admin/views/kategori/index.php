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
                                        <th>KATEGORI</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($kategori as $row) { ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $row->nama_kategori; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/kategori/edit/' . $row->id_kategori) ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                <a href="<?= base_url('admin/kategori/delete/' . $row->id_kategori) ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash"></i></a>
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