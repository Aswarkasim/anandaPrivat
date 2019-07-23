<div class="wt-contentarticle tab-pane fade" id="siswabimbingan">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-danger">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kursus</th>
                    <th>Tingkat</th>
                    <th>alamat</th>
                    <th>Jadwal</th>
                    <th>Pukul</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($bimbingan as $row) { ?>
                    <tr>
                        <th><?= $no ?></th>
                        <td><?= $row->nama_lengkap ?></td>
                        <td><?= $row->nama_kursus ?></td>
                        <td><?= $row->nama_jenjang . ' ' . $row->nama_tingkat ?></td>
                        <td><?= $row->alamat ?></td>
                        <td><?= $row->hari ?></td>
                        <td><?= $row->awal . ' - ' . $row->akhir ?></td>
                    </tr>
                    <?php $no++;
                } ?>
            </tbody>
        </table>
        <a href="<?= base_url('tentor/bimbingan') ?>" class="wt-btn float-right mb-3">Lihat Detail</a>
        <br>
        <br>
    </div>
</div>