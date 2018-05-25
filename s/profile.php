<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: /s/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: /s/login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fightnite Profile</title>
	<link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body>

<div class="header">
	<h2>Profile</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>



<div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please update your account</p>
        <form action="profile.php" method="post">

            <div >
                <label><b>Birth Date</b></label><br/>
                <input type="password" name="confirm_password" class="form-control" value=""><br/>
                <span class="help-block"></span>
            </div>

            <div>
              <label for="epic_id"><b>Epic Username</b></label><br/>
              <input type="text" placeholder="John Doe" name="epic_id" required><br/>

              <label for="region"><b>MatchMaking Region</b></label><br/>
                  <input list="regions" name="region"><br/>
                  <datalist id="regions">
                    <option value="NA">
                    <option value="EU">
                    <option value="Asia">
                  </datalist>

              <label for="platform"><b>Platform</b></label><br/>  
                  <input list="platforms" name="platform"><br/>
                  <datalist id="platforms">
                    <option value="PC">
                    <option value="XBOX">
                    <option value="PS4">
                  </datalist>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    


		
</body>
</html>