<section class="wt-haslayout wt-dbsectionspace">
	<div class="row">
		<div class="col-xs-12">
			<div class="wt-dashboardbox">
				<div class="wt-dashboardboxtitle">
					<h2>KURSUS</h2>
				</div>
				<div class="wt-dashboardboxcontent wt-jobdetailsholder">
					<div class="wt-completejobholder">
						<div class="wt-tabscontenttitle">
							<h2>Daftar Kursus Yang Diikuti</h2>
						</div>

						<?php foreach ($online as $row) { ?>
							<div class="wt-managejobcontent mt-4 mb-3">
								<div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
									<!-- <span class="wt-featuredtag"><img src="<?= base_url('assets/images/'); ?>featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span> -->
									<div class="wt-userlistingcontent wt-userlistingcontentvtwo">

										<div class="wt-contenthead">
											<div class="wt-title">
												<h2><?= $row->nama_kursus . ' ' . $row->nama_jenjang . ' ' . $row->nama_tingkat ?></h2>
											</div>
											<ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
												<li><span class="wt-dashboraddoller"><i class="ti-bag"></i> <?= $row->nama_paket ?></span></li>
												<li><span> <i class="fa fa-handshake-o" aria-hidden="true"></i> <?= $row->jumlah_pertemuan ?> x pertemuan</span></li>
												<li><span class="wt-dashboradclock"><i class="far fa-clock"></i> <?= $row->hari ?></span></li>
												<li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="ti-timer" aria-hidden="true"></i> <?= $row->awal . ' - ' . $row->akhir ?></a></li>
											</ul>
										</div>

										<div class="wt-rightarea">
											<div class="wt-btnarea">
												<span></span>
												<?php if ($row->is_read == 0) { ?>
													<a href="<?= base_url('siswa/kursus/detail_kursus/' . $row->id_online) ?>" class="btn btn-primary"><i class="fa fa-envelope"></i> Lihat</a>
												<?php } else { ?>
													<a href="<?= base_url('siswa/kursus/detail_kursus/' . $row->id_online) ?>" class="btn btn-success"><i class="fa fa-envelope-open"></i> Lihat</a>
												<?php } ?>
											</div>
											<div class="wt-hireduserstatus">
												<h4 style="color: #349AE0">
													<?php echo $row->is_done ?>
												</h4><span><?= $row->nama_lengkap ?></span>
												<ul class="wt-hireduserimgs">
													<li>
														<figure><img src="<?= base_url('assets/uploads/images/' . $row->foto); ?>" alt="img description"></figure>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div><br>
						<?php } ?>
					</div>
					<nav class="wt-pagination wt-savepagination">
						<?= $this->pagination->create_links() ?>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>