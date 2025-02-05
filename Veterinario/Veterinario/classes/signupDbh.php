<?php

class signupDbh extends dbh{
    public function createUser($email,$id,$pswd,$name,$lastN,$age,$drcn,$telf){
        $result =false;
            $stmtUser = $this->connect()->prepare(
                "INSERT INTO  usuario (idusuario,emailusuario, passwd)
                VALUES(?,?,?);"
            );

            $stmtCliente = $this->connect()->prepare(
                "INSERT INTO cliente (
                idusuario,
                namecliente,
                apecliente,
                edadcliente,
                telcliente,
                dircliente)
                VALUES(?,?,?,?,?,?)"
            );
        if(!$stmtUser->execute(array($id,$email,$pswd))){
            $stmt = null;
            header("location: ../registro.php?error=failRegisterUsuario");
            exit();
        }
        if(!$stmtCliente->execute(array($id,$name,$lastN,$age,$telf,$drcn))){
            $stmt = null;
            header("location: ../registro.php?error=failRegisterCliente");
            exit();
        }

        $stmt = null;
    }


    public function checkTakedUser($email,$id){
        $result =false;
        $stmt = $this->connect()->prepare(
            "SELECT * FROM usuario WHERE emailusuario = ? AND idUsuario = ?;"
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
   
}