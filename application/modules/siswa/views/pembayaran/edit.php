<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<section class="wt-haslayout wt-dbsectionspace wt-proposals">
	<div class="row">
		<div class="col-6">
			<div class="wt-dashboardbox">
				<div class="wt-dashboardboxtitle">
					<h2>Pembayaran Kursus</h2>
				</div>

				<?php echo form_open_multipart('siswa/pembayaran/edit/' . $pembayaran->id_order) ?>
				<form method="post">
					<div class="container-fluid"><br>
						<div class="form-group">
							<br>
							<?php
							echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i>', '</div>');

							if (isset($error)) {
								echo '<div class="alert alert-danger"><i class="fa fa-warning"></i>';
								echo $error;
								echo '</div>';
							}
							?>
						</div>
						<div class="form-group">
							<label for="">Metode Pembayaran</label>
							<span class="wt-select">
								<select name="metode">
									<option value="none">--Pilih Metode--</option>
									<option value="transfer" <?php if ($pembayaran->metode == "transfer") {
																	echo "selected";
																} ?>>Transfer</option>
									<option value="cod" <?php if ($pembayaran->metode == "cod") {
															echo "selected";
														} ?>>Bayar ditempat</option>
								</select>
							</span>
						</div>
						<div class="form-group">
							<label for="">Asal BANK</label>
							<input type="text" name="asal" value="<?= $pembayaran->asal ?>" placeholder="Contoh : BNI" class="form-control">
							<small>Kosongkan jika bayar langsung</small>
						</div>
						<div class="form-group">
							<label for="">Tanggal Pembayaran</label>
							<input type="date" name="tanggal" value="<?= $pembayaran->tanggal ?>" class="form-control">
						</div>
						<div class="form-group form-group-label">
							<div class="wt-labelgroup">
								<label for="filep">
									<span class="wt-btn">Select Files</span>
									<input type="file" name="bukti" id="filep">
								</label>
								<span>Drop files here to upload</span>
								<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
							</div>
						</div>
						<div class="form-group">
							<img src="<?= base_url('assets/uploads/pembayaran/' . $pembayaran->bukti) ?>" alt="" width="300px">
						</div>
						<div class="modal-footer">
							<button type="button" class="wt-btn" data-dismiss="modal">Close</button>
							<button type="submit" class="wt-btn" style="background-color: #00cc8d">Simpan Perubahan</button>
						</div>
					</div>
				</form>
				<?php echo form_close() ?>
			</div>
		</div>
	</div>
</section>