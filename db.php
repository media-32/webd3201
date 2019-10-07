<?php
/*
File name:db.php
Names:Aaron Styve
group name:grorup 2
Description: This will be for the access to the database
*/


function db_connect()
{
    $connection = pg_connect("host=127.0.0.1 dbname=group02_db
    user=styvea password=100714115");
    return $connection;
}

function result($sql){
$result=pg_fetch_row(db_connect(),$sql);
return $result;
}

function update_database($sql){
pg_query(db_connect(),$sql);
}