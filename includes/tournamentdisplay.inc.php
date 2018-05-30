<?php

$servername = "localhost";
$username   = "username";
$password   = "password";
$dbname     = "db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, FROM tournaments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID:</th><th>Name:</th></tr>";
    // Display data from each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]." </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

?>
