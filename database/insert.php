<?php

require_once('database.php');

$dbo = new Database;

$cmd = "insert into department_details (title, code) values('Department of Electrical','EE')";
$statement = $dbo->conn->prepare($cmd);
$statement->execute();