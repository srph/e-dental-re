<?php
require __DIR__ . '/../config.php';
$middleware->run('auth');
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>EDMS - Reports</title>
	<link rel="stylesheet" href="/inc/bootstrap.css">
	<style>
		.container {
			margin-top: 50px;
			margin-bottom: 50px;
		}
	</style>
</head> 

<body>
	<div class="container">
		<div class="row">
			<?php require __DIR__ . '/../inc/sidebar.php'; ?>
			<div class="col-md-9">
				<h1> Reports </h1>
			</div>
		</div>
	</div>
</body>
</html>
