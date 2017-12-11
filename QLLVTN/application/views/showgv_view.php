<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Xem dữ liệu</title>
	<script type="text/javascript" src=
	"<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<body>
	     <?php require('header1.php'); ?>
	<div class="container">
			<h3 class="text-xs-center">Thông tin gv</h3>
			<hr>
	</div>
	<div class="container">
		<div class="row">
			<?php foreach ($dulieutucontroller as $key => $value): ?>
				<div class="col-sm-4">
					<div class="card card-block">
						<h3 class="card-title">Mã gv:<?= $value['magv'] ?></h3>
						<p class="card-text">Tên gv : <?= $value['tengv']?></p>
						<p class="card-text">Học hàm : <?= $value['hocham']?></p>
						<p class="card-text">Học vị :<?= $value['hocvi']?></p>
						<p class="card-text">Loại giảng viên <?= $value['idloaigv']?></p>
						<a href="showgv/deletegv/<?= $value['magv'] ?>" class="btn btn-danger xoa"><i class="fa fa-times"></i></a>	
						<a href="showgv/editgv/<?= $value['magv'] ?>" class="btn btn-warning xoa"><i class="fa fa-pencil"></i></a>		
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</body>
</html>