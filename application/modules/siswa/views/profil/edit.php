<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="wt-haslayout wt-dbsectionspace">
        <div class="wt-dashboardbox wt-dashboardtabsholder">
            <div class="wt-dashboardboxtitle">
                <h2>My Profile</h2>
            </div>

            <?php

            //echo form_open_multipart('siswa/profil/edit/' . $profil->id_siswa);

            ?>
            <form action="<?= base_url('siswa/profil/edit/' . $profil->id_siswa) ?>" method="post" enctype="multipart/form-data" class="wt-formtheme wt-formprojectinfo wt-formcategory container-fluid">
                <div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">

                    <div class="row">

                        <div class="col-md-6">
                            <?php echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ', '</div>');  ?>
                            <div class="wt-yourdetails wt-tabsinfo">
                                <div class="wt-tabscontenttitle">
                                    <h2>Identitas</h2>
                                </div>

                                <fieldset>
                                    <div class="form-group">
                                        <input type="text" value="<?= $profil->nama_lengkap ?>" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" value="<?= $profil->pekerjaan ?>" name="pekerjaan" class="form-control" placeholder="Pekerjaan">
                                    </div>
                                    <div class="form-group form-group-half">
                                        <input type="text" value="<?= $profil->no_telp ?>" name="no_telp" class="form-control" placeholder="Nomor Telepon">
                                    </div>
                                    <div class="form-group form-group-half">
                                        <span class="wt-select">
                                            <select name="gender">
                                                <option value="">
                                                    <?php if ($profil->gender == '') {
                                                        echo "Jenis Kelamin";
                                                    } else {
                                                        echo $profil->gender;
                                                    } ?>
                                                </option>
                                                <option value="Pria">Pria</option>
                                                <option value="Wanita">Wanita</option>
                                            </select>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" value="<?= $profil->alamat ?>" name="alamat" class="form-control" placeholder="Alamat Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="about" class="form-control" placeholder="Tentang Saya"><?= $profil->about ?></textarea>
                                    </div>
                                </fieldset>

                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="wt-yourdetails wt-tabsinfo">
                                <div class="wt-tabscontenttitle">
                                    <h2>Social Media</h2>
                                </div>
                                <fieldset>
                                    <div class="form-group">
                                        <input type="text" name="fb" value="<?= $profil->fb ?>" class="form-control" placeholder="Facebook">
                                    </div>

                                    <div class="form-group form-group-half">
                                        <input type="text" value="<?= $profil->twitter ?>" name="twitter" class="form-control" placeholder="Twitter">
                                    </div>
                                    <div class="form-group form-group-half">
                                        <input type="text" name="ig" value="<?= $profil->ig ?>" class="form-control" placeholder="Instagram">
                                    </div>

                                </fieldset>
                            </div>
                            <div class="wt-bannerphoto wt-tabsinfo">
                                <div class="wt-tabscontenttitle">
                                    <h2>Foto Profil</h2>
                                </div>
                                <div class="wt-profilephotocontent">
                                    <fieldset>
                                        <div class="form-group form-group-label">
                                            <div class="wt-labelgroup">
                                                <label for="filew">
                                                    <span class="wt-btn">Select Files</span>
                                                    <input type="file" name="foto" id="filew">
                                                </label>
                                                <span>Drop files here to upload</span>
                                                <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
                                            </div>
                                            <br>
                                            <div class="thumbnails">
                                                <img width="300px" src="<?= base_url('assets/uploads/images/' . $profil->foto) ?>" alt="">
                                            </div>
                                        </div>


                                    </fieldset>
                                    <fieldset class="text-center">
                                        <button type="submit" class="wt-btn float-md-right mt-3">Simpan Perubahan</button>
                                    </fieldset>
                                </div>
                            </div>

                        </div>


                    </div>


                </div>
            </form>

            <?php form_close()
            ?>
        </div>
    </div>
</div>
</div>