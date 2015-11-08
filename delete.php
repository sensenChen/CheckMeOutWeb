<?php
	function OpenConnection(){
		
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

		$d = $_POST('LockID');
		$sql = "DELETE FROM Inventory WHERE LockID = '$d'";
		//$sql2 = "INSERT INTO Unlocked (Lock_ID) VALUES ($d)";

		if ($conn->query($sql) === TRUE) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . $conn->error;
		}
		$conn->close();
	}
	$d = $_POST('LockID');
	OpenConnection();
?>