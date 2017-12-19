<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm đợt đăng ký</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<body>
	<?php require('header_thuky.php'); ?>
	<div class="container">
		<h2 class="text-xs-center">Thêm đợt đăng ký</h2>
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
									<input type="date" name="tgbd" id="tgbd">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Thơi gian kết thúc đăng ký</label>
									<input type="date" name="tgkt" id="tgkt">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Thơi gian bắt đầu làm LVTN</label>
									<input type="date" name="tgbdlam" id="tgbdlam">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Thơi gian kết thúc làm LVTN</label>
									<input type="date" name="tgktlam" id="tgktlam">
								</fieldset>
								<input type="submit" class="btn btn-success btn-block" value="Thêm đợt ">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
</body>
</html>