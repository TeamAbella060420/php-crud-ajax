<?php


$p = $_POST["a"];
$q = $_POST["b"];
$action = $_POST["action"];

if($action == "getprogrammedetails") {
  $result = [$p, $q, "from server"];
  $rv = json_encode($result);
  echo $rv;
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