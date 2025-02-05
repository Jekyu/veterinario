<?php 



/*
function emailExist($dbconn, $email){
    $sql = " SELECT emailusuario FROM usuario WHERE emailusuario=$email;";
    $stmt = pg_prepare($dbconn, "inv_email", $sql);

$result = pg_execute($dbconn, "my_query", array("Joe's Widgets"));
    if(){
        $result=true;
    }
    else{
        $result=false;
    }
}*/


/*
function invalidCedula(){
    if(){
        $result=true;
    }
    else{
        $result=false;
    }
}

function invalidNombre(){
    if(){
        $result=true;
    }
    else{
        $result=false;
    }
}

function invalidNombre(){
    if(){
        $result=true;
    }
    else{
        $result=false;
    }
}

function invalidEdad(){
    if(){
        $result=true;
    }
    else{
        $result=false;
    }
}

function invalidTel(){
    if(){
        $result=true;
    }
    else{
        $result=false;
    }
}*/



function createUser($datos){
    $sql1 = pg_query("
        INSERT INTO  usuario (idusuario,emailusuario, passwd)
        VALUES($datos['cedula'],'$datos['email']','$datos['password']');
    ");

    $sql2 = pg_query("INSERT INTO estadousuario VALUES($datos['cedula'],'E1')");
    $sql3 = pg_query("
    INSERT INTO  cliente (
        idusuario,
        namecliente,
        apecliente,
        edadcliente,
        telcliente,
        dircliente)
    VALUES(
        $datos['cedula'],
        '$datos['nombres']',
        '$datos['apellidos']',
        $datos['edad'],
        $datos['tel'],
        '$datos['direc']'
    );
    ");
}



