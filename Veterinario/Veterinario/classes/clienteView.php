<?php

class clienteView extends clienteDbh{

    public function fetchIdClient($userID){
        $clientInfo = $this->getCliente($userID);
        echo $clientInfo[0]['idsuario'];
    }
    public function fetchNameClient($userID){
        $clientInfo = $this->getCliente($userID);
        echo $clientInfo[0]['namecliente'];
    }
    public function fetchLastNClient($userID){
        $clientInfo = $this->getCliente($userID);
        echo $clientInfo[0]['apecliente'];
    }
    public function fetchAgeClient($userID){
        $clientInfo = $this->getCliente($userID);
        echo $clientInfo[0]['edadcliente'];
    }
    public function fetchTelClient($userID){
        $clientInfo = $this->getCliente($userID);
        echo $clientInfo[0]['telcliente'];
    }
    public function fetchDirClient($userID){
        $clientInfo = $this->getCliente($userID);
        echo $clientInfo[0]['dircliente'];
    }

    function fetchPetsClient($userID){
        $pets = $this->getPetsClient($userID);
        foreach ($pets as $pet ) {
            echo "
            <a href='../miMascota.php?id=".$pet['idmascota']."'>
            <article class='card border-secondary mb-3'>
                <article class='card-body'>
                    <header><h4>".$pet['namemascota']."</h4></header>
                    <p>Id mascota:".$pet['idmascota']."</p>
                    <p>Tipo mascota:".$pet['nametipomascota']."</p>
                </article>
            </article>
            <a/>
            ";
        }
    }

    function fetchAgendaClient($userID){
        $citas = $this->getAgendaClient($userID);
        foreach ($citas as $cita ) {
            echo "
            <article class='card border-secondary mb-3'>
                <article class='card-body'>
                    <header><h4>".$cita['namemascota']."</h4></header>
                    <p>Id cita:".$cita['idcita']."</p>
                    <p>Fecha:".$cita['datecita']."</p>
                    <p>Hora:".$cita['hourcita']."</p>
                </article>
            </article>"
            ;
        }
    }
}