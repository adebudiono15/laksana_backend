

<div class="main-content">
	<section class="section">
		<div class="alert alert-info text-center" role="alert">
			<strong>FORM EDIT PANEL</strong>
		</div>
		<div class="card">
			<div class="card-body">
				<?php if( validation_errors () ) : ?>
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>
							<?= validation_errors(); ?>	
						</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif; ?>

				<?php foreach($panel as $pnl) : ?>

					<form method="post" action="<?php echo base_url(). 'panel/update_panel'?>" enctype="multipart/form-data">
						<div class="row justify-content-center d-flex">

							<!-- Last conten1 -->

							<div class="container fluid">
								<div class="alert alert-success" role="alert">
									<h4 class="alert-heading">Panel 1</h4>
									<hr>
									<!-- icon1 -->
									<div class="col-lg-12 mt-3 ">
										<div class="form-group">
											<label for="icon1">Icon</label>
											<input type="hidden" name="id" class="form-control" value="<?php echo $pnl->id ?>">
											<textarea class="form-control" name="icon1" id="icon1" rows="1"><?php echo $pnl->icon1 ?></textarea>
										</div>
									</div>
									<!-- Last icon -->
									<!-- headling -->
									<div class="col-lg-12 mt-3 ">
										<div class="form-group">
											<label for="heading1">Headline</label>
											<input type="text" name="heading1" class="form-control" id="heading1" placeholder="Headline" value="<?php echo $pnl->heading1 ?>">
										</div>
									</div>
									<!-- Last headling1 -->
									<!-- conten1 -->
									<div class="col-lg-12 mt-3 ">
										<div class="form-group">
											<label for="content1">Content</label>
											<input type="text" name="content1" class="form-control" id="content1" value="<?php echo $pnl->content1 ?>">
										</div>
									</div> <hr>

								</div>
							</div>
							<!-- Panel 2 -->
							<div class="container fluid">
								<div class="alert alert-success" role="alert">
									<h4 class="alert-heading">Panel 2</h4>
									<hr>
									<!-- icon2 -->
									<div class="col-lg-12 mt-3 ">
										<div class="form-group">
											<label for="icon">Icon</label>
											<textarea class="form-control" name="icon2" id="icon2" rows="1"><?php echo $pnl->icon2 ?></textarea>
										</div>
									</div>
									<!-- Last icon2 -->
									<!-- headling2 -->
									<div class="col-lg-12 mt-3 ">
										<div class="form-group">
											<label for="headling2">Headline</label>
											<input type="text" name="headling2" class="form-control" id="headling2" value="<?php echo $pnl->headling2 ?>">
										</div>
									</div>
									<!-- Last headling2 -->
									<!-- conten2 -->
									<div class="col-lg-12 mt-3 ">
										<div class="form-group">
											<label for="content1">Content</label>
											<input type="text" name="content2" class="form-control" id="content2" value="<?php echo $pnl->content2 ?>">
										</div>
									</div> <hr>
									<!-- Last conten2 -->
								</div>
							</div>
							<!-- Panel 3 -->
							
							<div class="container fluid">
								<div class="alert alert-success" role="alert">
									<h4 class="alert-heading">Panel 3</h4>
									<hr>
									<!-- icon3 -->
									<div class="col-lg-12 mt-3 ">
										<div class="form-group">
											<label for="icon3">Icon</label>
											<textarea class="form-control" name="icon3" id="icon3" rows="1"><?php echo $pnl->icon3 ?></textarea>
										</div>
									</div>
									<!-- Last icon3 -->
									<!-- headling2 -->
									<div class="col-lg-12 mt-3 ">
										<div class="form-group">
											<label for="headling3">Headline</label>
											<input type="text" name="headling3" class="form-control" id="headling3" value="<?php echo $pnl->headling3 ?>">
										</div>
									</div>
									<!-- Last headling3 -->
									<!-- content3-->
									<div class="col-lg-12 mt-3 ">
										<div class="form-group">
											<label for="content3">Content</label>
											<input type="text" name="content3" class="form-control" id="content3" value="<?php echo $pnl->content3 ?>">
										</div>
									</div> <hr>
									<!-- Last conten3 -->
								</div>
							</div>

							<!-- Panel 4 -->
							<div class="container fluid">
								<div class="alert alert-success" role="alert">
									<h4 class="alert-heading">Panel 4</h4>
									<hr>
									<!-- icon4 -->
									<div class="col-lg-12 mt-3 ">
										<div class="form-group">
											<label for="icon4">Icon</label>
											<textarea class="form-control" name="icon4" id="icon4" rows="1"><?php echo $pnl->icon4 ?></textarea>
										</div>
									</div>
									<!-- Last icon3 -->
									<!-- headling2 -->
									<div class="col-lg-12 mt-3 ">
										<div class="form-group">
											<label for="headling4">Headline</label>
											<input type="text" name="headling4" class="form-control" id="headling4" value="<?php echo $pnl->headling4 ?>">
										</div>
									</div>
									<!-- Last headling3 -->
									<!-- content3-->
									<div class="col-lg-12 mt-3 ">
										<div class="form-group">
											<label for="content4">Content</label>
											<input type="text" name="content4" class="form-control" id="content4" value="<?php echo $pnl->content4 ?>">
										</div>
									</div> <hr>
									<!-- Last conten4 -->
								</div>
							</div>

							<!-- Panel 5 -->
							<div class="container fluid">
								<div class="alert alert-success" role="alert">
									<h4 class="alert-heading">Panel 5</h4>
									<hr>
									<!-- icon5 -->
									<div class="col-lg-12 mt-3 ">
										<div class="form-group">
											<label for="icon5">Icon</label>
											<textarea class="form-control" name="icon5" id="icon5" rows="1"><?php echo $pnl->icon5 ?></textarea>
										</div>
									</div>
									<!-- Last icon3 -->
									<!-- headling2 -->
									<div class="col-lg-12 mt-3 ">
										<div class="form-group">
											<label for="headling5">Headline</label>
											<input type="text" name="headling5" class="form-control" id="headling5" value="<?php echo $pnl->headling5 ?>">
										</div>
									</div>
									<!-- Last headling3 -->
									<!-- content3-->
									<div class="col-lg-12 mt-3 ">
										<div class="form-group">
											<label for="content5">Content</label>
											<input type="text" name="content5" class="form-control" id="content5" value="<?php echo $pnl->content5 ?>">
										</div>
									</div> <hr>
									<!-- Last conten5-->

								</div>
							</div>

							<!-- Panel 6 -->
							<div class="container fluid">
								<div class="alert alert-success" role="alert">
									<h4 class="alert-heading">Panel 6</h4>
									<hr>

									<!-- icon6 -->
									<div class="col-lg-12 mt-3 ">
										<div class="form-group">
											<label for="icon6">Icon</label>
											<textarea class="form-control" name="icon6" id="icon6" rows="1"><?php echo $pnl->icon6 ?></textarea>
										</div>
									</div>
									<!-- Last icon3 -->
									<!-- headling2 -->
									<div class="col-lg-12 mt-3 ">
										<div class="form-group">
											<label for="headling6">Headline</label>
											<input type="text" name="headling6" class="form-control" id="headling6" value="<?php echo $pnl->headling6 ?>">
										</div>
									</div>
									<!-- Last headling3 -->
									<!-- content3-->
									<div class="col-lg-12 mt-3 bg ">
										<div class="form-group">
											<label for="content6">Content</label>
											<input type="text" name="content6" class="form-control" id="content6" value="<?php echo $pnl->content6 ?>">
										</div>
									</div>
									<!-- Last conten6-->
								</div>
							</div>



						</div>
						<div class="row">
							<div class="col justify-content-center d-flex">
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
						</div>
					</form>

				<?php endforeach; ?>
			</div>
		</div>
	</section>
</div>