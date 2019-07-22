<section class="wt-haslayout">
    <div class="row">
        <div class="col-md-12">

            <div class="wt-haslayout wt-dbsectionspace">
                <div class="wt-dashboardbox wt-dashboardtabsholder">
                    <div class="wt">
                        <div class="container-fluid"><br><br>
                            <p>
                                <a href="" class="btn btn-primary">
                                    <i class="fa fa-plus"></i> Tambah
                                </a>
                            </p>

                            <table class="table table-hover DataTables">
                                <thead class="text-white" style="background-color:#ff5851">
                                    <tr>
                                        <th width="50px">No</th>
                                        <th width="100px">TANGGAL</th>
                                        <th width="100px">METODE</th>
                                        <th>ID SISWA</th>
                                        <th width="150px">STATUS</th>
                                        <th width="100px">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($pembayaran as $row) { ?>
                                        <tr>
                                            <th><?= $no ?></th>
                                            <th><?= $row->tanggal ?></a> </th>
                                            <th><?= strtoupper($row->metode) ?></a> </th>
                                            <th color="grey"><a href="<?= base_url('admin/pembayaran/detail/' . $row->id_pembayaran) ?>"><?= $row->id_user ?></a> </th>
                                            <th>
                                                <?php if ($row->is_valid == 'Menunggu') {
                                                    echo '<span class="btn btn-warning">Menunggu</span>';
                                                } elseif ($row->is_valid == 'Valid') {
                                                    echo '<span class="btn btn-success">Valid</span>';
                                                } elseif ($row->is_valid == 'Unvalid') {
                                                    echo '<span class="btn btn-danger">Tidak Valid</span>';
                                                } ?>

                                            </th>
                                            <th><a href="" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i></a></th>
                                        </tr>
                                        <?php $no++;
                                    } ?>
                                </tbody>
                            </table>

                            <br><br>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- MODAL -->
<div class="modal fade" id="validasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
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
                        <div class="container-fluid">
                            <div class="row justify-content-md-center">
                                <h3>Judul Kursus </h3>
                                <div class="wt-proposalamount-holder">
                                    <div class="wt-tabscontenttitle">
                                        <h2>Total Pembayaran</h2>
                                    </div>
                                    <div class="wt-proposalamount accordion">
                                        <ul style="margin-top: 0;" class="wt-totalamount collapse show" id="collapseOne" aria-labelledby="headingOne" style="">
                                            <li>
                                                <h3><i class="fa fa-dollar-sign mr-3"></i><em> Rp 120.000</em></h3> <br>
                                                “ Judul Kursus ” Paket I (Sen, Rab, Jum) / 12.00 - 13.00
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-4 wt-tabscontenttitle col-6">
                                        <h2>Bank BNI</h2>
                                    </div>
                                    <div class="mt-4 wt-tabscontenttitle col-6">
                                        <h2>Tanggal 30 / 12 / 2019</h2>
                                    </div>
                                    <form class="wt-formtheme wt-formproposal">
                                </div>
                                <fieldset>
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
                                                                <img src="http://localhost/project/anandaprivate/assets/uploads/images/default.jpg" alt="" width="300px">
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </ul>
                                    </div>
                                </fieldset>
                                <div class="modal-footer text-center">
                                    <button type="button" class="wt-btn" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>