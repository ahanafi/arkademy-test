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
	.container{
		margin-top: 120px;
	}
	.box{
		height: 120px;
	}
	.panel-body > .btn-ans{
		margin-top: 5px;
	}
</style>
<body>
	
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="text-center">Jawaban Test Arkdemy</h4>
			</div>
			<div class="panel-body">
				<div class="row">
					<?php for($i=0; $i<7; $i++): ?>
						<?php
						$cols = 3;
						if($i > 3) {
							$cols = 4;
						} ?>
						<div class="col-md-<?= $cols; ?>">
							<div class="panel panel-default box">
								<div class="panel-heading">
									Number <?= $i+1; ?>
								</div>
								<div class="panel-body text-center">
									<a href="<?= $i+1; ?>_answer.php" class="btn btn-primary btn-ans" target="_blank">
										<span>SHOW ANSWER</span>
										<i class="glyphicon glyphicon-chevron-right"></i>
									</a>
								</div>
							</div>
						</div>
					<?php endfor; ?>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>