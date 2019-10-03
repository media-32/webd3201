<?php

$conn = pg_connect("host=127.0.0.1 dbname=group02_db user=styvea password=100714115");

$sql=$_SESSION['sql'];

$result = pg_query($conn, $sql);
$records = pg_num_rows($result);

?>