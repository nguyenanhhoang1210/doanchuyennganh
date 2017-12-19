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
	<?php require('header_thuky.php'); ?>
	<div class="container">
		<h3 class="text-xs-center">Thông tin đợt đăng ký</h3>
		<hr>
	</div>
	<div class="container">
		<div class="row">
			<?php foreach ($dulieutucontroller as $key => $value): ?>
				<div class="col-md-4">
					<div class="card card-block">
						<h3 class="card-title">Mã đợt : <?= $value['MaDot'] ?></h3>
						<p class="card-text">Thời gian bắt đầu đăng ký : <?= $value['TGBatDauDK']?></p>
						<p class="card-text">Thời gian kết thúc đăng ký : <?= $value['TGKetThucDK']?></p>
						<p class="card-text">Thời gian bắt đầu làm luận văn : <?= $value['TGBatDauLVTN']?></p>
						<p class="card-text">Thời gian kết thúc làm luận văn : <?= $value['TGKetThucLVTN']?></p>
						<a href="hienthingay/deleteDate/<?= $value['MaDot'] ?>" class="btn btn-danger"><i class="fa fa-times"></i></a>	
						<a href="hienthingay/editDate/<?= $value['MaDot'] ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
						<?php  
							echo '<label class="text-danger">'.$this->session->flashdata("error_suangay").'</label>';  
						?>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</body>
</html>