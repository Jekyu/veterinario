<?php 

class mascotaDbh extends dbh{
    protected function getMascota($idPet){

        $urlError = "location: ../perfil.php?=";

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
}