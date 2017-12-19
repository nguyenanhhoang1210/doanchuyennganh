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
	     <?php require('header_themnhom.php'); ?>
	<div class="container">
		<h2 class="text-xs-center">Xuất danh sách giảng viên theo đề tài</h2>
		<hr>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form action="showtheodetai/xuattheodetai" method="POST" enctype="multidata/form=data">
							<div class="card">
							<div class="card-block">
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Tên đề tài : </label>
									
										<div class="container">
										<div class="row">
											<select name="chondetai">
											<?php foreach ($dulieutucontroller as $key => $value): ?>	
													<div class="card card-block">
														<option value="<?= $value['Id']?>" selected><?= $value['tenhuonglvtn']?>	
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