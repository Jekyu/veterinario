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

    function  getPetsClient($idUser){
        
        $urlError = "location: ../mascotas.php?=";

        $stmt = $this->connect()->prepare(
            "SELECT M.idmascota, M.namemascota
            FROM cliente as C, mascota as M
            WHERE C.idusuario = ? AND C.idusuario = M.idusuario;"
        );

        if(!$stmt->execute(array($idUser))){
            $stmt = null;
            header($urlError."stmtGetPetsFailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            exit();
        }

        $pets = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;
        return $pets;
    }

    function  getAgendaClient($idUser){
        
        $urlError = "location: ../mascotas.php?=";

        $stmt = $this->connect()->prepare(
            "SELECT C.idcita, M.namemascota, C.datecita, C.hourcita
            FROM mascota AS M, vet as V, cita as C, usuario as U
            WHERE C.idmascota = M.idmascota AND V.idvet = C.idvet 
            AND M.idusuario = U.idusuario AND U.idusuario = ?;"
        );

        if(!$stmt->execute(array($idUser))){
            $stmt = null;
            header($urlError."stmtGetAgendaFailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            exit();
        }

        $agenda = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;
        return $agenda;
    }
}

