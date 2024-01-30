<?php
// Establish a connection to the MySQL database
$mysqli = new mysqli("localhost", "user_name", "some_password", "mydatabase");

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get the visitor's IP address
$ip = $_SERVER['REMOTE_ADDR'];

// Get the current time
$time = date("Y-m-d H:i:s");

// Insert the visitor's IP address and time into the database
$query = "INSERT INTO visitor_log (ip_address, visit_time) VALUES ('$ip', '$time')";
$result = $mysqli->query($query);

// Display the message on the webpage
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hello World!</title>
</head>
<body>
    <h1>Hello World!</h1>
    <p>Your IP address: <?php echo $ip; ?></p>
    <p>Current time: <?php echo $time; ?></p>
</body>
</html>

