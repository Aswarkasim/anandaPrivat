<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
	<div class="wt-haslayout wt-dbsectionspace">
		<div class="wt-dashboardbox wt-dashboardtabsholder">
			<div class="wt-dashboardboxtitle">
				<h2>Provinsi</h2>
			</div>
			<div style="width: 100%;" class="wt-tabscontent tab-content">
				<div class="wt-location wt-tabsinfo">
					<div class="wt-tabscontenttitle">
						<h2>Your Location</h2>
					</div>
					<form class="wt-formtheme wt-userform">
						<fieldset>
							<div class="form-group form-group-half">
								<input value="" type="textarea" name="address" class="form-control" placeholder="Your Address">
							</div>
							<div class="form-group form-group-half">
								<span class="wt-select">
									<select class="select2">
										<option value="">Provinsi</option>
										<?php foreach ($provinsi as $row) { ?>
											<option value="<?= $row->id_provinsi  ?>"><?= $row->nama_provinsi ?></option>
										<?php  } ?>
									</select>
								</span>
							</div>
							<div class="form-group form-group-half">
								<span class="wt-select">
									<select>
										<option value="">Kota</option>
										<option value="">
											<?php foreach ($kabupaten as $row) { ?>
											<option value="<?= $row->id_kabupaten  ?>"><?= $row->nama_kabupaten ?></option>
										<?php  } ?>
										</option>

									</select>
								</span>
							</div>
							<div class="form-group form-group-half">
								<span class="wt-select">
									<select>
										<option value="">Kecamatan</option>
										<option value="">
											<?php foreach ($kecamatan as $row) { ?>
											<option value="<?= $row->id_kecamatan  ?>"><?= $row->nama_kecamatan ?></option>
										<?php  } ?>
										</option>
									</select>
								</span>
							</div>
							<div class="form-group wt-formmap">
								<div id="wt-locationmap" class="wt-locationmap">

								</div>
							</div>
							<div class="form-group form-group-half">
								<input type="text" name="text" class="form-control" placeholder="Enter Longitude (Optional)">
							</div>
							<div class="form-group form-group-half">
								<input type="text" name="text" class="form-control" placeholder="Enter Latitude (Optional)">
							</div>
							<div class="form-group">
								<button type="submit" class="wt-btn">Simpan</button>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
	<script src="<?= base_url('assets/')  ?>js/vendor/jquery-3.3.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>