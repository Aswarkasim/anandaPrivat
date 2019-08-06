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

                                    echo form_open_multipart('admin/kecamatan/edit/' . $kecamatan->id_kecamatan)
                                    ?>

                                    <div class="form-group">
                                        <label for=""><strong>NAMA KECAMATAN</strong></label>
                                        <input type="text" name="nama_kecamatan" value="<?= $kecamatan->nama_kecamatan ?>" class="form-control" placeholder="NAMA PROVINSI">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>ZONASI</strong></label>
                                        <select name="id_zonasi" id="id_zonasi" class="form-control">
                                            <option value="">--Pilih Zonasi--</option>
                                            <?php foreach ($zonasi as $row) { ?>
                                                <option value="<?= $row->id_zonasi ?>"><?= $row->nama_zonasi ?></option>
                                            <?php } ?>
                                        </select>
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