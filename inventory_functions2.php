<?php
function newUser($id, $firstName, $lastName, $address, $phone, $email, $radius, $timeDelay, 
	$host_desire, $host){
	//in reality, this data would be coming from a database
	//$items = array('12345'=>6789,'19283'=>100,'23489'=>'234');
	//return $items[$id];
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
		return 1;

	}
	else {

		print "Database NOT Found ";
		mysql_close($db_handle);
		return 0;

	} 
}


function getUser($id){
	$user_name = "root";
	$password = "root";
	$database = "Initial_Chewie";
	$server = "localhost";

	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle); 
    if($db_found){
		
		$SQL = "SELECT * FROM PERSONS WHERE id =$id";
		$result = mysql_query($SQL);
		return 3;

	}
	else {

		print "Database NOT Found ";
		mysql_close($db_handle);
		return 0;

	} 
}
?>