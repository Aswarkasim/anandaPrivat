<section class="wt-haslayout wt-dbsectionspace">
	<div class="row">
		<div class="col-xs-12">
			<div class="wt-dashboardbox">
				<div class="wt-dashboardboxtitle">
					<h2>PESAN</h2>
				</div>
				<div class="wt-dashboardboxcontent wt-jobdetailsholder">
					<div class="wt-completejobholder">
						<div class="wt-tabscontenttitle">
							<h2>Pesan Siswa</h2>
						</div>

						<div class="wt-managejobcontent">

							<?php foreach ($notif as $row) { ?>
								<div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
									<!-- <span class="wt-featuredtag"><img src="<?= base_url('assets/images/'); ?>featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span> -->
									<div class="wt-userlistingcontent wt-userlistingcontentvtwo">
										<div style="max-width: 70%;" class="wt-contenthead">
											<div class="wt-title">
												<h2><?= $row->nama_admin ?></h2>
											</div>

											<p><?= character_limiter($row->isi, 100) ?></p>
										</div>
										<div class="wt-rightarea">
											<div class="wt-btnarea">
												<span></span>
											</div>
											<div class="wt-hireduserstatus">
												<a href="<?= base_url('siswa/notif/detail/' . $row->id_notif) ?>" class="wt-btn">VIEW DETAILS</a>
											</div>
										</div>
										<div class="wt-rightarea">
											<div class="wt-btnarea">
												<span></span>
											</div>
											<div class="wt-hireduserstatus">
												<?php
												if ($row->is_read == 0) {
													echo '<i class="fa fa-envelope fa-3x text-not"></i><br><br>
														<h4><strong class="text-not">Belum dibaca</strong></h4>';
												} else {
													echo '<i class="fa fa-envelope-open fa-3x text-done"></i><br><br>
													<h4><strong class="text-done">Telah dibaca</strong></h4>';
												}
												?>

											</div>
										</div>
									</div>
								</div>
							<?php } ?>

						</div>

					</div>
				</div>
				<nav class="wt-pagination wt-savepagination">
					<ul>
						<li class="wt-prevpage"><a href="javascrip:void(0);"><i class="lnr lnr-chevron-left"></i></a></li>
						<li><a href="javascrip:void(0);">1</a></li>
						<li><a href="javascrip:void(0);">2</a></li>
						<li><a href="javascrip:void(0);">3</a></li>
						<li><a href="javascrip:void(0);">4</a></li>
						<li><a href="javascrip:void(0);">...</a></li>
						<li><a href="javascrip:void(0);">50</a></li>
						<li class="wt-nextpage"><a href="javascrip:void(0);"><i class="lnr lnr-chevron-right"></i></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</section>

<style>
	.text-done {
		color: green;
	}

	.text-not {
		color: red;
	}
</style>