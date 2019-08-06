<div class="col-xs-14 col-sm-14 col-md-14 col-lg-14 col-xl-11">
    <div class="wt-dashboardbox">
        <div class="wt-dashboardboxtitle">
            <h2>Request Poin</h2>
        </div>
        <div class="wt-dashboardboxcontent wt-rcvproposala">
            <div class="wt">
                <div class="container-fluid"><br><br>
                    <table class="table table-hover DataTables">
                        <thead class="text-white" style="background-color:#ff5851">
                            <tr>
                                <th width="50px">NO</th>
                                <th width="200px">TANGGAL</th>
                                <th>NAMA TENTOR</th>
                                <th width="150px">JUMLAH POIN</th>
                                <th width="100px">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $no = 1;
                            foreach ($order as $row) { ?>
                                <tr class="<?php if ($row->is_read == "0") {
                                                echo "bg-info text-white";
                                            } ?> ">
                                    <td><?= $no ?></td>
                                    <td><?= $row->date_created ?></td>
                                    <td><?= $row->nama_lengkap ?></td>
                                    <td><?= $row->jumlah_poin ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/poin/request/' . $row->id_order_poin) ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
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