<?php

require_once "database.php";
require_once "ProgramDB.php";

$dbo = new Database();
$pdo = new ProgramDB();

$rv = $pdo->getAllPrograms($dbo);
print_r($rv);
echo(" ");
$rv = $pdo->createNewProgram($dbo, "ECE", "Btech in Electronics", 8, "UG", "BTECH", 4);
echo($rv);

?>