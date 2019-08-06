<div class="wt-contentarticle tab-pane fade active show" id="ListOrderPoin">
    <div class="table-responsive">
        <table class="table table-hover DataTables">
            <thead style="background-color:#ff5851" class="text-white">
                <tr>
                    <th>NO</th>
                    <th>TANGGAL</th>
                    <th>JUMLAH POIN</th>
                    <th>JUMLAH BAYAR</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($order as $row) { ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $row->date_created ?></td>
                        <td><?= nominal($row->jumlah_poin) ?></td>
                        <td><?= nominal($row->jumlah_bayar) ?></td>
                        <td><?php
                            if ($row->is_read == 1) {
                                echo '<div class="btn btn-success"><i class="fa fa-check fa-2x"></i> </div>';
                            } else if ($row->is_read == 0) {
                                echo '<div class="btn btn-warning"><i class="fa fa-refresh fa-2x"></i> </div>';
                            }
                            ?></td>
                    </tr>
                    <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>
</div>