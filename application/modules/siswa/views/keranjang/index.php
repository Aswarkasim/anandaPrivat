<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<section class="wt-haslayout wt-dbsectionspace wt-proposals">
	<div class="row">
		<div class="col-12">
			<div class="wt-dashboardbox">
				<div class="wt-dashboardboxtitle">
					<h2>Keranjang</h2>
				</div>
				<div class="wt-dashboardboxcontent wt-rcvproposala">
					<div class="wt-freelancerholder wt-rcvproposalholder">
						<div class="wt-tabscontenttitle">
							<h2>Keranjang Kursus</h2>
						</div>
						<div class="wt-managejobcontent">
							<?php foreach ($keranjang as $row) { ?>
								<div class="wt-userlistinghold wt-featured wt-proposalitem">
									<!-- <span class="wt-featuredtag"><img src="<?= base_url('assets/') ?>images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style mCS_img_loaded"></span> -->
									<figure class="wt-userlistingimg">
										<img src="<?= base_url('assets/uploads/icons/' . $row->icon) ?>" alt="image description" class="mCS_img_loaded">
									</figure>
									<div class="wt-proposaldetails">
										<div class="wt-contenthead">
											<div class="wt-title">
												<a href="usersingle.html"> <?= $row->nama_kursus ?></a>
											</div>
										</div>
										<div class="wt-proposalfeedback">
											<ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
												<li><span><i style="color: #2ECC71;" class="fa fa-user-circle-o"> </i><?= $row->nama_lengkap ?></span></li>
												<li><span><i class="fa fa-handshake-o"></i><?= $row->jumlah_pertemuan ?> pertemuan</span></li>
												<li><span class="wt-dashboradclock"><i class="far fa-clock"></i> <?= $row->hari ?></span></li>
												<li><span class="wt-clicksavefolder"><i class="ti-timer"></i> <?= $row->nama_waktu ?> (<?= $row->awal . ' - ' . $row->akhir ?>) </span></li>

											</ul>
										</div>
									</div>
									<div class="wt-rightarea">
										<div class="ml-3 wt-btnarea">
											<!-- <button type="button" data-toggle="modal" data-target="#bayar" class="wt-btn" style="background-color:#2ecc71">Buat Tagihan</button> -->
											<a href="<?= base_url('siswa/pembayaran/index/' . $row->id_order) ?>" class="wt-btn" style="background-color:#2ecc71;color:white">Pembayaran</a>
											<button type="button" href="<?= base_url('siswa/keranjang/batal/' . $row->id_order) ?>" disabled="disable" class="wt-btn tombol-batal-order">Batal</button>
										</div>
										<div class="wt-hireduserstatus">
											<h5>Rp <?= nominal($row->total) ?>,-</h5>
											<span><?= $row->nama_paket ?></span>
										</div>

									</div>
								</div>
							<?php } ?>
						</div>
						<div class="mt-4 wt-updatall">
							<i class="ti-credit-card"></i>
							<span><?= 'Rp.' . nominal($totalHarga->total) ?></span>
							<button type="button" href="javascript:void(0);" class="wt-btn" data-toggle="modal" data-target="#total">Buat Tagihan Semua</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<?php include('bayarsemua.php') ?>