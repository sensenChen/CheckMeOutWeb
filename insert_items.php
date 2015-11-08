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
    $itemcost = $_POST['ItemCost'];
    $itemname = $_POST['ItemName'];
    $itemdescription = $_POST['ItemDescription'];
    $itemlink = $_POST['ItemLink'];

    $sql = "INSERT INTO ITEMS(ItemID, Price, Name, Description, Link) VALUES($itemid, $itemcost, $itemname, $itemdescription, $itemlink)";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();
?>
