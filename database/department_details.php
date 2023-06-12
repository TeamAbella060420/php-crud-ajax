<?php 

require_once('database.php');

$dbo = new Database;

$t= 'Department of Civil Engineering';
$code = 'CE';

$cmd = "insert into department_details (title, code) values(':titlex',':codex')";
$statement = $dbo->conn->prepare($cmd);
try {
    //code...
    $statement->execute([":titlex"=>"$t", ":codex"=> "$code"]);
} catch (\Throwable $th) {
    //throw $th;
    echo ($th->getMessage());
}

// $cmd = "insert into department_details (title, code) values('Department of Electrical','EE')";

$cmd = "select * from department_details";
$statement = $dbo->conn->prepare($cmd);
$statement->execute();
$returnValue = $statement->fetchAll(PDO::FETCH_ASSOC);

print_r($returnValue);

?>