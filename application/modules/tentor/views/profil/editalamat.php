<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
    <div class="wt-haslayout wt-dbsectionspace">
        <div class="wt-dashboardbox wt-dashboardtabsholder">
            <div class="wt-dashboardboxtitle">
                <h2>Edit Alamat</h2>
            </div>
            <div style="width: 100%;" class="wt-tabscontent tab-content">
                <div class="wt-location wt-tabsinfo">
                    <div class="wt-tabscontenttitle">
                        <h2>Alamat Anda</h2>
                    </div>
                    <?= form_open('tentor/alamat/edit/' . $alamat->id_alamat); ?>
                    <form method="post" class="wt-formtheme wt-userform">
                        <div style="width: 100%;" class="form-group form-group-half">
                            <span class="wt-select">
                                <select class="select2" name="provinsi" id="provinsi">
                                    <option value="">Provinsi</option>
                                    <?php foreach ($provinsi as $row) { ?>
                                        <option <?php if ($alamat->id_provinsi == $row->id_provinsi) {
                                                    echo "selected";
                                                } ?> value="<?= $row->id_provinsi; ?>"><?= $row->nama_provinsi; ?></option>
                                    <?php  } ?>
                                </select>
                            </span>
                        </div>
                        <div style="width: 100%;" class="form-group form-group-half">
                            <span class="wt-select">
                                <select name="kabupaten" id="kabupaten">
                                    <option value="">Kota / Kabupaten</option>

                                </select>
                            </span>
                        </div>
                        <div style="width: 100%;" class="form-group form-group-half">
                            <span class="wt-select">
                                <select name="kecamatan" id="kecamatan">
                                    <option value="">Kecamatan</option>
                                </select>
                            </span>
                        </div>
                        <div style="width: 100%;" class="form-group form-group-half">
                            <input value="<?= $alamat->alamat; ?>" type="textarea" name="alamat" class="form-control" placeholder="ALAMAT">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="wt-btn">Simpan</button>
                        </div>
                    </form>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
<script src="<?= base_url('assets/')  ?>js/vendor/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {

        $('#provinsi').change(function() {
            var id_provinsi = $("#provinsi").val();
            if (id_provinsi != '') {
                $.ajax({
                    url: "../../alamat/fetch_kabupaten",
                    method: "POST",
                    data: {
                        id_provinsi: id_provinsi
                    },
                    success: function(data) {
                        $('#kabupaten').html(data);
                    }
                })
            }
        });

        $('#kabupaten').change(function() {
            var id_kabupaten = $("#kabupaten").val();
            if (id_kabupaten != '') {
                $.ajax({
                    url: "../../alamat/fetch_kecamatan",
                    method: "POST",
                    data: {
                        id_kabupaten: id_kabupaten
                    },
                    success: function(data) {
                        $('#kecamatan').html(data);
                    }
                })
            }
        });

    });
</script>