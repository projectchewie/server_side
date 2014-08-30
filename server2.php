<?php
require 'inventory_functions2.php';

ini_set("soap.wsdl_cache_enabled", "0"); // disabling WSDL cache
$server = new SoapServer("inventory2.wsdl");
$server->addFunction("newUser");
$server->handle();
?>