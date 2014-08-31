<?php
require 'person_functions.php';
ini_set("soap.wsdl_cache_enabled", "0"); // disabling WSDL cache
$server = new SoapServer("persons.wsdl");
$server->addFunction("newUser");
$server->addFunction("existsUser");
$server->addFunction("updateUser");
$server->addFunction("getUser");
$server->handle();
?>