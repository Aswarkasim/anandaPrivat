<main id="wt-main" class="">
    <!--Sidebar Start-->

    <div class="wt-haslayout wt-dbsectionspace row">
        <div class="wt-dashboardbox wt-dashboardtabsholder col-12 col-xl-6">
            <div class="wt-dashboardboxtitle">
                <h2>POIN TENTOR <?= strtoupper($order->nama_lengkap) ?></h2>
            </div>
            <div style="width: 100%;" class="wt-tabscontent tab-content">
                <div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">
                    <div class="wt-skills row">

                        <ul class="wt-accordionhold accordion">
                            <li>
                                <div class="wt-accordiontitle collapsed" id="headingtwo2" data-toggle="collapse" data-target="#collapsetwo2" aria-expanded="false">
                                    <span>Lihat lampiran bukti</span>
                                </div>
                                <div class="wt-accordiondetails collapse" id="collapsetwo2" aria-labelledby="headingtwo2" style="">
                                    <img src="<?php echo base_url('assets/uploads/pembayaran/' . $order->bukti) ?>" alt="">
                                </div>
                            </li>
                        </ul>
                        <div class="col-12 col-lg-6 text-center mb-5">

                            <div class=" wt-insightsitem wt-dashboardbox my-4" style="border-bottom: 3px solid #ff5851">
                                <div class="wt-title text-center">
                                    <h3><i class="fa fa-money" aria-hidden="true"></i><br>
                                        <?= nominal($poin) ?></h3>
                                </div>

                                <div class="wt-insightdetails">
                                    <a href="">Poin Saat ini</a>
                                </div>
                            </div>
                            <div class=" wt-insightsitem wt-dashboardbox my-4" style="border-bottom: 3px solid #ff5851">
                                <div class="wt-title text-center">
                                    <h3><i class="fa fa-money" aria-hidden="true"></i><br>
                                        <?= nominal($order->jumlah_poin) ?></h3>
                                </div>

                                <div class="wt-insightdetails">
                                    <a href="">Request</a>
                                </div><br><br>
                            </div>


                        </div>

                        <div class="col-12 col-lg-6 text-center">
                            <form action="<?= base_url('admin/poin/submitPoin/' . $order->id_order_poin) ?>" method="post">
                                <div class=" wt-insightsitem wt-dashboardbox my-4" style="border-bottom: 3px solid #ff5851">
                                    <div class="wt-title text-center">
                                        <h3><i class="fa fa-money" aria-hidden="true"></i><br>
                                            <?= 'Rp. ' . nominal($order->jumlah_bayar) ?></h3>
                                    </div>

                                    <div class="wt-insightdetails">
                                        <a href="">Jumlah Bayar</a>
                                    </div>
                                </div>
                                <div class=" wt-insightsitem wt-dashboardbox my-4" style="border-bottom: 3px solid #ff5851">
                                    <div class="form-group">
                                        <input type="number" name="poin" class="form-control" placeholder="Tambahkan Poin" value="">
                                    </div>
                                    <div class="form-group">
                                        <select name="operasi" id="" class="wt-select">
                                            <option value="tambah">Tambahkan</option>
                                            <option value="kurang">Kurangi</option>
                                        </select>
                                    </div>
                                </div>
                                <a href="<?= base_url('admin/poin') ?>" class="wt-btn ml-2 tombol-submitPoin">Kembali</a>
                                <button type="submit" class="wt-btn">Submit</button>
                            </form>

                        </div>






                    </div>
                </div>
            </div>
        </div>
    </div>
</main>