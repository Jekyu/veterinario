<?php

class loginCtrl extends loginDhb{
    public function __construct(
        private $email,
        private $pswd
    ){}

    public function loginUser(){
        $error="location: ../index.php?error=";
        if($this->emptyInputLogin()==false){
            header($error."emptyinput");
            exit();
        }
        if($this->invalidEmail()==false){
            header($error."invalidEmail");
            exit();
        }

        $this->checkUser(
            $this->email,
            $this->pswd
        );
    }

    function emptyInputLogin(){
        if(
            empty($this->email) ||
            empty($this->pswd)
        ){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }


    function invalidEmail(){
        if(filter_var($this->email,FILTER_VALIDATE_EMAIL))
        {
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }
}