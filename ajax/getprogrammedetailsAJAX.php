<?php

//a: "21", b: "flower", action: "getprogrammedetails"
$p = $_POST["a"];
$q = $_POST["b"];
$action = $_POST["action1"];

if($action == "getprogrammedetails") {
 $result = [$p, $q, "from server"];
 $rv = json_encode($result);
 echo($rv);
 exit();
}
if($action1 == "getDepartmentdetails") {

}

