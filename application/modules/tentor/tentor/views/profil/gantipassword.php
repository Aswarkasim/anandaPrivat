<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 mx-auto">
    <div class="wt-haslayout wt-dbsectionspace">
        <div class="wt-dashboardbox wt-dashboardtabsholder">
            <div class="wt-dashboardboxtitle">
                <h2>My Profile</h2>
            </div>


            <div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">

                <div class="wt-yourdetails wt-tabsinfo text-center">
                    <div class="wt-tabscontenttitle">
                        <h2>Ganti Password</h2>
                    </div>
                    <form action="<?= base_url('tentor/profil/ubahPassword') ?>" method="post" class="wt-formtheme wt-userform">
                        <?php
                        echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i>', '</div>');

                        if (isset($pesan_er)) {
                            echo '<div class="alert alert-danger"><i class="fa fa-warning"></i> ';
                            echo $pesan_er;
                            echo '</div>';
                        }
                        ?>
                        <fieldset>
                            <div class="form-group">
                                <input type="password" name="password_lama" class="form-control" placeholder="Password lama">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password_baru" class="form-control" placeholder="Password baru">
                            </div>
                            <div class="form-group">
                                <input type="password" name="re_password" class="form-control" placeholder="Ketik ulang password baru">
                            </div>
                            <button type="submit" class="wt-btn float-md-right mt-3">Simpan Perubahan</button>
                        </fieldset>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
</div>