
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



    $sql1 = "CREATE TABLE Inventory (LockID int,ItemID int);";
    $sql2 = "CREATE TABLE Items (ItemID int, StoreID int, ItemName varchar(50), ItemDescription varchar(50), ItemPrice float, PictureLink varchar(50));";


    $result = mysql_query($sql1);

    if(!$result){

        die("did not work");
    }

    echo "did work";


    $conn->close();
 ?>
