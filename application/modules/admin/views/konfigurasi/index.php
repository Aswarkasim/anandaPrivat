<section class="wt-haslayout wt-dbsectionspace">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
            <div class="wt-dashboardbox">
                <div class="wt-dashboardboxtitle">
                    <h2>Konfigurasi</h2>
                </div>
                <div class="wt-dashboardboxcontent wt-packages">
                    <div class="container-fluid"><br><br>
                        <form action="<?= base_url('admin/konfigurasi/textConf') ?>" method="post">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 float-right">
                                                <label for=""><strong> Nama Web</strong></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="nama_web" value="<?= $konfigurasi->nama_web ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 float-right">
                                                <label for=""><strong> Email</strong></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="email" class="form-control" name="email" value="<?= $konfigurasi->email ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 float-right">
                                                <label for=""><strong>Judul Utama</strong></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="judul_utama" value="<?= $konfigurasi->judul_utama ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 float-right">
                                                <label for=""><strong>Link Video</strong></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="link_video" value="<?= $konfigurasi->link_video ?>">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 float-right">
                                                <label for=""><strong>Facebook</strong></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="fb" value="<?= $konfigurasi->fb ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 float-right">
                                                <label for=""><strong>Twitter</strong></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="tw" value="<?= $konfigurasi->tw ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 float-right">
                                                <label for=""><strong>Youtube</strong></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="yt" value="<?= $konfigurasi->yt ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 float-right">
                                                <label for=""><strong>Instagram</strong></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="ig" value="<?= $konfigurasi->ig ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="pull-left">
                                            <button type="submit" class="wt-btn"><i class="fa fa-save"></i> Simpan</button>
                                        </div>
                                    </div>


                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 float-right">
                                                <label for=""><strong>Deskripsi</strong></label>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea class="form-control" name="deskripsi" id="editor"><?= $konfigurasi->deskripsi ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3 float-right">
                                                <label for=""><strong>Tentang</strong></label>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea id="editor1" name="tentang" id="" cols="30" rows="10"><?= $konfigurasi->tentang ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                        </form>
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
    ClassicEditor
        .create(document.querySelector('#editor1'), {
            toolbar: ['bold', 'italic', 'link']
        })

        .catch(error => {
            console.log(error);
        });
</script>