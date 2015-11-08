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
    else {
        echo "did connect";
    }

    $lockid = $_POST['LockID'];
    $itemid = $_POST['ItemID'];

    $sql = "INSERT INTO Inventory (LockID, ItemID) VALUES ($lockid, $itemid)";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
