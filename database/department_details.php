<?php 

require_once('database.php');

$dbo = new Database;

$cmd = "insert into department_details (title, code) values('Department of Electronics','ECE')";
$stmnt = $dbo->$conn->prepare($cmd);
$stmnt->execute();


$cmd = "select * from department_details";
$statement = $dbo->$conn->prepare($cmd);
$statement->execute();
$returnValue = $statement->fetchAll(PDO::FETCH_ASSOC);

print_r($returnValue);