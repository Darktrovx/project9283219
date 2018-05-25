<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fightnite Leaderboard</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	
	var ajax = new XMLHttpRequest();
	var method = "GET";
	var url = "user.php";
	var asynchronous = true;

	ajax.open(method, url, asynchronous);

	ajax.send();

	var placement = 0;
	ajax.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
			{
				var data = 	JSON.parse(this.responseText);
				$.each(data, function(index, item)
				{
					$("#top_10").append("<li>" + item.ID         + "</li>"
									  + "<li>" + item.playerName + "</li>"
									  + "<li>" + item.playerElo  + "</li>"
									  + "<li>" + placement       + "</li>" + "<br\>");
					placement++;
				});
			}
	}	
	
</script>
	
	
</head>

<!-- NAVBAR -->
<?php include "./includes/navbar.inc.php"; ?>
<!-- NAVBAR end -->
	
	<div id="leaderboard">
		<ul id="top_10"></ul>
	</div>
	
	
</body>
</html>
