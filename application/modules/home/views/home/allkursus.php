			<!--Main Start-->
			<div class="wt-haslayout wt-innerbannerholder">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
							<div class="wt-innerbannercontent">
								<div class="wt-title">
									<h2>New Articles</h2>
								</div>
								<ol class="wt-breadcrumb">
									<li><a href="index.html">Home</a></li>
									<li class="wt-active">Articles</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- <main id="wt-main" class="wt-main wt-haslayout"> -->
			<!--Categories Start-->
			<section class="wt-haslayout wt-main-section">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="wt-sectionhead wt-textcenter">
							<div class="wt-sectiontitle">
								<h2>KURSUS</h2>
								<span>Professional by categories</span>
							</div>
						</div>
						<!--Categories End-->

						<div class="wt-articletabshold">
							<ul class="wt-navarticletab nav navbar-nav">
								<li class="nav-item">
									<a class="active" id="all-tab" data-toggle="tab" href="#semua">Semua</a>
								</li>
								<li class="nav-item">
									<a id="umum-tab" data-toggle="tab" href="#umum">Umum</a>
								</li>
								<li class="nav-item">
									<a id="olahraga-tab" data-toggle="tab" href="#olahraga">Olahraga</a>
								</li>
								<li class="nav-item">
									<a id="musik-tab" data-toggle="tab" href="#musik">Musik</a>
								</li>
							</ul>
							<div class="tab-content wt-haslayout">
								<div class="wt-contentarticle tab-pane active fade show" id="semua">
									<div class="row">
										<div class="wt-categoryexpl">
											<?php foreach ($kursus as $row) { ?>
												<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-left">

													<div class="wt-categorycontent" style="border-bottom: 3px solid #ff5851">
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
													<a href="javascript:void(0)" class="wt-btn">View All</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="wt-contentarticle tab-pane fade" id="umum">
									<div class="row">
										<div class="wt-categoryexpl">
											<?php foreach ($kursus as $row) { ?>
												<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-left">

													<div class="wt-categorycontent" style="border-bottom: 3px solid #ff5851">
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
													<a href="javascript:void(0)" class="wt-btn">View All</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="wt-contentarticle tab-pane fade" id="olahraga">
									<div class="row">
										<div class="wt-categoryexpl">
											<?php foreach ($kursus as $row) { ?>
												<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-left">

													<div class="wt-categorycontent" style="border-bottom: 3px solid #ff5851">
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
													<a href="javascript:void(0)" class="wt-btn">View All</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="wt-contentarticle tab-pane fade" id="musik">
									<div class="row">
										<div class="wt-categoryexpl">
											<?php foreach ($kursus as $row) { ?>
												<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-left">

													<div class="wt-categorycontent" style="border-bottom: 3px solid #ff5851">
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
													<a href="javascript:void(0)" class="wt-btn">View All</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>