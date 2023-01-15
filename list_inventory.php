<?php
    // script to generate name of items and inventory levels
    $sql = "SELECT * FROM Inventory_Table";
    $result = pg_query($dbh, $sql);
    
    if (!$result)
    {
        die("Error in SQL query: " . pg_last_error());
    }

    while ($row = pg_fetch_array($result)) 
    {
        echo "Name of Item: " . $row[0] . "<br />";
        echo "Amount in Inventory: " . $row[1] . "<p />";
    }

    pg_free_result($result); // free memory 

?>