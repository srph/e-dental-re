<?php
require __DIR__ . '/../../vendor/autoload.php';;
$records = (new Record)->all();
?>
<html>
<body>
<?php if ( !$records->count() ): ?>
	<h2 style="text-align: center;"> No records yet. </h2>
<?php else: ?>
	<table style="width: 100%;">
		<tr style="text-align: center;">
			<th>ID</th>
			<th>Patient</th>
			<th>Service</th>
			<th>Date</th>
		</tr>
		<?php foreach($records as $record): ?>
			<tr style="text-align: center;">
				<td><?php echo $record->id; ?></td>
				<td><?php echo "{$record->user->first_name} {$record->user->last_name} ({$record->user->username})"; ?></td>
				<td><?php echo ucwords($record->service); ?></td>
				<td><?php echo $record->created_at->format('M d, Y'); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
<?php endif; ?>
</body>
</html>