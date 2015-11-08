<html>
    <form action="insert_inventory.php" method="POST">
        <em>Inventory-Lock Form</em>
        Lock ID: <input type="number" name="LockID">
        Item ID: <input type="number" name="ItemID">
        <input type="submit">
    </form>


    <form action="insert_items.php" method="POST">
        <em>Item Input Form</em>
        Lock ID: <input type="number" name="LockID">
        Item Name: <input type="text" name="ItemName">
        Item Description: <input type="text" name="ItemDescription">
        Item Cost: <input type="number" name="ItemCost">
        Item Image Link: <input type="text" name="ItemImage">
        <input type="submit">
    </form>
</html>
