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

                                    if (isset($error)) {
                                        echo '<div class="alert alert-danger"><i class="fa fa-warning"></i>';
                                        echo $error;
                                        echo '</div>';
                                    }

                                    echo form_open_multipart('admin/kursus/edit/' . $kursus->id_kursus);
                                    ?>

                                    <div class="form-group">
                                        <label for=""><strong>NAMA KURSUS</strong></label>
                                        <input type="text" value="<?= $kursus->nama_kursus ?>" name="nama_kursus" class="form-control" placeholder="NAMA KURSUS">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>Kategori</strong></label>
                                        <span class="wt-select">
                                            <select name="id_kategori">
                                                <option value="">--Kategori--</option>
                                                <?php foreach ($kategori as $row) { ?>
                                                    <option value="<?= $row->id_kategori ?>" <?php if (($kursus->id_kategori) == $row->id_kategori) {
                                                                                                    echo "selected";
                                                                                                } ?>><?= $row->nama_kategori ?></option>
                                                <?php } ?>
                                            </select>
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for=""><strong>Status</strong></label>
                                        <span class="wt-select">
                                            <select name="is_aktif">
                                                <option value="1" <?php if ($kursus->is_aktif == '1') {
                                                                        echo "selected";
                                                                    } ?>>Aktif</option>
                                                <option value="0" <?php if ($kursus->is_aktif == '0') {
                                                                        echo "selected";
                                                                    } ?>>Tidak Aktif</option>
                                            </select>
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for=""><strong>ICON</strong></label>
                                        <div class="form-group form-group-label">
                                            <div class="wt-labelgroup">
                                                <label for="filep">
                                                    <span class="wt-btn">ICON</span>
                                                    <input type="file" name="icon" id="filep">
                                                </label>
                                                <span>Masukkan Icon</span>
                                                <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
                                            </div>
                                            <div class="thumbnail">
                                                <img width="250px" src="<?= base_url('assets/uploads/icons/' . $kursus->icon) ?>" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for=""><strong>DESKRIPSI</strong></label>
                                        <textarea name="deskripsi" id="editor" style="width:10px" cols="300" rows="100">
                                            <?= $kursus->deskripsi ?>
                                        </textarea>
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