<main>
	<div class="wt-haslayout wt-main-section">
		<!-- User Listing Start-->
		<div class="container-fluid">
			<div class="row">
				<div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 float-left">
						<div class="wt-proposalholder">
							<div class="wt-proposalhead">
								<h2><?= $online->nama_kursus ?></h2>
								<ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
									<li><span><i class="fa fa-graduation-cap" aria-hidden="true"> <?= $online->nama_lengkap ?></i></span></li>
								</ul>
							</div>
							<div class="wt-btnarea text-center">
								<a href="<?= base_url() ?>siswa/kursus" class="wt-btn mt-2">Kembali</a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
						<div class="row">
							<div class="col-12 col-sm-6">
								<div class="wt-companysdetails">
									<figure class="wt-companysimg">
										<img src="<?= base_url('assets/uploads/banners/' . $online->banner) ?>" alt="img description">
									</figure>
									<div class="wt-companysinfo">
										<figure><img src="<?= base_url('assets/uploads/images/' . $online->foto) ?>" alt="img description"></figure>
										<div class="wt-title">
											<i class="fa fa-male mr-1" style="color:dodgerblue" aria-hidden="true"></i> Pria
											<h2><?= $online->nama_lengkap ?></h2>
										</div>
										<ul class="wt-postarticlemeta">
											<li>
												<a href="javascript:void(0);">
													<span><?= $online->pekerjaan ?></span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<span>Lihat Selengkapnya</span>
												</a>
											</li>
										</ul>
										<h4><i class="fa fa-check-circle text-success ml-2 float-right"></i></h4>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="wt-companysdetails" style="background-color:#ff5851">
									<div class="wt-companysinfo" style="border-left:solid 5px lightgreen">
										<br><br><br>
										<div class="wt-title pr-4">
											<h2 class="text-white"><b><?= $online->nama_paket ?></b><i class="fa fa-check-circle text-white ml-2 float-left"></i></h2>
										</div>
										<ul class="wt-postarticlemeta">
											<li>
												<i class=" lnr lnr-clock text-white"></i>
												<span class="text-white"><?= $online->hari ?></span>
											</li>
											<li>
												<span class="text-white"><?= $online->jumlah_pertemuan ?>x pertemuan</span>

											</li>
										</ul>
									</div>
								</div>
								<div class="wt-companysdetails" style="background-color:#ff5851">

									<div class="wt-companysinfo" style="border-left:solid 5px lightgreen">
										<br><br><br>
										<div class="wt-title pr-4">
											<h2 class="text-white"><b><?= $online->nama_waktu ?></b><i class="fa fa-check-circle text-white ml-2 float-left"></i></h2>
										</div>
										<ul class="wt-postarticlemeta">
											<li>
												<i class=" lnr lnr-clock text-white"></i>
												<span class="text-white"><?= $online->awal . ' - ' . $online->akhir ?></span>
											</li>
										</ul>
									</div>
								</div>
								<div class="wt-companysdetails" style="background-color:#ff5851">

									<div class="wt-companysinfo" style="border-left:solid 5px lightgreen">
										<br><br><br>
										<ul class="wt-postarticlemeta">
											<div class="wt-title pr-4">
												<h2 class="text-white"><b><?= $online->nama_jenjang ?></b><i class="fa fa-check-circle text-white ml-2 float-left"></i></h2>
											</div>
											<li>
												<span class=" text-white"><b><?= $online->nama_tingkat ?><br></span>
											</li>
										</ul>
									</div>
								</div>
							</div>

						</div>


					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
						<div class="wt-widget wt-reportjob text-center">
							<div class="wt-widgettitle">
								<h2>Kirim keluhan Anda ke Admin</h2>
							</div>
							<div class="wt-widgetcontent">
								<?php
								echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i>', '</div>')
								?>
								<form action="<?= base_url('siswa/kursus/kirim_pesan') ?>" method="post">
									<div class="form-group">
										<textarea class="form-control" name="isi" placeholder="Pesan . . ."></textarea>
									</div>
									<div class="form-group mt-2">
										<button type="submit" class="wt-btn tombol-hapus">Kirim Pesan</button>
									</div>
								</form>
							</div>
						</div>
						</aside>
					</div>

					<div class="wt-updatall">
						<i class="ti-announcement"></i>
						<span>Klik Tombol Di Samping Jika Kursus Telah Selesai</span>
						<a class="wt-btn" href="javascript:void(0);">Kursus Selesai</a>
					</div>
				</div>
			</div>
		</div>
		<!-- User Listing End-->
	</div>
</main>