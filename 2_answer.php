<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jawaban Test Arkademy</title>
</head>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<style>
	body{
		background: #1A2980;  /* fallback for old browsers */
		background: -webkit-linear-gradient(to right, #26D0CE, #1A2980);  /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to right, #26D0CE, #1A2980); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	}
	.box{
		height: 120px;
	}
	.panel-body > .btn-ans{
		margin-top: 5px;
	}
</style>
<body>
	
	<div class="container" style="margin-top: 120px;">
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="text-center">FORM</h4>
					</div>
					<div class="panel-body">
						<div class="row">
							<form action="" class="form-group" method="POST">
								<div class="container">

									<div class="form">
										<label for="username" class="col-md-2  control-label">Username</label>
										<div class="col-md-5">
											<input type="text" name="username" class="form-control" placeholder="Username" required onkeypress="return event.charCode >= 97 && event.charCode <= 122">
										</div>
									</div>
									<br><br><br>

									<div class="form">
										<label for="email" class="col-md-2  control-label">E-mail</label>
										<div class="col-md-5">
											<input type="email" name="email" class="form-control" placeholder="E-mail" required onkeypress="return event.charCode >= 97 && event.charCode <= 122">
										</div>
										<div class="col-md-1"></div>
									</div>
									<br><br><br>

									<div class="form">
										<label for="phone_number" class="col-md-2  control-label">Number phone</label>
										<div class="col-md-5">
											<input type="tel" name="phone_number" class="form-control" placeholder="Number phone" required onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 32 || event.charCode == 43">
										</div>
										<div class="col-md-1"></div>
									</div>
									<br><br><br>

									<div class="form">
										<div class="col-md-2"></div>
										<div class="col-md-5">
											<button type="submit" name="post" class="btn btn-primary">
												<span>Submit</span>
												<i class="glyphicon glyphicon-send"></i>
											</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default" style="min-height: 320px">
					<div class="panel-heading">
						<h4 class="text-center">RESULT</h4>
					</div>
					<div class="panel-body">
						<?php if (isset($_POST['post'])): ?>
							<table class="table">
								<tr>
									<td>Username</td>
									<td>:</td>
									<td><?= $_POST['username']; ?></td>
								</tr>
								<tr>
									<td>E-mail</td>
									<td>:</td>
									<td><?= $_POST['email']; ?></td>
								</tr>
								<tr>
									<td>Number Phone</td>
									<td>:</td>
									<td><?= $_POST['phone_number']; ?></td>
								</tr>
							</table>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>