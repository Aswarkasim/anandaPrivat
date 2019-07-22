<section class="wt-haslayout wt-dbsectionspace wt-proposals">
	<div class="row">
		<div class="col-md-12">
			<div class="wt-dashboardbox">
				<div class="wt-dashboardboxtitle">
					<h2>Tagihan <?= count($tagihan) ?></h2>
				</div>
				<div class="wt-dashboardboxcontent wt-rcvproposala">
					<div class="wt-freelancerholder wt-rcvproposalholder">
						<div class="wt-tabscontenttitle">
							<h2>Tagihan</h2>
						</div>
						<div class="wt-managejobcontent">
							<?php foreach ($tagihan as $row) { ?>
								<div class="wt-userlistinghold wt-featured wt-proposalitem">
									<!-- <span class="wt-featuredtag"><img src="<?= base_url('assets/') ?>images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style mCS_img_loaded"></span> -->
									<figure class="wt-userlistingimg">
										<img src="<?= base_url('assets/uploads/icons/' . $row->icon) ?>" alt="image description" class="mCS_img_loaded">
									</figure>
									<div class="wt-proposaldetails">
										<div class="wt-contenthead">
											<div class="wt-title">
												<a href="usersingle.html"> <?= $row->nama_kursus  ?></a>
											</div>
										</div>
										<div class="wt-proposalfeedback">
											<span class="wt-starsvtwo">
												<i style="color: #2ECC71;" class="fa fa-user-circle-o"></i>
											</span>
											<span class="wt-starcontent"> <?= $row->nama_lengkap  ?></span>
										</div>
									</div>
									<div class="wt-rightarea">
										<div class="wt-btnarea">
											<a href="<?= base_url('siswa/tagihan/') ?>" class="wt-btn">Checkout</a>
											<!-- <button type="button" href="javascript:void(0);" class="wt-btn" data-toggle="modal" data-target="#menungguValidasi">Checkout</button> -->
											<?php include('upload.php') ?>
										</div>
										<div class="wt-hireduserstatus">
											<h5><?= 'Rp ' . nominal($row->total_tagihan)  ?>-</h5>
											<span>Paket II</span>
										</div>
										<div class="wt-hireduserstatus">
											<?php if ($row->is_fix == 'Valid') {
												echo '<i class="ti-check"></i>
												<span class="alert alert-success">--Valid--</span>';
											} else if ($row->is_fix == 'Tidak Valid') {
												echo '<i class="fa fa-warning"></i>
												<span class="alert alert-danger">--Tidak Valid--</span>';
											} else if ($row->is_fix == 'Menunggu Pembayaran') {
												echo '<i class="ti-reload"></i><span class="alert alert-primary">--Menunggu Pembayaran--</span>';
											}
											?>

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