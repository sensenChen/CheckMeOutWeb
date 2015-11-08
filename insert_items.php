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
    $itemname = $_POST['ItemName'];
    $itemdescription = $_POST['ItemDescription'];
    $itemcost = $_POST['ItemCost'];
    $itemlink = $_POST['ItemLink'];

    $sql = "INSERT INTO INVENTORY(LockID, Name, Description, Price, Link) VALUES($lockid, $itemname, $itemdescription,$itemcost,$itemlink)";
    $result = mysql_query($sql);

    if(!$result){

        die("did not work");
    }

    echo "did work";


    $conn->close();
?>
