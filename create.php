<html>
<?php
$servername = "us-cdbr-azure-east-a.cloudapp.net";
$username = "b94754eb2c3c77";
$password = "e2eb2fa2";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE TABLE Items";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
</html>