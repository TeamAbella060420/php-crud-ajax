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
        dd.code as dcode 
            from programme_details as pd,
        department_details as dd 
            where pd.department_id=dd.id";

        $statement = $dbo->conn->prepare($cmd);
        $statement->execute();
        $rv = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $rv;
    }
    public function createNewProgram($dbo,$code,$title,$nos,$gl,$tl,$did) 
    {
        $cmd = 
        "insert into programme_details (title,code,no_of_sem,graduation_level,technical_level,department_id)
            values(:title,:code,:no_of_sem,:graduation_level,:technical_level,:department_id)
        ";
        $statement = $dbo->conn->prepare($cmd);
        try {
            //code...
            $statement->execute(
                [
                    ":title" => $title, 
                    ":code" => $code, 
                    ":no_of_sem" => $nos, 
                    ":graduation_level" => $gl, 
                    ":technical_level" => $tl,
                    ":department_id" => $did
                ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}

?>