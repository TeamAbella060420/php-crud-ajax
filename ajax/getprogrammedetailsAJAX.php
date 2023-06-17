<?php

// $root = $_SERVER["DOCUMENT_ROOT"];
include_once "../database/database.php";
include_once "../database/ProgramDB.php";

$p = $_POST["a"];
$q = $_POST["b"];
$action = $_POST["action1"];

if($action == "getprogrammedetails")
 {
  $dbo = new Database();
  $pdo = new ProgramDB();

  $result = $pdo->getAllPrograms($dbo);
  $rv = json_encode($result);
  echo($rv);
 
}



?>