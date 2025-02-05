<?php

class loginDhb extends dbh{
    protected function checkUser($email,$pswd){
        $result =false;
        $stmt = $this->connect()->prepare(
            "SELECT passwd FROM usuario WHERE emailusuario = ? "
        );
        
        if(!$stmt->execute(array($email))){
            $stmt = null;
            header("location: ../index.php?=stmtFailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: ../index.php?=userNotFound1");
            exit();
        }
        
        $pswdDB = $stmt->fetchAll()[0]['passwd'];

        if($pswd !== $pswdDB){
            $stmt = null;
            header("location: ../index.php?=wrongPassword");
            exit();
        }
        else{
            $stmt2 = $this->connect()->prepare(
                "SELECT * FROM usuario WHERE emailusuario = ? AND passwd = ?;"
            );
            if(!$stmt2->execute(array($email,$pswd))){
                $stmt2 = null;
                header("location: ../index.php?=stmtError");
                exit();
            }
            if($stmt2->rowCount() == 0){
                $stmt2 = null;
                header("location: ../index.php?=userNotFound2");
                exit();
            }

            $user = $stmt2->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION['email'] = $user[0]['emailusuario'];

            header("location: ../inicio.php");
        }
        $stmt = null;
   }
}

