<?php

class signupCtrl extends signupDbh{ 
    public function __construct(
        private $email,
        private $pswd,
        private $pswdRpt,
        private $id,
        private $name,
        private $lastN,
        private $age,
        private $drcn,
        private $telf
    ){}

    public function signupUser(){
        $error="location: ../registro.php?error=";
        if($this->emptyInputSignup()==false){
            header($error."emptyinput");
            exit();
        }
        if($this->invalidEmail()==false){
            header($error."invalidEmail");
            exit();
        }
        if($this->usedEmail()==false){
            header($error."usedEmail");
            exit();
        }
        if($this->invalidName()==false){
            header($error."invalidName");
            exit();
        }
        if($this->pswdMatch()==false){
            header($error."pswdMatch");
            exit();
        }

        $this->createUser(
            $this->email,
            $this->id,
            $this->pswd,
            $this->name,
            $this->lastN,
            $this->age,
            $this->drcn,
            $this->telf
        );
    }

    function emptyInputSignup(){
        if(
            empty($this->email) ||
            empty($this->pswd) ||
            empty($this->pswdRpt) ||
            empty($this->id) ||
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

    function invalidEmail(){
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }

    function usedEmail(){
        if(!$this->checkTakedUser($this->email,$this->id)){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }

    function invalidName(){
        $preg='/[^a-zA-Z]*$/';
        if(!preg_match($preg,$this->name) || !preg_match($preg,$this->lastN)){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }

    function pswdMatch(){
        if($this->pswd!==$this->pswdRpt){
            $result=false;
        }
        else{
            $result=true;
        }
        return true;
    }
}