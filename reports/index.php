<?php
require __DIR__ . '/../config.php';
$middleware->run('admin');
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
				<h1> Generate Reports </h1>
				<hr>

				<div class="form-group">
					<label>
						Download
						<input type="checkbox" name="download">
					</label>
				</div>
				<div class="btn-group">
					<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						Generate&nbsp;
						<span class="caret"></span>
					</button>

					<ul class="dropdown-menu" role="menu">
						<li> <a href="/reports/generate.php?type=records" target="_blank" data-dl><i class="glyphicon glyphicon-folder-open"></i> Records </a> </li>
						<li> <a href="/reports/generate.php?type=schedules" target="_blank" data-dl><i class="glyphicon glyphicon-calendar"></i> Schedules </a> </li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<script src="/inc/jquery.js"></script>
	<script src="/inc/bootstrap.js"></script>
	<script>
	  $(function() {
	  	var host = window.location.host;
	  	
	  	$('[data-dl]').on('click', function(evt) {
	  		evt.preventDefault();
	  		evt.stopPropagation && evt.stopPropagation();

	  		var $download = $('input[name=download]');
	  		var $this = $(this);
	  		var attr = $this.attr('href');
	  	
	  		window.open('//' + host + attr + ($download.is(':checked') ? '&download=1' : ''));
	  	});
	  });
	</script>
</body>
</html>
