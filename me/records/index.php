<?php
require __DIR__ . '/../../config.php';
$middleware->run('auth');
$records = $auth->user()->records;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Your Records</title>
	<script src="/inc/jquery.js"></script>
	<script src="/inc/bootstrap.js"></script>
	<link href="/inc/bootstrap.css " rel="stylesheet" />
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
			<?php require __DIR__ . '/../../inc/sidebar.php'; ?>
			<div class="col-md-9">
				<h1> Your Records </h1>
				
				<?php if ( !$records->count() ): ?>
					<div class="alert alert-info">
						You have not made any record yet.
					</div>
				<?php else: ?>
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Service</th>
								<th>Date</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach($records as $record): ?>
								<tr>
									<td><?php echo $record->id; ?></td>
									<td><?php echo ucwords($record->service); ?></td>
									<td><?php echo date('m d, Y', strtotime($record->created_at)); ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				<?php endif; ?>
			</div>
		</div>
	</div>
</body>
</html>