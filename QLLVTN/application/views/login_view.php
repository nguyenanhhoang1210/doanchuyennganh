<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Trang đăng nhập</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
 	<style type="text/css">
 		.container
 		{
 			margin-top: 30px;
 		}
 	</style>
</head>
<body>
	<div class="container">
		<h2 class="text-xs-center">Đăng nhập</h2>
		<hr>
	</div>
	<div class="container">
		<div class="row" >
			<div class="col-sm-8 push-sm-2">	
   				 <form  method="post" action="<?= base_url() ?>index.php/main/login_validation" > 
					<div class="card">
							<div class="card-block">
								<fieldset class="form-group">
									<label for="formGroupExampleInput">Username : </label>
									<input type="text" name="username" class="form-control" id="formGroupExampleInput" placeholder="Nhập username">
									<span class="text-danger"><?php  $this->load->library('form_validation');   echo form_error('username'); ?>
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput">Password : </label>
									<input type="password" name="password" class="form-control" id="formGroupExampleInput" placeholder="Nhập password">
									 <span class="text-danger"><?php echo form_error('password'); ?>
								</fieldset>
								<div class="col-sm-8 push-sm-6">
									<input type="submit" class="btn btn-info"  name="login"value="Đăng nhập">
									<?php  
				                       echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
				                    ?>  
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
</body>
</html>