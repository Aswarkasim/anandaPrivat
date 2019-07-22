<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
		<div class="wt-haslayout wt-dbsectionspace">
			<div class="wt-dashboardbox wt-dashboardtabsholder">
				<div class="wt-dashboardboxtitle">
					<h2>Edit Profil</h2>
				</div>
				<div style="width: 100%;" class="wt-tabscontent tab-content">
					<div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">
						<div class="wt-profilephoto wt-tabsinfo">
							<div class="wt-tabscontenttitle">
								<h2>Foto Sampul</h2>
							</div>
							<div class="wt-profilephotocontent">
								<?php
								echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ', '</div>');


								if (isset($error)) {
									echo '<div class="alert alert-danger"><i class="fa fa-warning"></i>';
									echo $error;
									echo '</div>';
								}
								?>
								<form action="<?php echo base_url('tentor/profil/sampul') ?>" enctype="multipart/form-data" method="post" class="wt-formtheme wt-formprojectinfo wt-formcategory">
									<fieldset>
										<input type="text" hidden value="aa" name="bantu" id="">
										<div class="form-group form-group-label">
											<div class="wt-labelgroup">
												<label for="filep">
													<span class="wt-btn">Select Files</span>
													<input type="file" name="banner" id="filep">
												</label>
												<span>Drop files here to upload</span>
												<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
											</div>
										</div>
										<img width="200px" src="<?= base_url('assets/uploads/banners/' . $profil->banner) ?>" alt="">
										<div class="form-group text-right">
											<button type="submit" class="wt-btn">Simpan</button>
										</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>



</div>