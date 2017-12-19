<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm hướng đề tài</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<body>
	<div class="container">
		<h2 class="text-xs-center">Thêm hướng đề tài</h2>
		<hr>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form action="themhuonglvtn/inserthuonglvtn" method="POST" enctype="multidata/form=data">
					<div class="card">
						<div class="card-block">
							<fieldset class="form-group">
								<label for="formGroupExampleInput2">Hướng luận văn: </label>
								<div class="container">
									<div class="row">
										<input type="text" name="chonhuong" class="form-control" id="formGroupExampleInput" placeholder="Nhập hướng đề tài luận văn hướng dẫn" required>
									</div>
								</div>				
							</fieldset>
							<input type="submit" class="btn btn-success btn-block" value="Thêm hướng đề tài">
						</div>
					</div>

				</form>
			</div>			  
		</div>
	</div>
</body>
</html>