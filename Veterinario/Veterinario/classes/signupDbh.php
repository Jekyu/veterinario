<?php

class signupDbh extends dbh{

    public function createUser($email,$id,$pswd){
            $stmtUser = $this->connect()->prepare(
                "INSERT INTO  usuario (idusuario,emailusuario, passwd)
                VALUES(?,?,?);"
            );

        if(!$stmtUser->execute(array($id,$email,$pswd))){
            $stmt = null;
            header("location: ../registro.php?error=failRegisterUsuario");
            exit();
        }

        $stmtUser = null;
    }

    public function checkTakedUser($email,$id){
        $stmt = $this->connect()->prepare(
            "SELECT * FROM usuario WHERE emailusuario = ? OR idUsuario = ?;"
        );

        if(!$stmt->execute(array($email,$id))){
            $stmt = null;
            header("location: ../registro.php?error=failCheckingUsers");
            exit();
        }

        if($stmt->rowCount()>0){
            $result=false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    protected function getUserID($email){

        $urlError = "location: ../perfil.php?=";

        $stmtGetUser = $this->connect()->prepare(
            "SELECT idusuario FROM usuario WHERE emailusuario = ?"
        );

        if(!$stmtGetUser->execute(array($email))){
            $stmtGetUser = null;
            header($urlError."stmtSignupClientRegisterGetFailed".gettype($email));
            exit();
        }

        if($stmtGetUser->rowCount() == 0){
            $stmtGetUser = null;
            header($urlError."profileNotFound");
            exit();
        }

        $profileData = $stmtGetUser->fetchAll(PDO::FETCH_ASSOC);

        return $profileData;
    }
}