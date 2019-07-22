<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
    <div class="wt-haslayout wt-dbsectionspace">
        <div class="wt-dashboardbox wt-dashboardtabsholder">
            <div class="wt-dashboardboxtitle">
                <h2>My Profile</h2>
            </div>

            <?php

            echo form_open_multipart('tentor/profil/edit/' . $profil->id_tentor);
            echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ', '</div>');
            ?>
            <form action="" method="post">
                <div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">


                    <div class="wt-yourdetails wt-tabsinfo">
                        <div class="wt-tabscontenttitle">
                            <h2>Identitas</h2>
                        </div>

                        <fieldset>
                            <div class="form-group">
                                <input type="text" value="<?= $profil->nama_lengkap ?>" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan">
                            </div>
                            <div class="form-group form-group-half">
                                <input type="text" name="no_telp" class="form-control" placeholder="Nomor Telepon">
                            </div>
                            <div class="form-group form-group-half">
                                <span class="wt-select">
                                    <select name="gender">
                                        <option value="">Jenis Kelamin</option>
                                        <option value="">Pria</option>
                                        <option value="">Wanita</option>
                                    </select>
                                </span>
                            </div>
                            <div class="form-group">
                                <span class="wt-select">
                                    <select name="id_provinsi">
                                        <option value="">Provinsi</option>
                                        <option value="">Sulawesi Selatan</option>
                                        <option value="">Bone</option>
                                        <option value="">Jeneponto</option>
                                    </select>
                                </span>
                            </div>
                            <div class="form-group form-group-half">
                                <span class="wt-select">
                                    <select name="id_kota">
                                        <option value="">Kota/Kabupaten</option>
                                        <option value="">Makassar</option>
                                        <option value="">Bone</option>
                                        <option value="">Jeneponto</option>
                                    </select>
                                </span>
                            </div>
                            <div class="form-group form-group-half">
                                <span class="wt-select">
                                    <select name="id_kecamatan">
                                        <option value="">Kecamatan</option>
                                        <option value="">Wajo</option>
                                        <option value="">Manggala</option>
                                        <option value="">Antang</option>
                                    </select>
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap">
                            </div>
                            <div class="form-group">
                                <textarea name="about" class="form-control" placeholder="Tentang Saya"></textarea>
                            </div>
                        </fieldset>

                    </div>
                    <div class="wt-yourdetails wt-tabsinfo">
                        <div class="wt-tabscontenttitle">
                            <h2>Social Media</h2>
                        </div>
                        <fieldset>
                            <div class="form-group">
                                <input type="text" name="fb" class="form-control" placeholder="Facebook">
                            </div>

                            <div class="form-group form-group-half">
                                <input type="text" name="twitter" class="form-control" placeholder="@Twitter">
                            </div>
                            <div class="form-group form-group-half">
                                <input type="text" name="ig" class="form-control" placeholder="@Instagram">
                            </div>

                        </fieldset>
                    </div>

                    <div class="wt-bannerphoto wt-tabsinfo">
                        <div class="wt-tabscontenttitle">
                            <h2>Banner Photo</h2>
                        </div>
                        <div class="wt-profilephotocontent">
                            <fieldset>
                                <div class="form-group form-group-label">
                                    <div class="wt-labelgroup">
                                        <label for="filew">
                                            <span class="wt-btn">Select Files</span>
                                            <input type="file" name="banner" id="filew">
                                        </label>
                                        <span>Drop files here to upload</span>
                                        <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
                                    </div>
                                </div>


                            </fieldset>
                            <fieldset class="text-center">
                                <button type="submit" class="wt-btn float-md-right mt-3">Simpan Perubahan</button>
                            </fieldset>
                        </div>
                    </div>


                </div>
            </form>

            <?= form_close() ?>
        </div>
    </div>
</div>
</div>