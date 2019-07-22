<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<section class="wt-haslayout wt-dbsectionspace wt-proposals">
    <div class="row">
        <div class="col-6">
            <div class="wt-dashboardbox">
                <div class="wt-dashboardboxtitle">
                    <h2>Pembayaran Kursus <?= $order->nama_kursus ?></h2>
                </div>

                <form class="wt-formtheme wt-formprojectinfo wt-formcategory">
                    <div class="wt-haslayout">
                        <div class="container-fluid">
                            <div class="row justify-content-md-center mt-2">
                                <h3><?= $order->nama_kursus ?> </h3>
                                <div class="wt-proposalamount-holder">
                                    <div class="wt-tabscontenttitle">
                                        <h2>Total Pembayaran</h2>
                                    </div>
                                    <div class="wt-proposalamount accordion">
                                        <ul style="margin-top: 0;" class=" wt-totalamount collapse show" id="collapseOne" aria-labelledby="headingOne" style="">
                                            <li>
                                                <h3><i class="fa fa-dollar-sign mr-3"></i><em> Rp <?= nominal($order->total) ?></em></h3> <br>
                                                “ <?= $order->nama_kursus ?> ” <?= $order->nama_paket ?> (<?= $order->hari ?>) / <?= $order->awal ?> - <?= $order->akhir ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-4 wt-tabscontenttitle col-6">
                                        <h2>Bank <?= $pembayaran->asal ?></h2>
                                    </div>
                                    <div class="mt-4 wt-tabscontenttitle col-6">
                                        <h2>Tanggal <?= $pembayaran->tanggal ?></h2>
                                    </div>
                                    <div class="mt-4 wt-tabscontenttitle col-6">
                                        <h2>Status</h2>
                                    </div>
                                    <div class="mt-4 wt-tabscontenttitle col-6">
                                        <div class="">
                                            <?php if ($pembayaran->is_valid == 'Valid') {
                                                echo '<span class="alert alert-success"><i class="ti-check"></i>--Valid--</span>';
                                            } else if ($pembayaran->is_valid == 'Unvalid') {
                                                echo '
												<span class="alert alert-danger"><i class="fa fa-warning"></i>--Tidak Valid--</span>';
                                            } else if ($pembayaran->is_valid == 'Menunggu') {
                                                echo '<span class="alert alert-primary"><i class="ti-reload"></i>--Menunggu Konfirmasi--</span>';
                                            }
                                            ?>
                                        </div>
                                    </div>

                                    <form class="wt-formtheme wt-formproposal">
                                </div>
                                <div class="wt-attachments wt-attachmentsvtwo">
                                    <div class="wt-tabscontenttitle">
                                        <h2>Bukti Pembayaran</h2>
                                    </div>
                                    <ul class="">
                                        <div class="text-center">
                                            <form class="wt-formtheme wt-formprojectinfo wt-formcategory">
                                                <fieldset>
                                                    <div class="form-group form-group-label">
                                                        <div class="thumbnails">
                                                            <img src="<?= base_url('assets/uploads/pembayaran/' . $pembayaran->bukti) ?>" alt="" width="300px">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </ul>
                                </div>



                                <div class="modal-footer text-center">
                                    <a href="<?= base_url('siswa/pembayaran/edit/' . $pembayaran->id_order) ?>" class="wt-btn" data-dismiss="modal"><i class="fa fa-edit"></i> Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>