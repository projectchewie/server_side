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



function getUserfirstName($id){
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
			$row = mysql_fetch_row($result);
			return $row[1];		
		}

		else{
			$null = "null";
			return $null;
		} 
		mysql_close($db_handle);
	}
	else {

		print "Database NOT Found ";
		mysql_close($db_handle);
		return "Entry not found";

	} 
}


function getUserlastName($id){
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
			$row = mysql_fetch_row($result);
			return $row[2];		
		}

		else{
			$null = "null";
			return $null;
		} 
		mysql_close($db_handle);
	}
	else {

		print "Database NOT Found ";
		mysql_close($db_handle);
		return "Entry not found";

	} 
}

function getUserAddress($id){
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
			$row = mysql_fetch_row($result);
			return $row[3];		
		}

		else{
			$null = "null";
			return $null;
		} 
		mysql_close($db_handle);
	}
	else {

		print "Database NOT Found ";
		mysql_close($db_handle);
		return "Entry not found";

	} 
}


function getUserPhone($id){
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
			$row = mysql_fetch_row($result);
			return $row[4];		
		}

		else{
			$null = "null";
			return $null;
		} 
		mysql_close($db_handle);
	}
	else {

		print "Database NOT Found ";
		mysql_close($db_handle);
		return "Entry not found";

	} 
}

function getUserEmail($id){
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
			$row = mysql_fetch_row($result);
			return $row[5];		
		}

		else{
			$null = "null";
			return $null;
		} 
		mysql_close($db_handle);
	}
	else {

		print "Database NOT Found ";
		mysql_close($db_handle);
		return "Entry not found";

	} 
}


function getUserRadius($id){
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
			$row = mysql_fetch_row($result);
			return $row[6];		
		}

		else{
			$null = "null";
			return $null;
		} 
		mysql_close($db_handle);
	}
	else {

		print "Database NOT Found ";
		mysql_close($db_handle);
		return "Entry not found";

	} 
    
}

function getUserTimeDelay($id){
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
			$row = mysql_fetch_row($result);
			return $row[7];		
		}

		else{
			$null = "null";
			return $null;
		} 
		mysql_close($db_handle);
	}
	else {

		print "Database NOT Found ";
		mysql_close($db_handle);
		return "Entry not found";

	} 
    
}


function getUserHostDesire($id){
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
			$row = mysql_fetch_row($result);
			return $row[8];		
		}

		else{
			return 0;
		} 
		mysql_close($db_handle);
	}
	else {

		print "Database NOT Found ";
		mysql_close($db_handle);
		return "Entry not found";
	}    
}

function getUserHost($id){
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
			$row = mysql_fetch_row($result);
			return $row[9];
		}

		else{
			return 0;
		} 
		mysql_close($db_handle);
	}
	else {

		print "Database NOT Found ";
		mysql_close($db_handle);
		return "Entry not found";
	}    
}

?>