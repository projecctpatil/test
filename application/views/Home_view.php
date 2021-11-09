<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Hello Rohit</h1>

	<?php 
		foreach ($result as $value) {
			echo $value->id . ' ' . $value->name . '<br>';
		}
	?>
</body>
</html>