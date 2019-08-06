<section class="wt-haslayout">
    <div class="row">
        <!-- <div class="col-md-12"> -->
        <div class="wt-haslayout wt-dbsectionspace">
            <div class="wt-dashboardbox wt-dashboardtabsholder">

                <div class="wt">

                    <div class="container-fluid"><br><br>
                        <div class="row">
                            <div class="col-md-6">

                                <form action="<?= base_url('admin/konfigurasi/textConf') ?>" method="post">
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
                                </form>

                            </div>

                            <div class="col-md-6">
                                <?php
                                if (isset($error)) {
                                    echo $error;
                                }
                                ?>
                                <div class="form-group">
                                    <div class="row pb-10">
                                        <div class="col-md-3 float-right">
                                            <label for=""><strong> Logo</strong></label>
                                        </div>
                                        <div class="col-md-8">
                                            <?php include('logo.php') ?>
                                            <img src="<?= base_url('assets/uploads/konfigurasi/' . $konfigurasi->logo) ?>" width="100px" alt=""><br>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-3 float-right">
                                            <label for=""><strong> Banner Utama</strong></label>
                                        </div>
                                        <div class="col-md-8">
                                            <?php include('banner_main.php') ?>
                                            <img src="<?= base_url('assets/uploads/konfigurasi/' . $konfigurasi->banner_main) ?>" width="70%" alt="">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-3 float-right">
                                            <label for=""><strong> Sub Banner</strong></label>
                                        </div>
                                        <div class="col-md-8">
                                            <?php include('sub_banner.php') ?>
                                            <img src="<?= base_url('assets/uploads/konfigurasi/' . $konfigurasi->sub_banner) ?>" width="70%" alt="">
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-3 float-right">
                                            <label for=""><strong> Banner Char 1</strong></label>
                                        </div>
                                        <div class="col-md-8">
                                            <?php include('char_1.php') ?>
                                            <img src="<?= base_url('assets/uploads/konfigurasi/' . $konfigurasi->banner_char_1) ?>" width="70%" alt="">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-3 float-right">
                                            <label for=""><strong> Banner Char 2</strong></label>
                                        </div>
                                        <div class="col-md-8">
                                            <?php include('char_2.php') ?>
                                            <img src="<?= base_url('assets/uploads/konfigurasi/' . $konfigurasi->banner_char_2) ?>" width="70%" alt="">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-3 float-right">
                                            <label for=""><strong> Banner Char 3</strong></label>
                                        </div>
                                        <div class="col-md-8">
                                            <?php include('char_3.php') ?>
                                            <img src="<?= base_url('assets/uploads/konfigurasi/' . $konfigurasi->banner_char_3) ?>" width="70%" alt="">
                                        </div>
                                    </div><br>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- </div> -->

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