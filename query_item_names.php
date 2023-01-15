<?php
    include database_connect.php;

    $query = "SELECT item_names FROM Inventory_Table";
    $result = pg_query($query);
    
    if($result->num_rows> 0)
    {
        $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    

    include database_disconnect.php;
?>