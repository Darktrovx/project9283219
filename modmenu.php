<!doctype html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fightnite ModMenu</title>
<link href="mainnav.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
	
<!-- NAVBAR -->
<?php include "./includes/navbar.inc.php"; ?>
<!-- NAVBAR end -->

	<!-- CHECK FOR USER PAGE SECURIY THIS IS FOR STAFF ONLY -->

	<div id="playerAdjust">
		<form action="">
			Please enter the players name<br/>
			<input type="text"/>
			  <input list="modmenu" name="modmenu">
			  <datalist id="modmenu">
			    <option value="Ban">
			    <option value="Unban">
			    <option value="Set Elo">
			    <option value="Add Elo">
			    <option value="Remove Elo">
			    <option value="Set Wins">
			    <option value="Add Wins">
			    <option value="Remove Wins">
			    <option value="Set Rank">
			    <option value="Set Points">
			    <option value="Add Points">
			    <option value="Remove Points">
			  </datalist>
			  <input type="submit">
		</form>
	</div>


	<footer></footer>
</body>

</html>