<div class="col-xs-12 mx-auto">
	<div class="wt-haslayout wt-dbsectionspace">
		<div class="wt-dashboardbox wt-dashboardtabsholder">
			<div class="wt-dashboardboxtitle">
				<h2>My Profile</h2>
			</div>


			<div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">

				<div class="wt-yourdetails wt-tabsinfo">
					<div class="wt-tabscontenttitle">
						<h2>Tambah Kompetensi</h2>
					</div>


					<fieldset class="text-center" style="border: 1px solid #fcfcfc">
						<div class="row">
							<div class="col-md-6 offset-md-3">

								<?php
								echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ', '</div>');

								if (isset($error)) {
									echo '<div class="alert alert-danger"><i class="fa fa-warning"></i></div>';
									echo $error;
									echo '</div>';
								}

								echo form_open('tentor/kompetensi/add')
								?>

								<div class="wt-description mt-2">
									<p class="text-center">Setelah Menambah Kompetensi Silahkan Tunggu Pesan Dari Admin Untuk Panggilan Tes Wawancara</p>
								</div>

								<form method="post">
									<div class="form-group">
										<span class="wt-select">
											<select name="id_kursus">

												<option value="none">Kursus</option>
												<?php foreach ($kursus as $row) { ?>
													<option value="<?= $row->id_kursus ?>"><?= $row->nama_kursus ?> </option>
												<?php } ?>
											</select>
										</span>
									</div>
									<div class="form-group">
										<span class="wt-select">
											<select name="id_jenjang">
												<option value="none">Jenjang</option>
												<?php foreach ($jenjang as $row) { ?>
													<option value="<?= $row->id_jenjang ?>"><?= $row->nama_jenjang ?></option>
												<?php } ?>
											</select>
										</span>
									</div>

									<button name="submit" type="submit" class="wt-btn float-md-right mt-3">Tambah Kompetensi</button>
								</form>
								<?= form_close() ?>

							</div>
						</div>
					</fieldset>
				</div>

				<div class="wt-yourdetails wt-tabsinfo">
					<div class="wt-tabscontenttitle">
						<h2>Kompetensi</h2>
					</div>
					<form class="wt-formtheme wt-userform">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead style="background-color:#ff5851" class="text-white">
									<tr>
										<th width="80px">No</th>
										<th>Kompetensi</th>
										<th>Jenjang</th>
										<th width="180px">Status</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($kompetensi as $row) { ?>
										<tr>
											<th><?= $no; ?></th>
											<td><?= $row->nama_kursus; ?></td>
											<td><?= $row->nama_jenjang; ?></td>
											<td>
												<?php
												if ($row->is_aktif == 1) {
													echo '<a class="btn btn-success text-white"><small>Aktif</small></a>';
												} else if ($row->is_aktif == 0) {
													echo '<a class="btn btn-danger text-white"><small>Tidak Aktif</small></a>';
												} else {
													echo '<a href="#" class="btn btn-warning"><small>Menunggu Wawancara</small></a>';
												} ?>
											</td>
										</tr>
										<?php $no++;
									} ?>
								</tbody>
							</table>
						</div>
					</form>

				</div>


			</div>
		</div>
	</div>
</div>