<?php
	function OpenConnection(){
		
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

		$d = $_POST('Lock_ID');
		$sql = "DELETE FROM Inventory WHERE Lock_ID=$d";

		if ($conn->query($sql) === TRUE) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . $conn->error;
		}
		$conn->close();
	}
	$d = $_POST('Lock_ID');
	OpenConnection();
?>