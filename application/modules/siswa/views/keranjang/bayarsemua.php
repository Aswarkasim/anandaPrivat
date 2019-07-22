<!-- MODAL -->
<div class="modal fade" id="total" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
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
                                    <div class="wt-proposalamount-holder">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Total Pembayaran</h2>
                                        </div>
                                        <div class="wt-proposalamount accordion">
                                            <ul style="margin-top: 0;" class="wt-totalamount collapse show" id="collapseOne" aria-labelledby="headingOne" style="">
                                                <li>
                                                    <?php foreach ($keranjang as $row) {  ?>
                                                        <h3><strong>“ <?= $row->nama_kursus ?> ”</strong> <em>- <?= $row->total ?></em></h3>
                                                    <?php
                                                    } ?>
                                                </li>
                                                <li>
                                                    <h3><strong>Total Pembayaran</strong> <em>- <?= 'Rp.' . nominal($totalHarga->total) ?></em></h3>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mt-4 wt-tabscontenttitle">
                                            <h2>Metode Pembayaran</h2>
                                        </div>
                                        <form class="wt-formtheme wt-formproposal">
                                            <fieldset>
                                                <div class="form-group">
                                                    <span class="wt-select">
                                                        <select>
                                                            <option value="transfer">Transfer Via Bank</option>
                                                        </select>
                                                        <small class="text text-alert">Bayar semua hanya bsia dilakukan dengan metode transfer</small>
                                                    </span>
                                                </div>
                                            </fieldset>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- User Listing End-->
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="wt-btn" data-dismiss="modal">Close</button>
                <button type="button" class="wt-btn">Buat Tagihan</button>
            </div>
        </div>
    </div>
</div>