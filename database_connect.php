<?php
    //scrift to connect to database 
    $dbconn = pg_connect("host=localhost port=4567 dbname=main_db user=user password=password");  // might swith to pg_connect() function to allow for persistant connection to db
    if (!$dbconn)
    {
        die("Connection Failed: " . pg_last_error());
    }

?>  