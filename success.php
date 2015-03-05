<!DOCTYPE html>
<html>
<head>
	<title>Success!</title>
	<link rel="stylesheet" href="/inc/bootstrap.css">
</head>
<body>
	<h1 class="text-center"> Action success, whatever you were doing.. </h1>

	<h4 class="text-center"> Sending you back now in <span style="color: red;">3</span>. </h4>
	<script>
		var $span = document.querySelector('span');

		var interval = setInterval(function() {
			var text = parseInt($span.textContent, 10);

			if ( text == 1 ) return history.back();


			$span.textContent =  text - 1;
			interval();
		}, 1000);
	</script>
</body>
</html>