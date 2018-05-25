<!doctype html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fightnite HomePage</title>
<link href="mainnav.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
	
<!-- NAVBAR -->
<?php include "./includes/navbar.inc.php"; ?>
<!-- NAVBAR end -->

	<div id="matchMenu">
		<form action="">
			Enter your team's total kills:<br/>
			<input type="number" id="Akillcount" value="0">
			<br/>
			Enter the other teams total kills:<br/>
			<input type="number" id="Bkillcount" value="0">
			<br/><br/>
			<input type="submit" value="submit">
		</form>
	</div>

	<div id="matchReport">
		<form action="">
			Have a problem with the match? Report the issue here.<br/>
			  <input list="issues" name="issue">
			  <datalist id="issues">
			    <option value="Greifing">
			    <option value="No show">
			    <option value="Invalid contenders">
			    <option value="Cross platform">
			    <option value="Cheating">
			  </datalist>
			  <input type="submit">
		</form>
	</div>


	<footer></footer>
</body>

</html>