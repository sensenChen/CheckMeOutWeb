<html>
    <form action="insert_inventory.php" method="POST">
        <em>Inventory-Lock Form</em>
        Lock ID: <input type="number" value="LockID">
        Item ID: <input type="number" value="ItemID">
        <input type="submit">
    </form>


    <form action="insert_items.php" method="POST">
        <em>Item Input Form</em>
        Lock ID: <input type="number" value="LockID">
        Store ID: <input type="number" value="StoreID">

        Item Name: <input type="text" value="ItemName">
        Item Description: <input type="text" value="ItemDescription">
        Item Cost: <input type="number" value="ItemCost">
        Item Image Link: <input type="text" value="ItemImage">
        <input type="submit">
    </form>
</html>
