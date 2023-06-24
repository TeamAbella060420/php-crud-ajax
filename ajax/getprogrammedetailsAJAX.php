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

// $dbo,$code,$title,$nos,$gl,$tl,$did

if($action == "saveprogrammedetails")
 {
  $txtcode = $_POST['txtcode'];
  $txttitle = $_POST['txttitle'];
  $txtnos = $_POST['txtnos'];
  $dddepartment = $_POST['dddepartment'];
  $ddtl = $_POST['ddtl'];
  $ddgl = $_POST['ddgl'];

  $dbo = new Database();
  $pdo = new ProgramDB();

  $result = $pdo->createNewProgram($dbo,$txtcode,$txttitle,$txtnos,$dddepartment,$ddtl,$ddgl);
  $rv = json_encode($result);
  echo($rv);

}
?>