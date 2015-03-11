<?php
require __DIR__ . '/../config.php';
$middleware->run('auth');

// <?php echo "{$auth->user()->last_name}, {$auth->user()->first_name} {$auth->user()->middle_name}";
$records = $auth->user()->records;
$schedules = $auth->user()->schedules;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - You</title>
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
			<?php require __DIR__ . '/../inc/sidebar.php'; ?>
			<div class="col-md-9">
				<h1> Dashboard </h1>

				<div class="alert alert-info">
					So far, you have assigned
					<strong><?php echo $records->count(); ?></strong> record(s),
					and <strong><?php echo $schedules->count(); ?></strong> schedule(s).
				</div>

				<div class="row">
					<div class="col-md-6">
						<h3> Records </h3>
						<?php if ( !$records->count() ): ?>
							<div class="alert alert-info">
								You have not appointed any records yet.
							</div>
						<?php else: ?>
							<table class="table">
								<thead>
									<tr>
										<th>#</th>
										<th>Service</th>
									</tr>
								</thead>

								<tbody>
									<?php foreach($records as $record): ?>
										<tr>
											<td><?php echo $record->id; ?></td>
											<td><?php echo ucwords($record->service); ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						<?php endif; ?>
					</div>

					<div class="col-md-6">
						<h3> Schedules </h3>
						<?php if ( !$schedules->count() ): ?>
							<div class="alert alert-info">
								You have not appointed any schedules yet.
							</div>
						<?php else: ?>
							<table class="table">
								<thead>
									<tr>
										<th>#</th>
										<th>Date Appointed</th>
									</tr>
								</thead>

								<tbody>
									<?php foreach($schedules as $schedule): ?>
										<tr>
											<td><?php echo $schedule->id; ?></td>
											<td><?php echo date('m d, Y', strtotime($schedule->appointed_at)); ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>