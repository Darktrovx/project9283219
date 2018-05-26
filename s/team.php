

<?php include('teamCreate.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Team Creation Page</title>
  <link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body>
<!-- NAVBAR -->
<?php include "./includes/navbar.inc.php"; ?>
<!-- NAVBAR end -->
  <div class="header">
    <h2>Create a Team</h2>
  </div>
    
	<div class="wrapper">
		  <form method="post" action="team.php">
			<?php include('errors.php'); ?>
			<div class="input-group">
			  <label>Team name</label>
			  <input type="text" name="teamname" value="<?php echo $teamname; ?>">
			</div>
			<div class="input-group">
			  <button type="submit" class="btn" name="reg_team">Create Team</button>
			</div>
		  </form>
	</div>
</body>
</html>