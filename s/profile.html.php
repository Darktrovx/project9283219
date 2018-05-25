<!doctype html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fightnite User Profile</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
<script>
	
	var ajax = new XMLHttpRequest();
	var method = "GET";
	var url = "user.php";
	var asynchronous = true;

	var username = "PlayersUsername";

	ajax.open(method, url, asynchronous);

	ajax.send();

	ajax.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
			{
				var data = 	JSON.parse(this.responseText);
				// Get current user
				// Loop through table to get user data
				// Display user data

					// ------------------------------ THIS NEEDS TO BE CHANGED --------------------------------
					$("#userProfileInfo").append("<li>" + username.ID            + "</li>"
									           + "<li>" + username.Name          + "</li>"
									           + "<li>" + username.rank          + "</li>"
									           + "<li>" + username.playerElo     + "</li>"
									           + "<li>" + username.currentPoints + "</li>" + "<br\>");
			}
	}	
	
</script>



</script>

</head>
<body>
	
<!-- NAVBAR -->
<?php include "./includes/navbar.inc.php"; ?>
<!-- NAVBAR end -->

	<div id="userProfileInfo">
		<!-- Fill with user account info from DB -->

	</div>


	<footer></footer>
</body>

</html>