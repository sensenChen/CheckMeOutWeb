<html>
<?php
$servername = "us-cdbr-azure-east-a.cloudapp.net";
$username = "b94754eb2c3c77";
$password = "e2eb2fa2";
$dbname = "CheckMeOutHacks";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE TABLE Items(
ItemID int,
StoreID int,
Name varchar(255),
Description varchar(255),
Link varchar(255)
);"
$result = $conn->query($sql);

$conn->close();
?>
</html>