$sql1 = "CREATE TABLE Inventory (LockID int,ItemID int);";
$sql2 = "CREATE TABLE Items (ItemID int, StoreID int, ItemName varchar(50), ItemDescription varchar(50), ItemPrice float, PictureLink varchar(50));";

<?php
    $result = mysql_query($sql1);

    if(!$result){

        die("did not work");
    }

    echo "did work";
 ?>
