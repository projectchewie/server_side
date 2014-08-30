<?php
    ini_set("soap.wsdl_cache_enabled", "0"); // disabling WSDL cache
    $client = new SoapClient("http://localhost:8888/test/wsdl/inventory2.wsdl");
    $return = $client->newUser('12345', "Tegan", "Brennan", "here", '2403937283', 
       	'tsbrenna@gmail.com', '4', '5', '1', '1');
    //$return = $client->getUser('12345');
    print_r($return);
?>