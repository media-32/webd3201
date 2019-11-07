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

function is_user_id($user_id){
	$conn = db_connect();
	$sql = "SELECT user_id FROM users WHERE user_id=='$user_id';";
		$result = pg_query($conn, $sql);
		$records = pg_num_rows($result);							
	if($records > 0){
		return true;
	}
	else{
		return false;
	}
}

function build_simple_dropdown($dropdown_option){
	//initilize the drop down value
	$menu = "";
	//connection to db and query
	$conn = db_connect();
	$db = mysql_select_db('persons', $conn);
	$query="select $dropdown_option from persons";
	$result=mysql_query($query, $conn);
	
	// Add options to the drop down
	while($obj = mysql_fetch_array($result))
	{
		$menu .= "<option>" . $obj['$dropdown_option'] . "</option>";
	}
	mysql_close($conn);
	echo $menu;
}

function build_radio(){
	//connection to db and query
	$conn = db_connect();
	$db = mysql_select_db('listings', $conn);
	$query="select status from listings";
	$result=mysql_query($query, $conn);
	//filling an array with sql row values
	$resultset = array();
	while($row = mysql_fetch_array($result))
	{
		$resultset[] = $row;
	}
	mysql_close($conn);
	//radio for each value
	foreach ($resultset as $result){
	echo "<input type="."radio"." name="."Value"." value="."$result".">$result;";
	}
}

function get_property($table_name, $value){
	//initilize output
	$output = "";

	//connect to db and query
	$conn = db_connect();
	$sql = "SELECT $value
			FROM $table_name;";
	
	$resultdb = pg_query($conn, $sql);
	$records = pg_num_rows($resultdb);
	
	//generate the table
	for($i = 0; $i < $records; $i++){  
	//loop through all of the retrieved records and add to the output variable
		$output .= pg_fetch_result($resultdb, $i, "$value"); 
	}

	echo $output; //display the output
}