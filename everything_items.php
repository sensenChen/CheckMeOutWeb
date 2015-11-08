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

$sql = "SELECT * FROM Items";
$result = $conn->query($sql);

while($r = mysqli_fetch_assoc($result)) {
    print $r['ItemID'].','.$r['Price'].','.$r['Name'].','.$r['Description'].','.$r['Link']."<br>";
}

$conn->close();
?>
</html>