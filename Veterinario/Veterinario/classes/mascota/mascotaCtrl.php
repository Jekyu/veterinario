<?php

class mascotaCtrl extends mascotaDbh{

    public function __construct(
        private $idcliente
    )
    {}

    public function createMascota($idPet,$namePet,$typePet,$agePet){
        
        if ($this->emptyInputCreate($idPet,$namePet,$typePet,$agePet)) {
            header("../registrarMascota.php?error=emptyInputCreatePet");
            exit();
        }
        $this->setMascota($idPet,$namePet,$typePet,$agePet,$this->idcliente);
    }


    private function emptyInputCreate($idPet,$namePet,$typePet,$agePet){
        if(
            empty($this->idPet) ||
            empty($this->namePet) ||
            empty($this->typePet) ||
            empty($this->agePet)
        ){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
     }
    
}