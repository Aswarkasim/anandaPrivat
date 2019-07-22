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

                                    echo form_open_multipart('admin/tingkat/edit/' . $tingkat->id_tingkat)
                                    ?>

                                    <div class="form-group">
                                        <label for=""><strong>NAMA JENJANG</strong></label>
                                        <span class="wt-select">
                                            <select name="id_jenjang">
                                                <option value="">--Pilih Jenjang--</option>
                                                <?php foreach ($jenjang as $row) { ?>
                                                    <option <?php if ($tingkat->id_jenjang == $row->id_jenjang) {
                                                                echo "selected";
                                                            } ?> value="<?= $row->id_jenjang ?>"><?= $row->nama_jenjang ?></option>
                                                <?php  } ?>
                                            </select>
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for=""><strong>NAMA TINGKAT</strong></label>
                                        <input type="text" value="<?= $tingkat->nama_tingkat ?>" name="nama_tingkat" class="form-control" placeholder="NAMA TINGKAT">
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