<div class="wt-contentarticle tab-pane fade" id="keranjang">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-danger text-white" style="background-color:#ff5851">
                <tr>
                    <th>No</th>
                    <th>Kursus</th>
                    <th>Tingkat</th>
                    <th>Tentor</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                <?php $no = 1;
                foreach ($keranjang as $row) { ?>
                    <tr>
                        <th><?= $no ?></th>
                        <td><?= $row->nama_kursus ?></td>
                        <td><?= $row->nama_jenjang . ' ' . $row->nama_tingkat ?></td>
                        <td><?= $row->nama_lengkap ?></td>
                        <td><span class="badge badge-danger">Belum Dibayar</span></td>
                        <td><a href="<?= base_url('siswa/pembayaran/index/' . $row->id_order) ?>">Lihat Detail</a></td>
                    </tr>
                    <?php $no++;
                } ?>

            </tbody>
        </table>
        <br>
        <br>
    </div>
</div>