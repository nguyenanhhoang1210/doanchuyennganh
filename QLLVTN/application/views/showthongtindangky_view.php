
	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Xem dữ liệu</title>

	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<body>
	<div class="container">
			<h3 class="text-xs-center">Thông tin giảng viên</h3>
			<hr>
	</div>
	<div class="container">
		<div class="row">
			<?php foreach ($dulieutucontroller1 as $key => $value): ?>
				<div class="col-sm-4">
					<div class="card card-block">
						<p class="card-text">Họ tên giảng viên: <?= $value['tengv']?></p>
						<p class="card-text">Hướng đề tài : <?= $value['tenhuonglvtn']?></p>
						
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</body>
</html>