<div class="col-md-3">
	<h4> General Orthodontics </h4>
	<hr>
	<h6>
		Welcome, 
		<strong> <?php echo "{$auth->user()->first_name} {$auth->user()->last_name}"; ?> </strong>
		<small> (<?php echo $auth->user()->username; ?>) </small>
	</h6>
	<div class="list-group">
		<a href="/me/" class="list-group-item"> Dashboard </a>
		<a href="/me/account/" class="list-group-item"> Account Settings </a>
		<a href="/me/records/" class="list-group-item"> Your Records </a>
		<a href="/me/schedules/" class="list-group-item"> Your Schedules </a>
	</div>

	<?php if ( $auth->user()->is_admin ): ?>
		<div class="list-group">
			<a href="/users/" class="list-group-item"> Manage Users </a>
			<a href="/records/" class="list-group-item"> Manage Records </a>
			<a href="/schedules/" class="list-group-item"> Manage Schedules </a>
			<a href="/reports/" class="list-group-item"> Reports </a>
		</div>
	<?php endif; ?>

	<div class="list-group">
		<a href="/logout.php" class="list-group-item"> Logout </a>
	</div>
</div>