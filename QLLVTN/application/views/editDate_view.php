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
	     <?php require('header.php'); ?>
	<div class="container">
			<h3 class="text-xs-center">Sửa đợt đăng ký</h3>
			<hr>
	</div>
	<div class="container">
		<div class="row">
			<?php foreach ($mangdulieu as $key => $value): ?>
				<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form action="../updateDate" method="POST" enctype="multidata/form=data">
							<div class="card">
							<div class="card-block">
								
									<input type="hidden"  name="madot" class="form-control" id="formGroupExampleInput"  value="<?= $value['MaDot'] ?>">
								
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Thời gian bắt đầu đăng ký</label>
									<input type="text" name="tgbd" class="form-control" id="formGroupExampleInput2" placeholder="DH123456789" value="<?= $value['TGBatDauDK'] ?>">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Thời gian kết thúc đăng ký</label>
									<input type="text" name="tgkt" class="form-control" id="formGroupExampleInput2" placeholder="DH123456789" value="<?= $value['TGKetThucDK'] ?>">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Thời gian bắt đầu làm luận văn</label>
									<input type="text" name="tgbdlam" class="form-control" id="formGroupExampleInput2" placeholder="DH123456789" value="<?= $value['TGBatDauLVTN'] ?>">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Thời gian kết thúc làm luận văn</label>
									<input type="text" name="tgktlam" class="form-control" id="formGroupExampleInput2" placeholder="DH123456789" value="<?= $value['TGKetThucLVTN'] ?>">
								</fieldset>
								
								<input type="submit" class="btn btn-success btn-block" value="Nhập vào mysql">
							</div>
							</div>		
				</form>
			</div>			  
		</div>
	</div>
			<?php endforeach ?>
		</div>
	</div>
</body>
</html>