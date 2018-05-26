<!doctype html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fightnite Tournaments</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/style.css">
<script>

	var ajax = new XMLHttpRequest();
	var method = "GET";
	var url = "tournaments.php";
	var asynchronous = true;

	ajax.open(method, url, asynchronous);

	ajax.send();

	ajax.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
			{
				var data = 	JSON.parse(this.responseText);
				$.each(data, function(index, tournament)
				{

					//  ----------------- THIS NEEDS TO BE CHANGED TO TABLE FORM NOT UL/LI ---------------------------------
					$("#tournament_list").append("<li>" + tournament.ID            + "</li>"
									           + "<li>" + tournament.Name          + "</li>"
									           + "<li>" + tournament.rank          + "</li>"
									           + "<li>" + tournament.playerLimit   + "</li>"
									           + "<li>" + tournament.reward        + "</li>" + "<br\>");
				});
			}
	}	
	

</script>

</head>
<body>
	
<!-- NAVBAR -->
<?php include "../includes/navbar.inc.php"; ?>
<!-- NAVBAR end -->

	<h1>Fightnite Tournaments</h1>
	<table id="tournament_list" style="width:100%">
		<!-- Fill with tournaments from database -->
	</table>


	<footer></footer>
</body>

</html>