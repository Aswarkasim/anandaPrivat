<div class="wt-contentarticle tab-pane fade active show" id="kursus">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-danger text-white" style="background-color:#ff5851">
                <tr>
                    <th>No</th>
                    <th>Kursus</th>
                    <th>Jenjang</th>
                    <th>Tentor</th>
                    <th>Jadwal</th>
                    <th>Pukul</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                <?php $no = 1;
                foreach ($kursus as $row) { ?>
                    <tr>
                        <th><?= $no ?></th>
                        <td><?= $row->nama_kursus ?></td>
                        <td><?= $row->nama_jenjang . ' ' . $row->nama_tingkat ?></td>
                        <td><?= $row->nama_lengkap ?></td>
                        <td><?= $row->hari ?></td>
                        <td><?= $row->awal . ' ' . $row->akhir ?></td>
                        <th><a href="<?= base_url('siswa/kursus/detail_kursus/' . $row->id_online) ?>">Lihat Detail</a></th>
                    </tr>
                    <?php $no++;
                } ?>

            </tbody>
        </table>
        <br>
        <br>
    </div>
</div>