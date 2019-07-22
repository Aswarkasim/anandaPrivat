<section class="wt-haslayout">
    <div class="row">
        <div class="col-md-12">

            <div class="wt-haslayout wt-dbsectionspace">
                <div class="wt-dashboardbox wt-dashboardtabsholder">

                    <div class="wt">

                        <div class="container-fluid"><br><br>
                            <div class="row">
                                <div class="col-md-6">

                                    <?php
                                    echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ', '</div>');

                                    echo form_open_multipart('admin/paket/edit/' . $paket->id_paket)
                                    ?>

                                    <div class="form-group">
                                        <label for=""><strong>NAMA PAKET</strong></label>
                                        <input type="text" value="<?= $paket->nama_paket ?>" name="nama_paket" class="form-control" placeholder="NAMA PAKET">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>HARI</strong></label>
                                        <input type="text" value="<?= $paket->hari ?>" name="hari" class="form-control" placeholder="HARI">
                                        <small>Pisahkan dengan koma. Contoh: Senin, Rabu, Jumat</small>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>JUMLAH PERTEMUAN</strong></label>
                                        <input type="number" value="<?= $paket->jumlah_pertemuan ?>" name="jumlah_pertemuan" class="form-control" placeholder="JUMLAH PERTEMUAN">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="wt-btn"><i class="fa fa-save"></i> Simpan</button>
                                    </div>

                                    <?= form_close() ?>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
</section>