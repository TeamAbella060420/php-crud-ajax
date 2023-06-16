<?php

require_once "database.php";
require_once "ProgramDB.php";

$dbo = new Database();
$pdo = new ProgramDB();

// $rv = $pdo->getAllPrograms($dbo);
// print_r($rv);
// echo("<br>");
// $rv = $pdo->createNewProgram($dbo, "CSE", "BTECH in Electronics", 8, "UG", "BTECH", 3); 
// echo($rv);
// echo("<br>");
// $rv = $pdo->getAllPrograms($dbo);
// print_r($rv);
$rv = $pdo->getProgramDetailsById($dbo, 120);
print_r($rv);
echo("<br>");

$rv = $pdo->updateProgrammeDetail($dbo, 120, "It is a cat", "FFF", 34, "G", "BTECH", 3);
print_r($rv);

?>