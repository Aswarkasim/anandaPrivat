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

                                    echo form_open_multipart('admin/zonasi/edit/' . $zonasi->id_zonasi)
                                    ?>

                                    <div class="form-group">
                                        <label for=""><strong>NAMA ZONASI</strong></label>
                                        <input type="text" name="nama_zonasi" value="<?= $zonasi->nama_zonasi ?>" class="form-control" placeholder="NAMA ZONASI">
                                    </div>

                                    <div class="form-group">
                                        <span class="wt-select">
                                            <select class="select2" name="id_provinsi" id="provinsi">
                                                <option value="">Provinsi</option>
                                                <?php foreach ($alamat as $row) { ?>
                                                    <option value="<?= $row->id_provinsi; ?>"><?= $row->nama_provinsi; ?></option>
                                                <?php  } ?>
                                            </select>
                                        </span>
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
<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            toolbar: ['bold', 'italic', 'link']
        })
        .catch(error => {
            console.log(error);
        });
</script>