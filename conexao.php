<?php

    $con = new mysqli('localhost', 'root', '', 'bd_usuarios');

    if($con->connect_error){
        $msg = "Falha ao conectar: ".$con->connect_error;
        alertErro($msg);
    }

?>