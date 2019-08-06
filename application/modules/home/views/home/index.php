			<!--Main Start-->
			<!-- <main id="wt-main" class="wt-main wt-haslayout"> -->
			<!--Categories Start-->
			<section class="wt-haslayout wt-main-section">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
							<div class="wt-sectionhead wt-textcenter">
								<div class="wt-sectiontitle">
									<h2>KURSUS</h2>
									<span>Professional by categories</span>
								</div>
							</div>
						</div>
						<div class="wt-categoryexpl">
							<?php foreach ($kursus as $row) { ?>
								<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-left">
									<div class="wt-categorycontent">
										<figure><img src="<?= base_url('assets/uploads/icons/' . $row->icon)  ?>" alt="image description"></figure>
										<div class="wt-cattitle">
											<h3><a href="javascrip:void(0);"><?= strtoupper($row->nama_kursus) ?></a></h3>
										</div>
										<div class="wt-categoryslidup">
											<p><?= character_limiter($row->deskripsi, 50) ?></p>
											<a href="<?= base_url('home/order/buat_order/' . $row->id_kursus) ?>">Pilih <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							<?php  } ?>

							<div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
								<div class="wt-btnarea">
									<a href="<?= base_url('home/home/allkursus') ?>" class="wt-btn">View All</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Categories End-->
			<!--Join Company Info End-->