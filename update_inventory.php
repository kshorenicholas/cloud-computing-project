<?php
    # $item_name = $_POST[""];
    # $stock_level = $_POST[""];
    $sql = "UPDATE Inventory_table SET stock_level = $stock_level WHERE item_name = '$item_name'";
    $result = pg_query($dbconn, $sql);

    if (!$result) 
    {
        die("Error in SQL query: " . pg_last_error());
    }
    
    pg_free_result($result);
?>