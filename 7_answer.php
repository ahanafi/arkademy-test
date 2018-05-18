<?php
$link = mysqli_connect("localhost", "root", "", "blog");

$sql = "SELECT posts.*, posts.id as pid, users.username, users.id FROM posts JOIN users ON posts.createdBy = users.id";
$sql = mysqli_query($link, $sql);
$total = mysqli_num_rows($sql);
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
</style>
<body>
	
	<div class="container" style="margin-top: 120px;">
		<div class="row">
			<div class="col-md-7 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="text-center">BLOGS</h4>
					</div>
					<div class="panel-body">
						<?php if ($total > 0): ?>
							<?php while($blog = mysqli_fetch_object($sql)): ?>
								<div class="panel panel-primary">
									<div class="panel-heading">
										<strong><?php echo $blog->title; ?></strong> by <i><?=$blog->username; ?></i>
									</div>
									<div class="panel-body">
										<p>
											<?php echo $blog->content; ?>
										</p>
									</div>
									<div class="panel-footer">
										<strong>Comments : </strong>
										<br>
										<?php
											$sql_comment = mysqli_query($link, "SELECT comment FROM comments WHERE postId = $blog->pid");
											while ($com = mysqli_fetch_object($sql_comment)) {
												echo "- ".$com->comment."<br>";
											}
										 ?>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>