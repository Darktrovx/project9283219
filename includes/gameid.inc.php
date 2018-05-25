<?php
session_start();

// initializing variables
$epic_id = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'fightnite_admin', 'gdK42F@^M6Gn', 'fightnite_devyn');

if (isset($_POST['reg_user'])) {

  $epic_id = filter_input(INPUT_POST, 'epic_id', FILTER_SANITIZE_STRING);
  $epic_id = mysqli_real_escape_string($db, $epic_id);

  if (empty($epic_id)) { array_push($errors, "epic_id is required"); }


  $user_check_query = "SELECT * FROM users WHERE epic_id='$epic_id'";
  $result = mysqli_query($db, $user_check_query);
  $user   = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['epic_id'] === $epic_id) {
      array_push($errors, "epic_id already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

    $query = "INSERT INTO users (epic_id) 
          VALUES('$epic_id')";
    mysqli_query($db, $query);
    $_SESSION['epic_id'] = $epic_id;
    $_SESSION['success'] = "Epic ID linked!";
    header('location: profile.php');
  }
}

?>