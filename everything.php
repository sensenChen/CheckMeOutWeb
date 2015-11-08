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

$sql = "SELECT * FROM Inventory";
$result = $conn->query($sql);

$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
print json_encode($rows);

$conn->close();
?>
</html>