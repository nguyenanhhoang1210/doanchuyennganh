<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Xuất danh sách sinh viên theo giảng viên</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<body>
	<div class="container">
		<h2 class="text-xs-center">Xuất danh sách sinh viên theo giảng viên</h2>
		<hr>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form action="xuatdssv/xuatdssv" method="POST" enctype="multidata/form=data">
							<div class="card">
							<div class="card-block">
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Giảng viên hướng dẫn : </label>
									
										<div class="container">
										<div class="row">
											<select name="chongv">
											<?php foreach ($dulieutucontroller1 as $key => $value): ?>	
													<div class="card card-block">
														<option value="<?= $value['magv']?>" selected><?= $value['tengv']?>	
														</option>
													</div>
												
											<?php endforeach ?>
									</select>
									
										</div>
										</div>				
								</fieldset>
								<input type="submit" class="btn btn-success btn-block" value="Tìm kiếm">
							</div>
							</div>
				</form>
			</div>			  
		</div>
	</div>
</body>
</html>