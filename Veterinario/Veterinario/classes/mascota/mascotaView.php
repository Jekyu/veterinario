<?php

class mascotaView extends mascotaDbh{

    public function fetchidMascota($petID){
        $petInfo = $this->getMascota($petID);
        echo $petInfo[0]['idmascota'];
    }

    public function fetchnameMascota($petID){
        $petInfo = $this->getMascota($petID);
        echo $petInfo[0]['namemascota'];
    }

    public function fetchtipoMascota($petID){
        $petInfo = $this->getMascota($petID);
        echo $petInfo[0]['idtipomascota'];
    }

    public function fetchedadMascota($petID){
        $petInfo = $this->getMascota($petID);
        echo $petInfo[0]['edadaprox'];
    }

    public function fetchidclient($petID){
        $petInfo = $this->getMascota($petID);
        echo $petInfo[0]['idusuario'];
    }

    public function fetchrgtomascota($petID){
        $petInfo = $this->getMascota($petID);
        echo $petInfo[0]['rgtomascota'];
    }

}




