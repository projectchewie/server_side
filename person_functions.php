<?php
function newUser($id, $firstName, $lastName, $address, $phone, $email, $radius, $timeDelay, 
	$host_desire, $host){

	$user_name = "root";
	$password = "root";
	$database = "Initial_Chewie";
	$server = "localhost";

	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle); 

	if($db_found){
		$SQL = "INSERT INTO PERSONS(id, firstName, lastName, address, phone, email, radius, timeDelay,
			host_desire, host) 
		VALUES($id, '$firstName', '$lastName', '$address', '$phone', '$email', $radius, 
			$timeDelay, $host_desire, $host)";
		$result = mysql_query($SQL);
		mysql_close($db_handle);

	}
	else {

		print "Database NOT Found ";
		mysql_close($db_handle);

	} 
}


function existsUser($id){
	$user_name = "root";
	$password = "root";
	$database = "Initial_Chewie";
	$server = "localhost";

	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle); 
    if($db_found){
		
		$SQL = "SELECT * FROM PERSONS WHERE id = $id LIMIT 1";
		$result = mysql_query($SQL);
		if(mysql_num_rows($result) > 0){
			return 1;		
		}

		else{
			return 0;
		} 
		mysql_close($db_handle);
	}
	else {

		print "Database NOT Found ";
		mysql_close($db_handle);
		return 0;

	} 
}


function getUser($id, $field){
	$user_name = "root";
	$password = "root";
	$database = "Initial_Chewie";
	$server = "localhost";

	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle); 
	if($db_found){
		
		$SQL = "SELECT $field FROM PERSONS WHERE id = '$id' LIMIT 1";
		$result = mysql_query($SQL);
		$row = mysql_fetch_array($result);
		return $row[0];
		mysql_close($db_handle);
	}
	else {

		print "Database NOT Found ";
		mysql_close($db_handle);
		return "Entry not found";
	}   
}

function updateUser($id, $field, $entry){
	$user_name = "root";
	$password = "root";
	$database = "Initial_Chewie";
	$server = "localhost";

	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle);  
	if($db_found){
		
		$SQL = "UPDATE PERSONS SET $field = '$entry' WHERE id = $id";
		$result = mysql_query($SQL);
		
	}
	else {

		print "Database NOT Found ";
		mysql_close($db_handle);
	}    
	
}



?>