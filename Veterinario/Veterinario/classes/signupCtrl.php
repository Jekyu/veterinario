<?php

class signupCtrl extends signupDbh{ 
    public function __construct(
        private $email,
        private $pswd,
        private $pswdRpt,
        private $userId
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
        if($this->pswdMatch()==false){
            header($error."pswdMatch");
            exit();
        }

        $this->createUser(
            $this->email,
            $this->userId,
            $this->pswd
        );
    }

    function emptyInputSignup(){
        if(
            empty($this->email) ||
            empty($this->pswd) ||
            empty($this->pswdRpt) ||
            empty($this->userId)
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
        if(!($this->checkTakedUser($this->email,$this->userId))){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }

    private function pswdMatch(){
        if($this->pswd!==$this->pswdRpt){
            $result=false;
        }
        else{
            $result=true;
        }
        return true;
    }

    public function fetchUserId(){
        //(trae array)[row][col] = int
        return ($this->getUserID($this->email))[0]['idusuario'];
    }
}