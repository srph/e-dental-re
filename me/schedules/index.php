<?php
require __DIR__ . '/../../config.php';
$middleware->run('auth');
$schedules = $auth->user()->schedules->each(function($schedule) {
	$schedule->title = date('Y-m-d', strtotime($schedule->appointed_at));
	$schedule->start = date('Y-m-d', strtotime($schedule->appointed_at));
	$schedule->end = date('Y-m-d', strtotime($schedule->appointed_at));
	return $schedule;
});
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Your Schedules</title>
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
			<?php require __DIR__ . '/../../inc/sidebar.php'; ?>
			<div class="col-md-9">
				<h1> Your Schedules </h1>
				
				<div id="calendar"></div>
			</div>
		</div>
	</div>

	<script src="/inc/jquery.js"></script>
	<script src="/inc/jquery-ui.custom.min.js"></script>
	<script src="/inc/bootstrap.js"></script>
	<script src="/inc/moment.min.js"></script>
	<script src="/inc/fullcalendar.min.js"></script>
	<script>
		var events = JSON.parse('<?php echo $schedules->count() ? $schedules->toJson() : "[]"; ?>');
		var count = <?php echo $schedules->count(); ?>;
		var now = Date.parse(moment().format('YYYY-MM-DD'));

		$('#calendar').fullCalendar({
			eventLimit: true,
			events: events,
			dayClick: function(date, evt, view) {

				if ( Date.parse(moment(date.start).format('YYYY-MM-DD')) - now < 0 ) {
					return alert('Oops, but you cannot delete a schedule from past dates.');
				}

				if ( !confirm('Are you sure to appoint a schedule on ' + date.format('MMMM Do, YYYY') + '?') )
					return;

				var date = date.format('YYYY-MM-DD');

				$.ajax({
					url: '/me/schedules/store.php',
					type: 'POST',
					dataType: 'json',
					data: { date: date },
					success: function(response) {
						$('#calendar').fullCalendar('renderEvent', {
							id: response.data.id,
							title: date,
							start: date,
							end: date
						});
					}
				})
			},
			eventClick: function(date, evt) {
				if ( Date.parse(moment(date.start).format('YYYY-MM-DD')) - now < 0 ) {
					return alert('Oops, but you cannot delete a schedule from past dates.');
				}

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