<?php

require_once "database.php";

class ProgramDB 
{
    public function getAllPrograms($dbo) 
    {
        $cmd = "select 
        pd.id as pid,
        pd.code as pcode,
        pd.title as ptitle,
        pd.no_of_sem as nos,
        pd.graduation_level as gl,
        pd.technical_level as tl,
        dd.title as dtitle,
        dd.code as dcode from programme_details as pd,
        department_details as dd where pd.department_id=dd.id";

        $statement = $dbo->conn->execute($cmd);
    }
}

?>