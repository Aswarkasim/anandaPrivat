<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<section class="wt-haslayout wt-dbsectionspace wt-proposals">
    <div class="row">
        <div class="col-6">
            <div class="wt-dashboardbox">
                <div class="wt-dashboardboxtitle">
                    <h2>Pembayaran Kursus</h2>
                </div>

                <div class="container-fluid">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 pull-right">
                                <label for=""><strong> Asal bank</strong></label>
                            </div>
                            <div class="col-md-4 pull-right">
                                <label for=""><strong><?= $pembayaran->asal ?></strong></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 pull-right">
                                <label for=""><strong> Tanggal Transfer</strong></label>
                            </div>
                            <div class="col-md-4 pull-right">
                                <label for=""><strong><?= $pembayaran->tanggal ?></strong></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 pull-right">
                                <label for=""><strong> Metode</strong></label>
                            </div>
                            <div class="col-md-4 pull-right">
                                <label for=""><strong><?= $pembayaran->metode ?></strong></label>
                            </div>
                        </div>
                    </div>


                    <ul class="wt-accordionhold accordion">
                        <li>
                            <div class="wt-accordiontitle collapsed" id="headingtwo2" data-toggle="collapse" data-target="#collapsetwo2" aria-expanded="false">
                                <span>Lihat lampiran bukti</span>
                            </div>
                            <div class="wt-accordiondetails collapse" id="collapsetwo2" aria-labelledby="headingtwo2" style="">
                                <img src="<?= base_url('assets/uploads/pembayaran/' . $pembayaran->bukti) ?>" alt="">
                            </div>
                        </li>
                    </ul>

                    <?= form_open('admin/pembayaran/detail/' . $pembayaran->id_pembayaran) ?>
                    <form method="post">
                        <div class="form-group">
                            <?= validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i>', '</div>') ?>
                            <label for="">Status</label>
                            <span class="wt-select">
                                <select name="is_valid">
                                    <option value="none">--Pilih Status--</option>
                                    <option <?php if ($pembayaran->is_valid == "Valid") {
                                                echo "selected";
                                            } ?> value="Valid">Valid</option>
                                    <option <?php if ($pembayaran->is_valid == "Unvalid") {
                                                echo "selected";
                                            } ?> value="Unvalid">Tidak Valid</option>
                                </select>
                            </span>
                        </div>

                        <div class="modal-footer">
                            <a href="<?= base_url('admin/pembayaran') ?>" class="wt-btn" data-dismiss="modal">Kembali</a>
                            <button type="submit" class="wt-btn" style="background-color: #00cc8d">Simpan Perubahan</button>
                        </div>
                    </form>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>