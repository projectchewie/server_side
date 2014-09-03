<?php
function newCart($id, $cart_id, $cartPrice, $num, $active, $aggregate, $aggId){

	$user_name = "root";
	$password = "root";
	$database = "Initial_Chewie";
	$server = "localhost";
	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle); 

	if($db_found){
		$SQL = "INSERT INTO CARTS(id, cart_id, cartPrice, num, active, aggregate, aggId) 
		VALUES($id, $cart_id, $cartPrice, $num, $active, $aggregate, $aggId)";
		$result = mysql_query($SQL);
		mysql_close($db_handle);
	}
	else {
		print "Database NOT Found ";
		mysql_close($db_handle);
	} 
}


function existsCart($id, $cart_id){
	$user_name = "root";
	$password = "root";
	$database = "Initial_Chewie";
	$server = "localhost";

	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle); 
    if($db_found){
		
		$SQL = "SELECT * FROM CARTS WHERE id =$id and cart_id = $cart_id";
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


function getCart($id, $cart_id, $field){
	$user_name = "root";
	$password = "root";
	$database = "Initial_Chewie";
	$server = "localhost";

	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle); 
	if($db_found){
		$SQL = "SELECT $field FROM CARTS WHERE id =$id and cart_id =$cart_id LIMIT 1";
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

function updateCart($id, $cart_id, $field, $entry){
	$user_name = "root";
	$password = "root";
	$database = "Initial_Chewie";
	$server = "localhost";

	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle);  
	if($db_found){
		$SQL = "UPDATE CARTS SET $field = '$entry' WHERE id = $id and cart_id =$cart_id";
		$result = mysql_query($SQL);		
	}
	else {

		print "Database NOT Found ";
		mysql_close($db_handle);
	}    
}


?>