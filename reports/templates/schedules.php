<?php
require __DIR__ . '/../../vendor/autoload.php';;
$schedules = (new Schedule)->all();
?>
<html>
<body>
<?php if ( !$schedules->count() ): ?>
	<h2 style="text-align: center;"> No schedules yet. </h2>
<?php else: ?>
	<table style="width: 100%;">
			<tr style="text-align: center;">
				<th>ID</th>
				<th>Patient</th>
				<th>Appointment Date</th>
			</tr>
			<?php foreach($schedules as $schedule): ?>
				<tr style="text-align: center;">
					<td><?php echo $schedule->id; ?></td>
					<td><?php echo "{$schedule->user->first_name} {$schedule->user->last_name} ({$schedule->user->username})"; ?></td>
					<td><?php echo $schedule->appointed_at->format('M d, Y'); ?></td>
				</tr>
			<?php endforeach; ?>
	</table>
<?php endif; ?>
</body>
</html>