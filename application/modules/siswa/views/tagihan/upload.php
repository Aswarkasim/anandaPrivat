<!-- MODAL -->
<div class="modal fade" id="menungguValidasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="wt-tittle">
                    <span>Detail Pembayaran</span>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="wt-formtheme wt-formprojectinfo wt-formcategory">
                    <div class="wt-haslayout">
                        <!-- User Listing Start-->
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 push-lg-2">
                                    <div class="wt-proposalholder">
                                        <div class="wt-proposalhead">
                                            <h3>Judul Kursus </h3>
                                            <ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
                                                <li><span style="font-size: 12px;"><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i> Paket</span></li>
                                                <li><span style="font-size: 12px;"><i class="ti-location-pin"></i> Lokasi Kursus</span></li>
                                                <li><span style="font-size: 12px;"><i class="far fa-clock"></i> Durasi Kursus</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="wt-proposalamount-holder">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Total Pembayaran</h2>
                                        </div>
                                        <div class="wt-proposalamount accordion">
                                            <ul style="margin-top: 0;" class="wt-totalamount collapse show" id="collapseOne" aria-labelledby="headingOne" style="">
                                                <li>
                                                    <h3>( <i class="fa fa-dollar-sign"></i> ) <em>- Rp 120.000</em></h3>
                                                    <span><strong>“ Judul Kursus ”</strong> Paket I (Sen, Rab, Jum) / 12.00 - 13.00</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <fieldset>
                                            <div class="wt-attachments wt-attachmentsvtwo">
                                                <div class="wt-tabscontenttitle">
                                                    <h2>Upload Bukti Pembayaran</h2>
                                                </div>
                                                <ul class="">
                                                    <div class="">
                                                        <?php echo form_open_multipart('siswa/tagihan/uploadBukti/' . $row->id_tagihan)  ?>
                                                        <form method="post">
                                                            <div class="form-group">
                                                                <label for="">Asal BANK</label>
                                                                <input type="text" name="asal" placeholder="Contoh : BNI" class="form-control">
                                                                <small>Kosongkan jika bayar langsung</small>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Tanggal Pembayaran</label>
                                                                <input type="date" name="tanggal" class="form-control">
                                                            </div>
                                                            <fieldset>
                                                                <div class="form-group form-group-label">
                                                                    <div class="wt-labelgroup">
                                                                        <label for="filep">
                                                                            <span class="wt-btn">Select Files</span>
                                                                            <input type="file" name="bukti" id="filep">
                                                                        </label>
                                                                        <span>Drop files here to upload</span>
                                                                        <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <div class="modal-footer">
                                                                <button type="button" class="wt-btn" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="wt-btn" style="background-color: #00cc8d">Simpan Perubahan</button>
                                                            </div>
                                                        </form>
                                                        <?php form_close() ?>
                                                    </div>
                                                </ul>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- User Listing End-->
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>