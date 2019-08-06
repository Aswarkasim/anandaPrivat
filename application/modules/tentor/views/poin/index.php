<div class="col-xs-12 mx-auto">
    <div class="wt-haslayout wt-dbsectionspace">
        <div class="wt-dashboardbox wt-dashboardtabsholder">
            <div class="wt-dashboardboxtitle">
                <h2>Deposit</h2>
            </div>


            <div class="wt-personalskillshold row">

                <div class="wt-yourdetails wt-tabsinfo col-12 col-lg-6">
                    <div class="wt-tabscontenttitle">
                        <h2>Jumlah Deposit</h2>
                    </div>
                    <div class="wt-insightsitem wt-dashboardbox ml-3">
                        <div class="wt-title text-center">
                            <h3><i class="fa fa-money" aria-hidden="true"></i><br>
                                <?= nominal($tentor->poin) ?></h3>
                        </div>

                        <div class="wt-insightdetails">
                            <a href="#">Poin</a>
                        </div>
                    </div>
                    <a href="<?= base_url('tentor/poin/add') ?>" class="wt-btn float-md-right mt-3">Order Poin</a>
                </div>

                <div class="wt-yourdetails wt-tabsinfo col-12 col-lg-6">
                    <div class="wt-tabscontenttitle">
                        <h2>Cairkan Deposit</h2>
                    </div>

                    <form action="<?= base_url('tentor/poin/pencairan') ?>" method="post" class="">
                        <div class="wt-description wt-formtheme wt-userform text-center">
                            <p>Jumlah Deposit Yang Dicairkan Minimal Rp. 500.000 <br> Jumlah Deposit Tidak Boleh Kurang Dari Rp. 200.000</p>
                        </div>
                        <div class="form-group ">
                            <label for="">Jumlah Pencairan</label>
                            <input type="text" name="poin" placeholder="200000" class="form-control">
                        </div>

                        <button type="submit" class="wt-btn float-md-right mt-3 tombol-cair">Cairkan</button>
                    </form>

                </div>


                <div class="wt-yourdetails wt-tabsinfo col-12">
                    <div class="container-fluid">
                        <ul class="wt-navarticletab nav navbar-nav">
                            <li class="nav-item">
                                <a class="active show" id="all-tab" data-toggle="tab" href="#ListOrderPoin">List Order Poin</a>
                            </li>
                            <li class="nav-item">
                                <a id="business-tab" data-toggle="tab" href="#ListPencairanPoin" class="">List Pencairan</a>
                        </ul>
                        <br>
                        <div class="tab-content wt-haslayout">

                            <!-- List Order -->
                            <?php include('list_order.php') ?>
                            <!-- End List Order -->
                            <!-- List Pencairan -->
                            <?php include('list_pencairan.php') ?>
                            <!-- End List Pencairan -->

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>