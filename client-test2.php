<?php
    ini_set("soap.wsdl_cache_enabled", "0"); // disabling WSDL cache
    $client = new SoapClient("http://localhost:8888/test/wsdl/persons.wsdl");
    //$return = $client->newUser('12319', "Tegan", "Brennan", "here", '2403937283', 
    //   	'tsbrenna@gmail.com', '4', '5', '1', '0');
    $return = $client->existsUser('12347');
	print_r($return);
	$return = $client->updateUser('12347', 'host','0');
    $return = $client->getUser('12345', 'lastName');
    print_r($return);
    //$return = $client->newCart('12345', '12', '40', '7','1','0','0');
    //print_r($return);
    $return = $client->existsCart('12345', '12');
    print_r($return);

    $return = $client->getCart('12345', '12', 'num');
    print_r($return);
    $return = $client->updateCart('12345', '12','num', '7');




?>