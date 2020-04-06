

<div class="main-content">
	<section class="section">
			     <div class="alert alert-info text-center" role="alert">
			 	<strong>FORM EDIT CONTENT</strong>
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

		<?php foreach($tentang as $ttg) : ?>
			
				<form method="post" action="<?php echo base_url(). 'content_satu/update_tentang'?>" enctype="multipart/form-data">

					<div class="row justify-content-center d-flex">
						<!-- isi -->
						<div class="col-lg-12 mt-3 ">
							<div class="form-group">
					<label for="isi">Isi Tentang</label>
					<input type="hidden" name="id" class="form-control"
						value="<?php echo $ttg->id ?>">
					<textarea class="ckeditor " id="ckedtor" name="tentang"><?php echo $ttg->tentang ?></textarea>
					 
				</div>
						</div>
 						<!-- Last isi -->
			      
			     </div>
 						 <button type="submit" class="btn btn-primary mt-3">Simpan</button>
			  </form>

		<?php endforeach; ?>
		</div>
	</div>
</section>
</div>