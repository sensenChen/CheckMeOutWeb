
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



    $sql1 = "CREATE TABLE Inventory (LockID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        ItemID INT UNSIGNED NOT NULL)";


    $sql2 = "CREATE TABLE Inventory (LockID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, StoreID INT UNSIGNED NOT NULL
        ItemName VARCHAR(30) NOT NULL, ItemDescription VARCHAR(50) NOT NULL, ItemPrice FLOAT NOT NULL,
        PictureLink VARCHAR(30) NOT NULL)";

    $result = mysql_query($sql1);

    if(!$result){

        die("did not work");
    }

    echo "did work";


    $conn->close();
 ?>
