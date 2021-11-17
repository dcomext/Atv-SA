<?php
    $flag = 0;
    require_once "conexao.php";
    //construi a query
    $query = "SELECT * FROM pessoa_pj WHERE id = {$_GET['id']}";
    //executar a query
    $resultado = $con->query($query);

    if ($resultado) {
        foreach ($resultado as $value) {
            foreach ($value as $key => $v) {
                $$key = $v;
            }
        }
    }

?>