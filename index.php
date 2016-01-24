<?php include 'database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JS Shoutbox</title>

	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<div id="container">
		<header>
			<h1>JS Shoutbox</h1>
		</header>
		<div id="shouts">
			<ul>
				<li></li>
			</ul>
		</div>
	</div>
	<footer>
		<form>
			<label>Name: </label>
			<input type="text" id="name">
			<label>Shout Text</label>
			<input type="text" id="shout">
			<input type="submit" id="submit" value="SHOUT!">
	</footer>
</body>
</html>