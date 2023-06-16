<?php

require_once "database.php";
require_once "ProgramDB.php";

$dbo = new Database();
$pdo = new ProgramDB();

$rv = $pdo->getAllPrograms($dbo);
print_r($rv);
echo("<br>");
$rv = $pdo->createNewProgram($dbo, "ME", "BTECH in Electronics", 8, "UG", "BTECH", 9); 
echo($rv);
echo("<br>");
$rv = $pdo->getAllPrograms($dbo);
print_r($rv);

?>