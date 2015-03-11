<?php
require __DIR__ . '/../config.php';
$middleware->run('admin');
$schedules = (new Schedule)->all()->each(function($schedule) {
	$user = $schedule->user;
	$schedule->title = "{$user->first_name} {$user->last_name} ({$user->username})";
	$schedule->start = date('Y-m-d', strtotime($schedule->appointed_at));
	$schedule->end = date('Y-m-d', strtotime($schedule->appointed_at));
	return $schedule;
});
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Manage Schedules</title>
	<link href="/inc/bootstrap.css" rel="stylesheet" />
	<link href="/inc/fullcalendar.min.css" rel="stylesheet" />
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
				<h1> Manage Schedules </h1>
				
				<div id="calendar"></div>
			</div>
		</div>
	</div>

	<script src="/inc/jquery.js"></script>
	<script src="/inc/jquery-ui.custom.min.js"></script>
	<script src="/inc/bootstrap.js"></script>
	<script src="/inc/moment.min.js"></script>
	<script src="/inc/fullcalendar.min.js"></script>
	<script src="/inc/react.min.js"></script>
	<script>
		var events = JSON.parse('<?php echo $schedules->count() ? $schedules->toJson() : "[]"; ?>');
		var count = <?php echo $schedules->count(); ?>;
		$('#calendar').fullCalendar({
			eventLimit: true,
			events: events,
			dayClick: function(date, evt, view) {
				if ( !confirm('Are you sure to appoint a schedule on ' + date.format('MMMM Do, YYYY') + '?') )
					return;

				$('#calendar').fullCalendar('renderEvent', {
					id: ++count,
					title: '<?php echo "{$auth->user()->first_name} {$auth->user()->last_name} ({$auth->user()->username})"; ?>"',
					start: date.format('YYYY-MM-DD'),
					end: date.format('YYYY-MM-DD')
				});

				$.ajax({
					url: '/schedules/store.php',
					type: 'POST',
					dataType: 'json',
					data: { date: date.format('YYYY-MM-DD') },
				});
			},
			eventClick: function(date, evt) {
				if ( !confirm('Are you sure to delete this appointment?') )
					return;

				$.ajax({
					url: '/schedules/delete.php',
					type: 'POST',
					dataType: 'json',
					data: { id: date.id },
					success: function() {
						window.location.reload();
					}
				});
			}
		});
	</script>
</body>
</html>