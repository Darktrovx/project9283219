

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fightnite Register</title>
<link href="mainnav.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>

</head>

<body>
	
<!-- NAVBAR -->
<?php include "./includes/navbar.inc.php"; ?>
<!-- NAVBAR end -->



<div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="register.php" method="post">
            <div">
                <label>Username</label>
                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"></span>
            </div>    
            <div >
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="">
                <span class="help-block">></span>
            </div>
            <div >
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="">
                <span class="help-block"></span>
            </div>

            <div>
              <label for="epic_id"><b>Epic Username</b></label>
              <input type="text" placeholder="John Doe" name="epic_id" required>

              <label for="region"><b>MatchMaking Region</b></label>
                  <input list="regions" name="region">
                  <datalist id="regions">
                    <option value="NA">
                    <option value="EU">
                    <option value="Asia">
                  </datalist>

              <label for="platform"><b>Platform</b></label>
                  <input list="platforms" name="platform">
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
