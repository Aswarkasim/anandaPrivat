<div class="wt-contentarticle tab-pane fade" id="ListPencairanPoin">
    <div class="table-responsive">
        <table class="table table-hover DataTables">
            <thead style="background-color:#ff5851" class="text-white">
                <tr>
                    <th>NO</th>
                    <th>TANGGAL</th>
                    <th>POIN</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $no = 1;
                    foreach ($pencairan as $row) { ?>
                        <td><?= $no ?></td>
                        <td><?= $row->date_created ?></td>
                        <td><?= $row->poin ?></td>
                        <td width="100px">
                            <?php
                            if ($row->is_done == 1) {
                                echo '<div class="btn btn-success"><i class="fa fa-check fa-2x"></i> </div>';
                            } else if ($row->is_done == 0) {
                                echo '<div class="btn btn-warning"><i class="fa fa-refresh fa-2x"></i> </div>';
                            }
                            ?>
                        </td>
                    </tr>
                    <?php $no++;
                } ?>
            </tbody>
        </table>
        <br>
        <br>
    </div>
</div>