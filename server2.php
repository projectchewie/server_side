<?php
require 'inventory_functions2.php';

ini_set("soap.wsdl_cache_enabled", "0"); // disabling WSDL cache
$server = new SoapServer("inventory2.wsdl");
$server->addFunction("newUser");

$server->addFunction("getUserfirstName");
$server->addFunction("getUserlastName");
$server->addFunction("getUserAddress");
$server->addFunction("getUserPhone");
$server->addFunction("getUserEmail");
$server->addFunction("getUserRadius");
$server->addFunction("getUserTimeDelay");
$server->addFunction("getUserHostDesire");
$server->addFunction("getUserHost");
$server->addFunction("existsUser");




$server->handle();
?>