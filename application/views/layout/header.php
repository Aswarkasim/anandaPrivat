	<!-- Sweet Alert -->
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

	<div class="gagal-login" data-flashdata="<?= $this->session->flashdata('msg_er') ?>"></div>
	<!-- End Sweet Alert -->
	<!-- Header Start -->
	<header id="wt-header" class="wt-header wt-haslayout">
		<div class="wt-navigationarea">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<strong class="wt-logo"><a href="index.html"><img src="<?= base_url('assets/')  ?>images/logo.png" alt="company logo here"></a></strong>
						<div class="wt-rightarea">
							<nav id="wt-nav" class="wt-nav navbar-expand-lg">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
									<i class="lnr lnr-menu"></i>
								</button>
								<div class="collapse navbar-collapse wt-navigation" id="navbarNav">
									<ul class="navbar-nav">
										<li class="menu-item-has-children page_item_has_children">
											<a href="<?= base_url('home') ?>">Main</a>
										</li>
										<li class="nav-item">
											<a href="howitworks.html">How It Works</a>
										</li>
										<li class="menu-item-has-children page_item_has_children">
											<a href="javascript:void(0);">Browse Jobs</a>
											<ul class="sub-menu">
												<li>
													<a href="joblisting.html">Job Listing</a>
												</li>
												<li class="current-menu-item">
													<a href="jobsingle.html">Job Single</a>
												</li>
												<li>
													<a href="jobproposal.html">Job Proposal</a>
												</li>
											</ul>
										</li>
										<li class="menu-item-has-children page_item_has_children">
											<a href="javascript:void(0);">View Freelancers</a>
											<ul class="sub-menu">
												<li>
													<a href="userlisting.html">User Listing</a>
												</li>
												<li class="current-menu-item">
													<a href="usersingle.html">User Single</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</nav>



							<div class="wt-loginarea">
								<figure class="wt-userimg">
									<img src="<?= base_url('assets/')  ?>images/user-login.png" alt="img description">
								</figure>
								<div class="wt-loginoption">
									<a href="javascript:void(0);" id="wt-loginbtn" class="wt-loginbtn">Login</a>
									<div class="wt-loginformhold">
										<div class="wt-loginheader">
											<span>Login</span>
											<a href="javascript:;"><i class="fa fa-times"></i></a>
										</div>

										<form action="<?= base_url('home/auth') ?>" method="post" class="wt-formtheme wt-loginform do-login-form">
											<fieldset>
												<div class="form-group">
													<input type="text" required name="email" class="form-control" placeholder="Email">
												</div>
												<div class="form-group">
													<input type="password" required name="password" class="form-control" placeholder="Password">
												</div>
												<div class="wt-logininfo">
													<button type="submit" href="javascript:;" class="wt-btn do-login-button">Login</button>
												</div>
											</fieldset>
											<div class="wt-loginfooterinfo">
												<a href="register.html">Create account</a>
											</div>
										</form>

										<!-- <form class="wt-formtheme wt-loginform do-forgot-password-form wt-hide-form">
										<fieldset>
											<div class="form-group">
												<input type="email" name="email" class="form-control get_password" placeholder="Email">
											</div>

											<div class="wt-logininfo">
												<a href="javascript:;" class="wt-btn do-get-password">Get Pasword</a>
											</div>
										</fieldset>
										<div class="wt-loginfooterinfo">
											<a href="javascript:void(0);" class="wt-show-login">Login</a>
											<a href="register.html">Create account</a>
										</div>
									</form> -->
									</div>
								</div>
								<a href="<?= base_url('home/register') ?>" class="wt-btn">Daftar</a>
							</div>

							<?php
							// $id_user = $this->session->userdata('id_user');
							// print_r($id_user);
							// die;

							$nama_user = "";
							$email = "";
							$foto = "";
							$role = "";
							if (($this->session->userdata('id_user')) != "") {
								$id_user = $this->session->userdata('id_user');
								$user = $this->Crud_model->listingOne('tbl_user', 'id_user', $id_user);
								$nama_user = $user->nama_user;
								$email = $user->email;
								$foto = $user->foto;
								$role = $user->role;
							}

							?>
							<div class="wt-userlogedin">
								<figure class="wt-userimg">
									<img src="<?php if ($foto) {
													echo base_url('assets/uploads/images/' . $foto);
												} else {
													echo base_url('assets/uploads/images/default.jpg');
												} ?>" alt="">
								</figure>
								<div class="wt-username">
									<h3><?= $nama_user ?></h3>
									<span><?= $role ?></span>
								</div>
								<nav class="wt-usernav">
									<ul>
										<li>
											<a href="<?= base_url($role . '/profil') ?>">
												<span>My Profile</span>
											</a>
										</li>
										<li class="menu-item-has-children page_item_has_children">
											<a href="javascript:void(0);">
												<span>Insights</span>
											</a>
											<ul class="sub-menu children">
												<li><a href="dashboard-insights.html">Insights</a></li>
												<li><a href="dashboard-insightsuser.html">Insights User</a></li>
											</ul>
										</li>
										<li>
											<a href="<?= base_url('home/auth/logout') ?>" class="tombol-logout">
												<span>Logout</span>
											</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--Header End-->