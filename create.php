<html>
<?php
$servername = "us-cdbr-azure-east-a.cloudapp.net";
$username = "ba1f432f661a46";
$password = "75ac9de4";
$dbname = "YHacks";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE TABLE SOMETHING; USE SOMETHING;";
if ($conn->query($sql) === TRUE){
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
</html>