<?php

class dbh{
    protected function connect(){
        try {
            $username = 'postgres';
            $pswd = '123';
            $db = 'veterinaria';
            $dbh = new PDO("pgsql:host='localhost';dbname=$db",$username,$pswd);
        } catch (PDOException $e) {
            print "Error:".$e->getMessage()."<br>";
            die(); //Si hay error mata la conexión
        }
        return $dbh;
    }
}