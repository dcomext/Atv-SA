
<?php


function alertErro($msg)
{
    echo '<div class="alert alert-danger" role="alert">';
    echo $msg;
    echo '</div>';
}

function alertSucesso($msg)
{
    echo '<div class="alert alert-success" role="alert">';
    echo $msg;
    echo '</div>';
}

function login()
{
    session_start();
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    require_once "conexao.php";

    $query = "SELECT nome FROM usuario WHERE email = '$email' AND senha = sha1('" . $senha . "')";
    echo $query;
    $resultado = $con->query($query);
    if (!($resultado->num_rows == 1)) {
        header("Location: login.php");
        exit();
    }
}
function formatarcnpj($str){
    $res = str_replace(array(".","/","-"), '', $str);
    return $res;
}
function pag_inicial_consulta()
{
    echo '<div class="row justify-content-center">';
    echo '<a href="lista_dados.php" class="btn btn-primary text-center ml-3">Ver dados</a>';
    echo '<a href="index.php" class="btn btn-primary text-center ml-3">Cadastrar</a>';
    echo '</div>';
}

?>
