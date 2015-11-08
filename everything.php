<html>
<?php
$servername = "us-cdbr-azure-east-a.cloudapp.net";
$username = "ba1f432f661a46";
$password = "75ac9de4";
$dbname = "YHacks";

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