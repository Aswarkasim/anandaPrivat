<a href="javascript:void(0);" class="wt-btn" data-toggle="modal" data-target="#sub_bannerModal">Ubah</a><br>
<!-- Popup Start-->
<div class="modal fade wt-offerpopup" tabindex="-1" role="dialog" id="sub_bannerModal">
    <div class="modal-dialog" role="document">
        <div class="wt-modalcontent modal-content">
            <div class="wt-popuptitle">
                <h2>Sub Banner</h2>
                <a href="javascript;void(0);" class="wt-closebtn close"><i class="fa fa-close" data-dismiss="modal" aria-label="Close"></i></a>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('admin/konfigurasi/sub_banner') ?>
                <form class="wt-formtheme wt-formpopup" method="post">
                    <input type="hidden" value="aa" name="bantusub_banner">
                    <div class="form-group form-group-label">
                        <div class="wt-labelgroup">
                            <label for="filepSub">
                                <span class="wt-btn">Select Files</span>
                                <input type="file" name="sub_banner" id="filepSub">
                            </label>
                            <span>Pilih File</span>
                            <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
                        </div>
                    </div>
                    <div class="form-group wt-btnarea">
                        <button type="submit" class="wt-btn"><i class="fa fa-edit"></i> Ubah</button>
                    </div>
                </form>
                <?php echo form_close();  ?>
            </div>
        </div>
    </div>
</div>
<!-- Popup End-->