<?php
function randomString() {
	$str = "";
	$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < 4; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}

?>
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
			<div class="col-md-7 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="text-center">GENERATE SERIAL NUMBER</h4>
					</div>
					<div class="panel-body">
						<div class="alert alert-info text-center">
							<h4 class="title">Structure of Serial Number</h4>
							<p>
								<h3>XXXX-XXXX-XXXX-XXXX</h3>
							</p>
						</div>
						<form action="" class="form-group text-center" method="POST">
							<button type="submit" name="generate" class="btn btn-primary btn-lg">GENERATE NOW</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php if (isset($_POST['generate'])): ?>
			<div class="row">
				<div class="col-md-7 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="text-center">RESULTS</h4>
						</div>
						<div class="panel-body">
							<table class="table table-bordered">
								<tr>
									<th>No.</th>
									<th>Serial Number</th>
								</tr>
								<?php for($i=1; $i<=300; $i++): ?>
								<?php
									$serial = randomString()."-".randomString()."-".randomString()."-".randomString();
								?>
								<tr>
									<td><?= $i; ?></td>
									<td>
										<?= $serial; ?>
									</td>
								</tr>
								<?php endfor; ?>
							</table>
						</div>
					</div>
				</div>
			</div>
		<?php endif ?>
	</div>

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>