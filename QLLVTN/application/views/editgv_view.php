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
	     <?php require('header1.php'); ?>
	<div class="container">
			<h3 class="text-xs-center">Sửa đợt đăng ký</h3>
			<hr>
	</div>
	<div class="container">
		<div class="row">
			<?php foreach ($dulieu as $key => $value): ?>
				<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form action="../updategv" method="POST" enctype="multidata/form=data">
							<div class="card">
							<div class="card-block">
								
									<input type="hidden"  name="magv" class="form-control" id="formGroupExampleInput"  value="<?= $value['magv'] ?>">
								
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Tên giảng viên</label>
									<input type="text" name="tengv" class="form-control" id="formGroupExampleInput2" placeholder="DH123456789" value="<?= $value['tengv'] ?>">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Học hàm </label>
									<input type="text" name="hocham" class="form-control" id="formGroupExampleInput2" placeholder="DH123456789" value="<?= $value['hocham'] ?>">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Học vị</label>
									<input type="text" name="hocvi" class="form-control" id="formGroupExampleInput2" placeholder="DH123456789" value="<?= $value['hocvi'] ?>">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Loại gv</label>
									<input type="text" name="loaigv" class="form-control" id="formGroupExampleInput2" placeholder="DH123456789" value="<?= $value['idloaigv'] ?>">
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