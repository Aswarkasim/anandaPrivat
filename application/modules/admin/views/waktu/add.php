<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<section class="wt-haslayout">
    <div class="row">
        <div class="col-md-4">

            <div class="wt-haslayout wt-dbsectionspace">
                <div class="wt-dashboardbox wt-dashboardtabsholder">

                    <div class="wt">

                        <div class="container-fluid"><br><br>
                            <div class="row">
                                <div class="col-md-12">

                                    <?php
                                    echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ', '</div>');

                                    echo form_open_multipart('admin/waktu/add')
                                    ?>

                                    <div class="form-group">
                                        <label for=""><strong>NAMA WAKTU</strong></label>
                                        <input type="text" name="nama_waktu" class="form-control" placeholder="NAMA WAKTU">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>AWAL</strong></label>
                                        <input type="time" id="timepicker1" name="awal" class="form-control" placeholder="AWAL">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>AKHIR</strong></label>
                                        <input type="time" id="timepicker2" name="akhir" class="form-control" placeholder="AKHIR">
                                    </div>
                                    <script>
                                        $('#timepicker1').timepicker({
                                            uiLibrary: 'bootstrap4'
                                        });
                                        $('#timepicker2').timepicker({
                                            uiLibrary: 'bootstrap4'
                                        });
                                    </script>

                                    <div class="form-group">
                                        <button type="submit" class="wt-btn"><i class="fa fa-save"></i> Simpan</button>
                                    </div>

                                    <?= form_close() ?>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
</section>