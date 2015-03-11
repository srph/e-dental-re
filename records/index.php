<?php

require '../config.php';
$middleware->run('admin');
$records = Record::all();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Manage Records </title>
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
			<?php include '../inc/sidebar.php'; ?>
			
			<div class="col-md-9">
				<?php if ( !count($records) ): ?>
					No record yet. Why don't you create one?
				<?php else: ?>
					<div class="form-group">
						<a href="/records/create.php" class="btn btn-success">
							<i class="glyphicon glyphicon-file"></i>
							Create a record
						</a>
					</div>

					<table class="table">
						<thead>
							<tr>
								<th> ID </th>
								<th> Name </th>
								<th> Service </th>
								<th> Option </th>
							</tr>
						</thead>

						<tbody>
							<?php foreach($records as $record): ?>
								<tr>
									<td> <?php echo $record->id; ?> </td>
									<td> <?php echo "{$record->user->username} ({$record->user->first_name})"; ?> </td>
									<td> <?php echo ucwords($record->service); ?> </td>
									<td>
										<a href="edit.php?id=<?php echo $record->id;?>" class="btn btn-primary btn-xs">
											<i class="glyphicon glyphicon-pencil"></i>
										</a>

		   							<a href="delete.php?id=<?php echo $record->id;?>" class="btn btn-danger btn-xs">
		   								<i class="glyphicon glyphicon-trash"></i>
		   							</a>
		   						</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<script srv="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>