<?php include 'db.php'; ?>
<?php include 'action.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="sidebar">
			<header class="header">
				<div class="header_top">
					<div class="header_top-logo">
						<img src="../img/logo.png" alt="">
					</div>
					<div class="header_top-navigation">
						<ul>
							<li><a href="index.php" class="<?php active('');?><?php active('index.php');?>">Products</a></li>
							<li><a href="add.php" class="<?php active('add.php');?>">Add New Product</a></li>
							<li><a href="../log_out/index1.php" target="_blank">Visit website</a></li>
						</ul>
					</div>
				</div>
			</header>
			<footer class="footer">
				<div class="copyright">
					<p>Designed and Developed by <br> Emin Koganyan</p>
				</div>
			</footer>
		</div>