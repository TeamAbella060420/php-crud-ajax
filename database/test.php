<?php

require_once "database.php";
// create an object to make a connection to the database
$dbo = new Database();
//how to execute sql commands?
//a. write the string version of the command
$cmd= "select * from programme_details";
//b. create a prepared statement
$statement = $dbo->conn->prepare($cmd);
?>