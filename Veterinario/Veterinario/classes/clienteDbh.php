<?php

class clienteDbh extends dbh{

    protected function getCliente($id){

        $urlError = "location: ../perfil.php?=";

        $stmt = $this->connect()->prepare(
            "SELECT C.* FROM usuario as U, cliente as C
            WHERE U.idusuario = ? AND U.idusuario = C.idusuario;"
        );

        if(!$stmt->execute(array($id))){
            $stmt = null;
            header($urlError."stmtGetFailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            header($urlError."profileNotFound");
            exit();
        }

        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $profileData;
    }

    protected function updateCliente(
        $nameCliente,$apeCliente,$edadCliente,$telCliente,$dirCliente,$id
        ){
        $urlError = "location: ../perfil.php?=";
        $stmtupdateCliente = $this->connect()->prepare(
            "UPDATE cliente SET 
            namecliente=?,
            apecliente=?,
            edadcliente=?,
            telcliente=?,
            dircliente=?
            WHERE idusuario = ?;"
        );

        if(!$stmtupdateCliente->execute(array(
            $nameCliente,$apeCliente,$edadCliente,$telCliente,$dirCliente,$id
            ))){
            $stmtupdateCliente = null;
            header($urlError."stmtUpdateFailed");
            exit();
        }
        $stmtupdateCliente = null;
    }
}