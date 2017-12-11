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
						<h3 class="card-title">Mã nhóm:<?= $value['manhom'] ?></h3>
						<p class="card-text">Họ tên sinh viên 1 : <?= $value['hoten1']?></p>
						<p class="card-text">MSSV 1 : <?= $value['mssv1']?></p>
						<p class="card-text">Họ tên sinh viên 2 : <?= $value['hoten2']?></p>
						<p class="card-text">MSSV 2 : <?= $value['mssv2']?></p>
						<p class="card-text">Lớp : <?= $value['lop']?></p>
						<p class="card-text">Ngành: <?= $value['nganh']?></p>
						<p class="card-text">Sĩ số: <?= $value['siso']?></p>
						<p class="card-text">Tên đề tài: <?= $value['tendetai']?></p>
						<p class="card-text">Ngày đăng ký : <?= $value['ngaydangky']?></p>
						<p class="card-text">Mã gv : <?= $value['magv']?></p>
						<a href="showData/deleteData/<?= $value['manhom'] ?>" class="btn btn-danger xoa"><i class="fa fa-times"></i></a>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</body>
</html>