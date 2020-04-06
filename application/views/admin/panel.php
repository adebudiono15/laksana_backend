<div class="container-fluid">

	<div class="alert alert-info text-center" role="alert">
		<strong>DATA CONTENT HERO</strong>
	</div>
	<div class="row">
		<div class="col justify-content-center d-flex">
			<a class="btn btn-primary mt-2 mb-3 " href="<?php echo ('panel/panduan')?>" role="button">Panduan edit icon dan content</a>
		</div>
		<div class="col justify-content-center d-flex">
			<a class="btn btn-primary mt-2 mb-3 " href="<?php echo ('panel/edit/8')?>" role="button">Edit panel</a>
		</div>
	</div>
	<?php if ($this->session->flashdata('tambah') ) : ?>
		<div class="col-lg">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				PANEL <strong> <?= $this->session->flashdata('tambah'); ?></strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
	<?php endif; ?>
	<table class="table table-hover table-striped table-bordered ">
		<thead>
			<tr class="col">
				<th class="text-center">NO</th>
				<th class="text-center">ICON</th>
				<th class="text-center">HEADLING</th>
				<th class="text-center">CONTENT</th>
			</tr>
		</thead>
		<tbody>
			<!-- 1 -->
			<?php 
			$no=1;
			foreach($panel as $pnl) : ?>
				<td><?php echo $no++ ?></td>
				<td><?php echo character_limiter ($pnl->icon1, 200);?></td>
				<td><?php echo character_limiter ($pnl->heading1, 200);?></td>
				<td><?php echo character_limiter ($pnl->content1, 200);?></td>
			</tr>
		<?php endforeach; ?>
		<!-- 2 -->
		<?php 
		$no=2;
		foreach($panel as $pnl) : ?>
			<td><?php echo $no++ ?></td>
			<td><?php echo character_limiter ($pnl->icon2, 200);?></td>
			<td><?php echo character_limiter ($pnl->headling2, 200);?></td>
			<td><?php echo character_limiter ($pnl->content2, 200);?></td>
		</tr>
	<?php endforeach; ?>
	<!-- 3 -->
	<?php 
	$no=3;
	foreach($panel as $pnl) : ?>
		<td><?php echo $no++ ?></td>
		<td><?php echo character_limiter ($pnl->icon3, 200);?></td>
		<td><?php echo character_limiter ($pnl->headling3, 200);?></td>
		<td><?php echo character_limiter ($pnl->content3, 200);?></td>
	</tr>
<?php endforeach; ?>
<!-- 4 -->
<?php 
$no=4;
foreach($panel as $pnl) : ?>
	<td><?php echo $no++ ?></td>
	<td><?php echo character_limiter ($pnl->icon4, 200);?></td>
	<td><?php echo character_limiter ($pnl->headling4, 200);?></td>
	<td><?php echo character_limiter ($pnl->content4, 200);?></td>
</tr>
<?php endforeach; ?>
<!-- 5 -->
<?php 
$no=5;
foreach($panel as $pnl) : ?>
	<td><?php echo $no++ ?></td>
	<td><?php echo character_limiter ($pnl->icon5, 200);?></td>
	<td><?php echo character_limiter ($pnl->headling5, 200);?></td>
	<td><?php echo character_limiter ($pnl->content5, 200);?></td>
</tr>
<?php endforeach; ?>
<!-- 6 -->
<?php 
$no=6;
foreach($panel as $pnl) : ?>
	<td><?php echo $no++ ?></td>
	<td><?php echo character_limiter ($pnl->icon6, 200);?></td>
	<td><?php echo character_limiter ($pnl->headling6, 200);?></td>
	<td><?php echo character_limiter ($pnl->content6, 200);?></td>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>

