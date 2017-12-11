<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<body>
	 <?php require('header.php'); ?>
	<div class="container">
		<h2 class="text-xs-center">Trang quản lý đợt đăng ký</h2>
		<hr>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form action="themngay/addDate" method="POST" enctype="multidata/form=data">
							<div class="card">
							<div class="card-block">
								<fieldset class="form-group">
									<label for="formGroupExampleInput">Thơi gian bắt đầu đăng ký</label>
									<input type="datetime" name="tgbd" class="form-control" id="formGroupExampleInput" placeholder="Nguyễn Văn A">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Thơi gian kết thúc đăng ký</label>
									<input type="datetime" name="tgkt" class="form-control" id="formGroupExampleInput2" placeholder="DH123456789">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Thơi gian bắt đầu làm LVTN</label>
									<input type="datetime" name="tgbdlam" class="form-control" id="formGroupExampleInput2" placeholder="DH123456789">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Thơi gian kết thúc làm LVTN</label>
									<input type="datetime" name="tgktlam" class="form-control" id="formGroupExampleInput2" placeholder="DH123456789">
								</fieldset>
								<input type="submit" class="btn btn-success btn-block" value="Nhập vào mysql">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
</body>
</html>