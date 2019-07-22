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

                                    echo form_open_multipart('admin/kategori/edit/' . $kategori->id_kategori)
                                    ?>

                                    <div class="form-group">
                                        <label for=""><strong>NAMA KURSUS</strong></label>
                                        <input type="text" value="<?= $kategori->nama_kategori ?>" name="nama_kategori" class="form-control" placeholder="NAMA KATEGORI">
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