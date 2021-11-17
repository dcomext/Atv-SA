<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <?php
    if (isset($_GET['id'])) {
        $flag = 0;
    } else
        $flag = 1;
    require_once "conexao.php";
    require_once "funcoes.php";


    //if (isset($_POST['registre_se'])) {
    //receber e validar os dados do post
    //$tipo = isset($_GET['tipo'])?$_GET['tipo']:"Selecione o tipo" 
    // $tipo = trim($_POST['tipo']);
    $array_erro = [];
    // if(isset($_POST['submit'])){
    //receber e validar os dados do post
    $cnpj = formatarcnpj($_POST['cnpj']);
    empty($_POST['nome_empresarial']) ? $array_erro['nome_empresarial'] = "Campo nome da empresa não preenchido" : $nome = trim($_POST['nome_empresarial']);
    empty($_POST['tipo']) ? $array_erro['tipo'] = "Campo tipo não preenchido" : $tipo = trim($_POST['tipo']);
    empty($_POST['logradouro']) ? $array_erro['logradouro'] = "Campo endereco não preenchido" : $logradouro = trim($_POST['logradouro']);
    empty($_POST['numero']) ? $array_erro['numero'] = "Campo numero não preenchido" : $numero = trim($_POST['numero']);
    empty($_POST['bairro']) ? $array_erro['bairro'] = "Campo bairro não preenchido" : $bairro = trim($_POST['bairro']);
    empty($_POST['uf']) ? $array_erro['uf'] = "Campo uf não preenchido" : $uf = trim($_POST['uf']);
    empty($_POST['municipio']) ? $array_erro['municipio'] = "Campo municipio não preenchido" : $municipio = trim($_POST['municipio']);
    empty($_POST['cep']) ? $array_erro['cep'] = "Campo cep não preenchido" : $cep = trim($_POST['cep']);
    empty($_POST['telefone']) ? $array_erro['telefone'] = "Campo telefone não preenchido" : $telefone = trim($_POST['telefone']);
    empty($_POST['natureza_juridica']) ? $array_erro['natureza_juridica'] = "Campo representante legal não preenchido" : $natureza_juridica = trim($_POST['natureza_juridica']);
    empty($_POST['situacao']) ? $array_erro['situacao'] = "Campo rg não preenchido" : $situacao = trim($_POST['situacao']);
    empty($_POST['porte']) ? $array_erro['porte'] = "Campo porte não preenchido" : $porte = trim($_POST['porte']);
    empty($_POST['abertura']) ? $array_erro['abertura'] = "Campo regime de tributacao não preenchido" : $abertura = trim($_POST['abertura']);
    empty($_POST['email']) ? $array_erro['email'] = "Campo email não preenchido" : $email = trim($_POST['email']);
    empty($_POST['senha']) ? $array_erro['senha'] = "Campo senha não preenchido" : $senha = trim($_POST['senha']);

    $dados_pj = "";
    if (count($array_erro) > 0) {

        foreach ($array_erro as $value) {
            alertErro($value);
            echo '<br>';
        }
    } elseif (isset($_POST['cadastrar_pj']) || isset($_POST['alterar'])) {
        if (!$flag) {
            $query = "UPDATE pessoa_pj SET cnpj='$cnpj', nome='$nome', tipo='$tipo', logradouro='$logradouro', 
            numero='$numero', bairro='$bairro', uf='$uf', municipio='$municipio', cep='$cep', telefone='$telefone', 
            natureza_juridica='$natureza_juridica', situacao='$situacao', porte='$porte', abertura='$abertura',
            email='$email', senha='$senha'WHERE id = {$_GET['id']}";
        } else {
            $query = "INSERT INTO pessoa_pj VALUES(null, '$cnpj', '$nome', '$tipo', '$logradouro', 
            '$numero', '$bairro', '$uf', '$municipio', '$cep', '$telefone', 
            '$natureza_juridica', '$situacao', '$porte', '$abertura', '$email', '$senha')";
        }
        //execução da query acontece aqui
        $resultado = $con->query($query);
        if ($resultado) {
            alertSucesso('Operação realizada com sucesso!');
            $con->close();
            pag_inicial_consulta();
            exit();
        } else {
            alertErro('Não foi possível realizar a operação: ' . $con->error);
        }
    }



    /*$query1 = "INSERT INTO tipo(id, tipo) 
                VALUES(null, '$tipo')";

    $resultado1 = $con->query($query1);
    $id_tipo = $con->insert_id;

                "INSERT INTO uf(id, uf) 
                VALUES(null, '$uf)";

            "INSERT INTO pessoa_pj(id, cnpj, nome_empresa, tipo, representante_legal, rg, cpf, uf, regime_tributacao, email, senha) 
                VALUES(null, '$cnpj', '$nome_empresa', '$tipo', '$representante_legal', '$rg', '$cpf', '$uf', '$regime_tributacao', '$email, $senha')";

            "INSERT INTO endereco(id, endereco, numero, bairro, municipio, cep, uf, regime_tributacao, email, senha) 
                VALUES(null, '$endereco', '$numero', '$bairro', '$municipio', '$cep', '$FKPJ', '$FKPF', '$FKTEL')";

            "INSERT INTO tel(id, ddd, telefone, bairro, municipio, cep, uf, regime_tributacao, email, senha) 
                VALUES(null, '$ddd', '$telefone', '$FK End')";*/


    //executar a query




    // if (isset($_POST['pesquisar'])) {
    //     echo "Pesquisar";
    //     //receber e validar os dados do post
    //     $id = trim($_POST['id']);
    //     //conectar ao banco
    //     $con = new mysqli('localhost', 'root', 'root', 'imersao');
    //     if ($con->connect_error) {
    //         echo "Não foi possível estabelecer conexão! Erro: " . $con->connect_error;
    //     }
    //     //criar a query
    //     $query = "SELECT * FROM pessoa WHERE id = $id";

    //     //executar a query
    //     $resultado = $con->query($query);
    //     //validar o resultado
    //     foreach ($resultado as $value) {
    //         foreach ($value as $key => $v) {

    //             $$key = $v;
    //         }
    //     }
    //     //fechar a conexão
    //     $con->close();
    // } elseif (isset($_POST['alterar'])) {
    //     //receber e validar os dados do post
    //     $id = trim($_POST['id']);
    //     $nome = trim($_POST['nome']);
    //     $logradouro = trim($_POST['logradouro']);
    //     $cidade = trim($_POST['cidade']);
    //     $sexo = trim($_POST['sexo']);
    //     //conectar ao banco
    //     $con = new mysqli('localhost', 'root', 'root', 'imersao');
    //     if ($con->connect_error) {
    //         echo "Não foi possível estabelecer conexão! Erro: " . $con->connect_error;
    //     }
    //     //criar a query
    //     $query = "UPDATE pessoa SET nome='$nome', logradouro = '$logradouro', cidade = '$cidade', sexo = '$sexo' WHERE id = $id";
    //     //executar a query
    //     $resultado = $con->query($query);
    //     //validar o resultado
    //     if ($resultado) {
    //         echo "Dados atualizados com sucesso!";
    //         $id = $nome = $logradouro = $cidade = $sexo = '';
    //     } else {
    //         echo "Não foi possível atualizar os dados!";
    //     }
    //     //fechar a conexão
    //     $con->close();
    // } //elseif (isset($_POST['deletar'])) {
    //     //receber e validar os dados do post
    //     //conectar ao banco
    //     //criar a query
    //     //executar a query
    //     //validar o resultado
    //     //fechar a conexão
    // //} //elseif (isset($_POST['limpa_tudo'])) {

    //}
    ?>