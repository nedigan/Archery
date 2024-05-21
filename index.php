<?php
// Database credentials
$servername = "feenix-mariadb-web.swin.edu.au";
$username = "s104237132";
$password = "230790";
$dbname = "s104237132_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data
$sql = "SELECT id, name FROM your_table";
$result = $conn->query($sql);
echo $result;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Archery Scores</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Welcome!</h1>
        <h2>Choose round</h2>
    </body>
</html>