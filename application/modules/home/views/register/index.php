<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<!--Inner Home Banner Start-->
<div class="wt-haslayout wt-innerbannerholder">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                <div class="wt-innerbannercontent">
                    <div class="wt-title">
                        <h2>Join Now For FREE</h2>
                    </div>
                    <ol class="wt-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="wt-active">Join Now</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Inner Home End-->
<!--Main Start-->
<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
    <!--Register Form Start-->
    <div class="wt-haslayout wt-main-section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xs-12 col-sm-12 col-md-10 push-md-1 col-lg-8 push-lg-2">
                    <div class="wt-registerformhold">
                        <div class="wt-registerformmain">
                            <div class="wt-registerhead">
                                <div class="wt-title">
                                    <h3>Dapatkan Akun Untuk Login</h3>
                                </div>
                            </div>

                            <div class="wt-joinforms">
                                <?php
                                echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ', '</div>');


                                if (isset($error)) {
                                    echo '<div class="alert alert-danger"><i class="fa fa-warning"></i>';
                                    echo $error;
                                    echo '</div>';
                                }
                                ?>
                                <form action="<?= base_url('home/register') ?>" method="post" class="wt-formtheme wt-formregister" enctype="multipart/form-data">
                                    <fieldset class="wt-registerformgroup">
                                        <div class="form-group">
                                            <span class="wt-select">
                                                <select name="role">
                                                    <option value="none">-- Registrasi Sebagai --</option>
                                                    <option value="Siswa">Siswa</option>
                                                    <option value="Tentor">Tentor</option>
                                                </select>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="<?= set_value('nama_user') ?>" name="nama_user" class="form-control" placeholder="NAMA PENGGUNA">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="<?= set_value('email') ?>" name="email" class="form-control" placeholder="EMAIL">
                                        </div>
                                        <div class="form-group form-group-half">
                                            <input type="password" name="password" class="form-control" placeholder="PASSWORD">
                                        </div>
                                        <div class="form-group form-group-half">
                                            <input type="password" name="re_password" class="form-control" placeholder="PASSWORD">
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit" class="wt-btn btn-block">Regiatrasi</button>
                                        </div>
                                    </fieldset>
                                </form>

                            </div>
                        </div>
                        <!-- <div class="wt-registerformfooter">
                            <span>Already Have an Account? <a href="javascript:void(0);">Login Now</a></span>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Register Form End-->
</main>
<!--Main End-->


<style>
    /* Border uipload */
    .form-group-label .wt-labelgroup {
        float: left;
        width: 100%;
        padding: 10px;
        border: 2px dashed #ddd;
    }

    .form-group-label label {
        margin: 0;
        display: inline-block;
        vertical-align: middle;
    }

    /* Border uipload */

    /* Hilangkan tombol input */
    .form-group-label label input {
        display: none;
    }



    .wt-fileuploading {
        float: right;
        display: none;
        padding: 16px 0;
        font-size: 12px;
        line-height: 16px;
        font-style: normal;
    }
</style>