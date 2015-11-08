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

    $LockID = $_POST['LockID'];
    $ItemID = $_POST['ItemID'];

    $sql = "INSERT INTO Items(LockID, StoreID, ) VALUES([$LockID], [$ItemID])"
    $result = mysql_query($sql);

    if(!$result){

        die("did not work");
    }

    echo "did work";


    $conn->close();
?>
