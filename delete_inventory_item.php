<?php
    // script to delete row of selected item
    # $item_name = $_POST[""];  // add to respective html file  //also switch form method to POST.
    $sql = "DELETE FROM Inventory_Table WHERE item_name = '$item_name'";
    $result = pg_query($dbconn, $sql);

    if (!$result) 
    {
        die("Error in SQL query: " . pg_last_error());
    }

    pg_free_result($result);
?>