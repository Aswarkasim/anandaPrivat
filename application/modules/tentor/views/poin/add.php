<section class="wt-haslayout wt-dbsectionspace wt-proposals">
	<div class="row">
		<div class="col-5">
			<div class="wt-dashboardbox">
				<div class="wt-dashboardboxtitle">
					<h2>Poin</h2>
				</div>

				<div class="wt-dashboardboxcontent wt-rcvproposala">
					<?php
					echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i>', '</div>');
					echo form_open_multipart('tentor/poin/add') ?>
					<div class="wt-freelancerholder wt-rcvproposalholder">
						<div class="wt-tabscontenttitle">
							<h2>Tambah Poin</h2>
						</div>
						<div style="width: 100%;" class="form-group form-group-half">
							<input type="number" name="jumlah_poin" value="<?= set_value('jumlah_poin') ?>" class="form-control" placeholder="Masukkan Nominal Poin">
						</div>
						<div class="wt-tabscontenttitle">
							<h2>Jumlah Bayar</h2>
						</div>
						<div style="width: 100%;" class="form-group form-group-half">
							<input type="number" name="jumlah_bayar" class="form-control" value="<?= set_value('jumlah_bayar') ?>" placeholder="Masukkan Jumlah Bayar">
						</div>

						<div class="form-group">
							<label for="">Metode Pembayaran</label>
							<span class="wt-select">
								<select name="metode">
									<option value="none">--Pilih Metode--</option>
									<option value="transfer">Transfer</option>
									<option value="cod">Bayar ditempat</option>
								</select>
							</span>
						</div>

						<div class="wt-profilephoto wt-tabsinfo">
							<div class="wt-tabscontenttitle">
								<h2>Bukti Transfer</h2>
							</div>
							<div class="wt-profilephotocontent">
								<form class="wt-formtheme wt-formprojectinfo wt-formcategory">\
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
								</form>
							</div>
						</div>

						<div class="mt-4 wt-updatall">
							<i class="ti-credit-card"></i>
							<button type="submit" href="javascript:void(0);" class="wt-btn">Tambah</button>
						</div>


					</div>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
</section>