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
				<form action="addData/insertData_controller" method="POST" enctype="multidata/form=data">
							<div class="card">
							<div class="card-block">
								<fieldset class="form-group">
									<label for="formGroupExampleInput">Họ Tên SV1: </label>
									<input type="text" name="hoten1" class="form-control" id="formGroupExampleInput" placeholder="Nguyễn Văn A">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">MSSV</label>
									<input type="text" name="mssv1" class="form-control" id="formGroupExampleInput2" placeholder="DH123456789">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Họ Tên SV2:(nếu có)</label>
									<input type="text" name="hoten2" class="form-control" id="formGroupExampleInput2" placeholder="Nguyễn Văn B">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">MSSV</label>
									<input type="text" name="mssv2" class="form-control" id="formGroupExampleInput2" placeholder="DH123456789">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Lớp</label>
									<input type="text" name="lop" class="form-control" id="formGroupExampleInput2" placeholder="Nhập lớp">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Ngành</label>
									<input type="text" name="nganh" class="form-control" id="formGroupExampleInput2" placeholder="Nhập ngành">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Sỉ số</label>
									<input type="text" name="siso" class="form-control" id="formGroupExampleInput2" placeholder="vd:1">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Tên đề tài đăng ký</label>
									<input type="text" name="tendetai" class="form-control" id="formGroupExampleInput2" placeholder="Web quản lý">
								</fieldset>
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
								
								<input type="submit" class="btn btn-success btn-block" value="Nhập vào mysql">
							</div>
							</div>
				
				</form>
			</div>			  
		</div>
	</div>
</body>
</html>