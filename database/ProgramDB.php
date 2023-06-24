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
        pd.department_id as did,
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
    public function createNewProgram($dbo, $code, $title, $nos, $gl, $tl, $did) 
    {
        $cmd = "INSERT INTO programme_details (title, code, no_of_sem, graduation_level, technical_level, department_id)
                VALUES (:title, :code, :no_of_sem, :graduation_level, :technical_level, :department_id)";
        $statement = $dbo->conn->prepare($cmd);
        
        try {
            // Check if $did is set and has a value
            if (isset($did)) {
                $statement->execute([
                    ":title" => $title, 
                    ":code" => $code, 
                    ":no_of_sem" => $nos, 
                    ":graduation_level" => $gl, 
                    ":technical_level" => $tl,
                    ":department_id" => $did
                ]);
                
                return 1;
            } else {
                return 0; // Return an appropriate error code or message if $did is not set
            }
        } catch (Exception $ee) {
            // Handle the exception here or rethrow it
            return 0;
        }
    }
    
    public function getProgramDetailsByCode($dbo,$code) 
    {
        $cmd = "select 
        pd.id as pid,
        pd.code as pcode,
        pd.title as ptitle,
        pd.no_of_sem as nos,
        pd.graduation_level as gl,
        pd.technical_level as tl,
        pd.department_id as did,
        dd.title as dtitle,
        dd.code as dcode 
            from programme_details as pd,
        department_details as dd 
            where pd.department_id=dd.id
        and 
        pd.code=:code";

        $statement = $dbo->conn->prepare($cmd);
        $statement->execute([":code" => $code]);
        $rv = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rv;
    }
    public function getProgramDetailsById($dbo,$id) 
    {
        $cmd = "select 
        pd.id as pid,
        pd.code as pcode,
        pd.title as ptitle,
        pd.no_of_sem as nos,
        pd.graduation_level as gl,
        pd.technical_level as tl,
        pd.department_id as did,
        dd.title as dtitle,
        dd.code as dcode 
            from programme_details as pd,
        department_details as dd 
            where pd.department_id=dd.id
        and 
        pd.id=:id";

        $statement = $dbo->conn->prepare($cmd);
        $statement->execute([":id" => $id]);
        $rv = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rv;
    }
    public function updateProgrammeDetail($dbo,$pid,$title,$code,$nos,$gl,$tl,$did)
    {
        $cmd = "update programme_details 
            set 
            title=:title,
            code=:code,
            no_of_sem=:no_of_sem,
            graduation_level=:graduation_level,
            technical_level=:technical_level,
            department_id=:department_id

            where id=:id
        ";
        $statement = $dbo->conn->prepare($cmd);
        try {
            //code...
            $statement->execute([
                ":id" => $pid,
                ":title" => $title,
                ":code" => $code,
                ":no_of_sem" => $nos,
                ":graduation_level" => $gl,
                ":technical_level" => $tl,
                ":department_id" => $did,
            ]);
            return 1;
        } catch (Exception $th) {
            //throw $th;
            return 0;
        }
        $rv = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rv;
    }
}

?>