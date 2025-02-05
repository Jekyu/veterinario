<?php

class clienteCtrl extends clienteDbh{
     
    public function __construct(
        private $id, 
        /*private $name,
        private $lastN,
        private $telefono, 
        private $direc, 
        private $tipo,*/
    ){}

    public function updatePerfilCliente($name, $lastN, $age, $telf, $drcn)
    {
        if($this->emptyInputUpdate($name, $lastN, $age, $telf, $drcn)){
            header("../perfil.php?error=emptyInputUpdate");
            exit();
        }
        /*if($this->invalidName($name, $lastN)){
            header("../perfil.php?error=invalidNames");
            exit();
        }*/
        
        $this->updateCliente($name, $lastN, $age, $telf, $drcn,$this->id);
    }

    private function emptyInputUpdate($name, $lastN, $age, $telf, $drcn){
        if(
            empty($this->name) ||
            empty($this->lastN) ||
            empty($this->age) ||
            empty($this->drcn) ||
            empty($this->telf)
        ){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
     }

    private function invalidName($name, $lastN){
        $preg='/[^a-zA-Z]*$/';
        if(!preg_match($preg,$name) || !preg_match($preg,$lastN)){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }

    public function defaultCliente(){

    $urlError = "location: ../registro.php?=";
    $stmtCliente = $this->connect()->prepare(
        "INSERT INTO cliente (
        idusuario,namecliente,apecliente
        )
        VALUES(?, 'Usario','Cliente')"
    );

    if(!$stmtCliente->execute(array($this->id))){
        $stmt = null;
        header($urlError."stmtNewClientFailed");
        exit();
    }
    
    $stmt = null;
    }
}
