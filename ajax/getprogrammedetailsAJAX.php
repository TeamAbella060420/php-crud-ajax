<?php

// $root = $_SERVER["DOCUMENT_ROOT"];
include_once "../database/database.php";
include_once "../database/ProgramDB.php";
include_once "../database/DepartmentDB.php";

$action = $_POST["action1"];

if($action == "getprogrammedetails")
 {
  $dbo = new Database();
  $pdo = new ProgramDB();

  $result = $pdo->getAllPrograms($dbo);
  $rv = json_encode($result);
  echo($rv);
}

if($action == "getDepartmentDetails")
 {
  $dbo = new Database();
  $ddo = new DepartmentDB();

  $result = $ddo->getAllDepartments($dbo);
  $rv = json_encode($result);
  echo($rv);
}
?>