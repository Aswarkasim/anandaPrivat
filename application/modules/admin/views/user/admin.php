<section class="wt-haslayout">
    <div class="row">
        <div class="col-md-12">

            <div class="wt-haslayout wt-dbsectionspace">
                <div class="wt-dashboardbox wt-dashboardtabsholder">



                    <div class="wt">

                        <div class="container-fluid"><br><br>
                            <p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddRoleModal">
                                    <i class="fa fa-plus"></i> Tambah
                                </button>

                            </p>

                            <table class="table table-hover DataTables">
                                <thead>
                                    <tr>
                                        <th width="50px">No</th>
                                        <th width="50px">FOTO</th>
                                        <th>EMAIL</th>
                                        <th>ROLE</th>
                                        <th>STATUS</th>
                                        <th>DATE CREATED</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($user as $row) { ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td>
                                                <img src="<?php if ($row->foto) {
                                                                echo base_url('assets/uploads/images/' . $row->foto);
                                                            } else {
                                                                echo base_url('assets/uploads/images/default.jpg');
                                                            } ?>" alt="">
                                            </td>
                                            <td><?= $row->nama_user; ?></td>
                                            <td><?= $row->role; ?></td>
                                            <td>
                                                <?php
                                                if (($row->is_aktif) == 1) {
                                                    echo '<span class="btn btn-success">Aktif</span>';
                                                } else {
                                                    echo '<span class="btn btn-danger">Tidak Aktif</span>';
                                                }
                                                ?>
                                            </td>
                                            <td><?= $row->date_created; ?></td>
                                            <td></td>
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



<!-- Modal -->
<div class="modal fade" id="AddRoleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>