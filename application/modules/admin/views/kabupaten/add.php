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

                                    echo form_open_multipart('admin/kabupaten/add')
                                    ?>

                                    <div class="form-group">
                                        <label for=""><strong>NAMA PROVINSI</strong></label>
                                        <select name="id_provinsi" id="" class="form-control">
                                            <option value="">--Pilih Provinsi--</option>
                                            <?php foreach ($provinsi as $row) { ?>
                                                <option value="<?= $row->id_provinsi ?>"><?= $row->nama_provinsi ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for=""><strong>NAMA KABUPATEN/KOTA</strong></label>
                                        <input type="text" name="nama_kabupaten" class="form-control" placeholder="NAMA PROVINSI">
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