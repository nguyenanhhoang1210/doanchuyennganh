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
			<h3 class="text-xs-center">Thông tin nhóm</h3>
			<hr>
	</div>
	<div class="container">
		<div class="row">
			<?php foreach ($dulieutucontroller as $key => $value): ?>
				<div class="col-sm-4">
					<div class="card card-block">
						<p class="card-text">Họ tên sinh viên 1 : <?= $value['hoten1']?></p>
						<p class="card-text">MSSV 1 : <?= $value['mssv1']?></p>
						<p class="card-text">Họ tên sinh viên 2 : <?= $value['hoten2']?></p>
						<p class="card-text">MSSV 2 : <?= $value['mssv2']?></p>
						<p class="card-text">Lớp : <?= $value['lop']?></p>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</body>
</html>