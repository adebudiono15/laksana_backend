<div class="container-fluid">

          <div class="alert alert-info text-center" role="alert">
 		<strong>DATA CONTENT HERO</strong>
			</div>
			<?php if ($this->session->flashdata('tambah') ) : ?>
		<div class="col-lg">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  CONTENT <strong> <?= $this->session->flashdata('tambah'); ?></strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</div>
	<?php endif; ?>
		<table class="table table-hover table-striped table-bordered ">
			<thead>
				<tr class="col">
				<th class="text-center">ISI</th>
				<th colspan="3" class="text-center">AKSI</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no=1;
				foreach($tentang as $ttg) : ?>
					<tr>
					<td><?php echo character_limiter ($ttg->tentang, 200);?></td>
					<td><?php echo anchor('content_satu/edit_tentang/' .$ttg->id, '<div class="btn btn-primary btn-primary btn-sm justify-content-center d-flex"><i class="fa fa-edit"></i></div>') ?></td>
				<?php endforeach; ?>

				</tr>
			</tbody>
		</table>
	</div>
</div>

    