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

    $itemid = $_POST['ItemID'];
    $itemname = $_POST['ItemName'];
    $itemdescription = $_POST['ItemDescription'];
    $itemcost = $_POST['ItemCost'];
    $itemlink = $_POST['ItemLink'];

    $sql = "INSERT INTO INVENTORY(ItemID, Name, Description, Price, Link) VALUES($itemid, $itemname, $itemdescription,$itemcost, $itemlink)";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();
?>
