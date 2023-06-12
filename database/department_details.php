<?php

require_once "database.php";
// create an object to make a connection to the database
$dbo = new Database();
//how to execute sql commands?
//a. write the string version of the command
$cmd = "select * from department_details";
//b. create a prepared statement
$statement = $dbo->conn->prepare($cmd);
//c. execute the prepared statement
$statement->execute();
//d. view the result
$returnValue = $statement->fetchAll(PDO::FETCH_ASSOC);
//e. display the result 
print_r($returnValue);