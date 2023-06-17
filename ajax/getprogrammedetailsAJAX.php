<?php

// $root = $_SERVER["DOCUMENT_ROOT"];
include_once "/php-crud-ajax/database/database.php";
include_once "/php-crud-ajax/database/ProgramDB.php";

$p = $_POST["a"];
$q = $_POST["b"];
$action = $_POST["action1"];

if($action == "getprogrammedetails")
 {
  $dbo = new Database();
  $pdo = new ProgramDB();

  $result = ["ubat"];
  $rv = json_encode($result);

  echo($rv);
  exit();
}

if($action == "getDepartmentdetails") {
  // Add your code here to handle the "getDepartmentdetails" action
  // For example:
  // $departmentDetails = "Department details from server";
  // $rv = json_encode($departmentDetails);
  // echo $rv;
}

?>