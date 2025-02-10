<?php 

class mascotaDbh extends dbh{
    protected function getMascota($idPet){

        $urlError = "location: ../mimascota.php?error=";

        $stmt = $this->connect()->prepare(
            "SELECT * FROM mascota WHERE idmascota=?;"
        );

        if(!$stmt->execute(array($idPet))){
            $stmt = null;
            header($urlError."stmtGetPetFailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            header($urlError."petNotFound");
            exit();
        }

        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $profileData;
    }

    protected function setMascota($idPet,$namePet,$typePet,$agePet,$idcliente){

        $urlError = "location: ../registrarMascota.php?=";

        $stmt = $this->connect()->prepare(
            "INSERT INTO mascota (idmascota,namemascota,idtipomascota,edadaprox,idUsuario)
            values (?,?,?,?,?);"
        );

        if(!$stmt->execute(array($idPet,$namePet,$typePet,$agePet,$idcliente))){
            $stmt = null;
            header($urlError."stmtSetPetFailed");
            exit();
        }

        $stmt = null;
    }
}