<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng ký luận văn tốt nghiệp</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<body>
	<div class="container">
		<h2 class="text-xs-center">Đăng ký Luận Văn Tốt Nghiệp</h2>
		<hr>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form action="addgv/insertgv_controller" method="POST" enctype="multidata/form=data">
							<div class="card">
							<div class="card-block">
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Tên giảng viên</label>
									<input type="text" name="tengv" class="form-control" id="formGroupExampleInput2" placeholder="DH123456789">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Học hàm</label>
									<input type="text" name="hocham" class="form-control" id="formGroupExampleInput2" placeholder="Nguyễn Văn B">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Học vị</label>
									<input type="text" name="hocvi" class="form-control" id="formGroupExampleInput2" placeholder="DH123456789">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Loại giảng viên</label>
										<div class="container">
										<div class="row">
											<select name="loaigv">
											<?php foreach ($dulieu as $key => $value): ?>	
													<div class="card card-block">
														<option value="<?= $value['idloaigv']?>" selected><?= $value['tenloaigv']?>	
														</option>
													</div>
												
											<?php endforeach ?>
									</select>
									
										</div>
										</div>				
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