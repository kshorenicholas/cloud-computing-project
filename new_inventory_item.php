<?php
    # $item_name = $_POST[""];
    # $stock_level = $_POST[""];
    $sql = "INSERT INTO Inventory_table VALUES ($item_name, $stock_level)";
    $result = pg_query($dbconn, $sql);

    if (!$result) 
    {
        die("Error in SQL query: " . pg_last_error());
    }
    
    pg_free_result($result);
?>