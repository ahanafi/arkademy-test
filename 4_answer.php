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
						<h4 class="text-center">VENDING MACHINE</h4>
					</div>
					<div class="panel-body">
						<form action="" class="form-group text-center" method="POST">
							<div class="col-sm-offset-2 col-sm-8">
								<input type="number" name="total" class="form-control input-lg" placeholder="Masukkan total belanja" autofocus>
								<br>
								<input type="number" name="bayar" class="form-control input-lg" placeholder="Masukkan uang yang dibayarkan">
								<br>
								<button type="submit" name="count" class="btn btn-primary btn-lg">HITUNG</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php if (isset($_POST['count'])){ ?>
		<?php
			$total = abs($_POST['total']);
			$bayar = abs($_POST['bayar']);
		?>			<div class="row">
				<div class="col-md-7 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="text-center">RESULTS</h4>
						</div>
						<div class="panel-body text-center">
							<p>
								<strong>Keterangan : </strong>
								<br>
								<?php if($bayar == $total){ ?>
									<h3>TIDAK ADA UANG KEMBALI</h3>
								<?php } elseif($bayar < $total){ ?>
									<h3>UANG YANG ANDA MASUKKAN KURANG!</h3>
								<?php } else { 
										//kembalian = 50000 - 21500 = 28500
										$kembali = $bayar - $total;

										$lembar_20 = 0;
										$lembar_10 = 0;
										$lembar_5 = 0;
										$lembar_2 = 0;
										$lembar_1 = 0;
										$lembar_0 = 0;

										if ($kembali % 20000 == 0) {
											$lembar_20 = $kembali / 20000;

										//Kalo ada lebihan, ex : 10000
										} else {
											$lembar_20 = ceil($kembali / 20000) - 1;

											$lebihan = $kembali % 20000;

											$cek_mod_10 = $lebihan % 10000;

											if ($cek_mod_10 == 0) {
												$lembar_10 = $cek_mod_10 / 10000;

											} else {
												$lembar_10 = ceil($lebihan / 10000) - 1;

												$lebihan = $lebihan;

												$cek_mod_5 = $lebihan % 5000;

												if ($cek_mod_5 == 0) {
													$lembar_5 = $cek_mod_5 / 5000;
												} else {
													$cek_mod_2 = $cek_mod_5 % 2000;

													if ($cek_mod_2 == 0) {
														$lembar_2 = $cek_mod_2 / 2000;
													} else {
														$cek_mod_1 = $cek_mod_2 % 1000;

														if ($cek_mod_1 == 0) {
															$lembar_1 = $cek_mod_1 / 1000;
														} else {
															$cek_mod_0 = $cek_mod_1 & 500;

															if ($cek_mod_0 == 0) {
																$lembar_0 = $cek_mod_0 / 500;
															}
														}
													}
												}
											}
										}

										echo $lembar_20." lembar 20000 <br>";
										echo $lembar_10." lembar 10000 <br>";
										echo $lembar_5." lembar 5000 <br>";
										echo $lembar_2." lembar 2000 <br>";
										echo $lembar_1." lembar 1000 <br>";
										echo $lembar_0." lembar 500 <br>";
									}

									
									?>
							</p>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>