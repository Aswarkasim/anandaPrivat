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


					<form class="wt-formtheme wt-userform">
						<fieldset class="text-center">
							<div class="row">
								<div class="col-md-6 offset-md-3">


									<div class="wt-description mt-2">
										<p class="text-center">Setelah Menambah Kompetensi Silahkan Tunggu Pesan Dari Admin Untuk Panggilan Tes Wawancara</p>
									</div>
									<div class="form-group">
										<span class="wt-select">
											<select>
												<option>Kursus</option>
												<?php foreach ($kursus as $row) { ?>
		                                            <option value="<?= $row->id_kursus; ?>"><?= $row->nama_kursus; ?></option>
		                                        <?php  } ?>
											</select>
										</span>
									</div>
									<div class="form-group">
										<span class="wt-select">
											<select>
												<option>Jenjang</option>
												<option>SD</option>
												<option>SMP</option>
												<option>SMA</option>
												<option>Perguruan Tinggi</option>
											</select>
										</span>
									</div>

									<a href="#" class="wt-btn float-md-right mt-3">Tambah Kompetensi</a>
								</div>
							</div>
						</fieldset>
					</form>
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
										<th>No</th>
										<th>Kompetensi</th>
										<th>Jenjang</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>1</th>
										<td>Matematika</td>
										<td>SMP</td>
										<td><a class="btn btn-danger text-white"><small>Tidak Aktif</small></a>
										</td>
									</tr>
									<tr>
										<th>2</th>
										<td>Matematika</td>
										<td>SMA</td>
										<td><a class="btn btn-success text-white"><small>Aktif</small></a></td>
									</tr>
									<tr>
										<th>3</th>
										<td>Rekayasa Perangkat Lunak</td>
										<td>Perguruan Tinggi</td>
										<td>
											<a href="#" class="btn btn-warning"><small>Menunggu Wawancara</small></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</form>
				</div>


			</div>
		</div>
	</div>
</div>