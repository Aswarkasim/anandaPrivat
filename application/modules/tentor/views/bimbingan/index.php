<div class="col-xs-12  mx-auto">
    <div class="wt-haslayout wt-dbsectionspace">
        <div class="wt-dashboardbox wt-dashboardtabsholder">
            <div class="wt-dashboardboxtitle">
                <h2>Siswa Bimbingan</h2>
            </div>


            <div class="wt-personalskillshold">

                <div class="wt-yourdetails wt-tabsinfo mt-3">
                    <form class="wt-formtheme wt-userform tab-content wt-haslayout">
                        <div class="wt-contentarticle tab-pane fade active show" id="rtk">
                            <div class="table-responsive">
                                <table class="wt-tablecategories">
                                    <thead style="background-color:#ff5851" class="text-white">
                                        <tr>
                                            <th>No</th>
                                            <th>Kursus</th>
                                            <th>Jenjang</th>
                                            <th>Siswa</th>
                                            <th>Pertemuan</th>
                                            <th>Jadwal</th>
                                            <th>Waktu</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($bimbingan as $row) { ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $row->nama_kursus ?></td>
                                                <td><?= $row->nama_jenjang ?></td>
                                                <td><?= $row->nama_lengkap ?></td>
                                                <td><?= $row->jumlah_pertemuan ?>x pertemuan</td>
                                                <td><?= $row->hari ?></td>
                                                <td><?= $row->awal ?> - <?= $row->akhir ?></td>
                                                <td><a href="<?= base_url('tentor/bimbingan/detail/' . $row->id_online) ?>">Detail</a></td>
                                            </tr>
                                            <?php $no++;
                                        } ?>
                                    </tbody>
                                </table>
                                <nav class="wt-pagination wt-savepagination">
                                    <?= $this->pagination->create_links() ?>
                                </nav>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>