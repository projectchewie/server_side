<?php
    ini_set("soap.wsdl_cache_enabled", "0"); // disabling WSDL cache
    $client = new SoapClient("http://localhost:8888/test/wsdl/inventory2.wsdl");
    $return = $client->newUser('12319', "Tegan", "Brennan", "here", '2403937283', 
       	'tsbrenna@gmail.com', '4', '5', '1', '0');
    $return = $client->getUserfirstName('12345');
    print_r($return);
    print_r("\r");
    $return = $client->getUserlastName('12345');
    print_r($return);
    print_r("\r");
    $return = $client->getUserAddress('12345');
	print_r($return);
	print_r("\r");
    $return = $client->getUserPhone('12345');
	print_r($return);
	print_r("\r");
    $return = $client->getUserEmail('12345');
	print_r($return);
	print_r("\r");
    $return = $client->getUserRadius('12345');
	print_r($return);
	print_r("\r");
    $return = $client->getUserTimeDelay('12345');
	print_r($return);
	print_r("\r");
    $return = $client->getUserHostDesire('12345');
	print_r($return);
	print_r("\r");
    $return = $client->getUserHost('12319');
	print_r($return);
	print_r("\r");
    $return = $client->existsUser('123119');
	print_r($return);
	
	
 



?>