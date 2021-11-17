<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
//if (isset($_POST['registre_se'])) {
    //receber e validar os dados do post
    //$tipo = isset($_GET['tipo'])?$_GET['tipo']:"Selecione o tipo" 

   // $tipo = trim($_POST['tipo']);
   $array_erro = [];
  // if(isset($_POST['submit'])){
   if(isset($_POST['cadastrar_pf'])){
    //receber e validar os dados do post
    empty($_POST['cpf']) ? $array_erro['cnpj'] = "Campo cnpj não preenchido" : $cpf = trim($_POST['cpf']);
    empty($_POST['tipo']) ? $array_erro['tipo'] = "Campo tipo não preenchido" : $tipo = trim($_POST['tipo']);
    empty($_POST['nome_completo']) ? $array_erro['nome_completo'] = "Campo nome da empresa não preenchido" : $nome_completo = trim($_POST['nome_completo']);
    empty($_POST['rg']) ? $array_erro['rg'] = "Campo rg não preenchido" : $rg = trim($_POST['rg']);
    empty($_POST['endereco']) ? $array_erro['endereco'] = "Campo endereco não preenchido" : $endereco = trim($_POST['endereco']);
    empty($_POST['numero']) ? $array_erro['numero'] = "Campo numero não preenchido" : $numero = trim($_POST['numero']);
    empty($_POST['bairro']) ? $array_erro['bairro'] = "Campo bairro não preenchido" : $bairro = trim($_POST['bairro']);
    empty($_POST['uf']) ? $array_erro['uf'] = "Campo uf não preenchido" : $uf = trim($_POST['uf']);
    empty($_POST['municipio']) ? $array_erro['municipio'] = "Campo municipio não preenchido" : $municipio = trim($_POST['municipio']);
    empty($_POST['cep']) ? $array_erro['cep'] = "Campo cep não preenchido" : $cep = trim($_POST['cep']);
    empty($_POST['ddd']) ? $array_erro['ddd'] = "Campo e-ddd não preenchido" : $ddd = trim($_POST['ddd']);
    empty($_POST['telefone']) ? $array_erro['telefone'] = "Campo e-ddd não preenchido" : $telefone = trim($_POST['telefone']);
    empty($_POST['email']) ? $array_erro['email'] = "Campo email não preenchido" : $email = trim($_POST['email']);
    empty($_POST['senha']) ? $array_erro['senha'] = "Campo senha não preenchido" : $senha = trim($_POST['senha']);
    
    if (count($array_erro) > 0) {

        foreach ($array_erro as $value) {
            alertErro($value);
            echo '<br>';
        }
    }
    else {
                
        //criar a query
        $dados_pf = "INSERT INTO pessoa_pf(id, cpf, tipo, nome_completo, rg, endereco, numero, bairro, uf, municipio, cep, ddd, telefone, email, senha) 
        VALUES(null, '$cpf', '$tipo', '$nome_completo', '$rg', '$endereco', '$numero', '$bairro', '$uf', '$municipio', '$cep', '$ddd', '$telefone', '$email', '$senha')";

    /* $query = "INSERT INTO tipo(id, tipo) 
                    VALUES(null, '$tipo')";

                    "INSERT INTO uf(id, uf) 
                    VALUES(null, '$uf)";

                "INSERT INTO pessoa_pf(id, tipo, cpf, nome_completo, rg, cpf, uf, regime_tributacao, email, senha) 
                    VALUES(null, '$cpj', '$tipo', '$cpf', '$nome_completo', '$rg', '$uf', '$email, $senha')";

                "INSERT INTO endereco(id, endereco, numero, bairro, municipio, cep, uf, regime_tributacao, email, senha) 
                    VALUES(null, '$endereco', '$numero', '$bairro', '$municipio', '$cep', '$cpf', '$uf', '$regime_tributacao', '$email, $senha')";

                "INSERT INTO tel(id, endereco, numero, bairro, municipio, cep, uf, regime_tributacao, email, senha) 
                    VALUES(null, '$cnpj', '$nome_empresa', '$tipo', '$representante_legal', '$rg', '$cpf', '$uf', '$regime_tributacao', '$email, $senha')";
        */
        
        //executar a query
        $resultado = $con->query($dados_pf);

        //validar o resultado
        if ($resultado) {
            echo "Dados inseridos com sucesso";
            $nome = $logradouro = $cidade = $sexo = "";
        } else {
            echo "Não foi possível inserir os dados! Erro: " . $con->error;
        }
        //fechar a conexão
        $con->close();


    }
    elseif (isset($_POST['pesquisar'])) {
        echo "Pesquisar";
        //receber e validar os dados do post
        $id = trim($_POST['id']);
        //conectar ao banco
        $con = new mysqli('localhost', 'root', 'root', 'imersao');
        if ($con->connect_error) {
            echo "Não foi possível estabelecer conexão! Erro: " . $con->connect_error;
        }
        //criar a query
        $query = "SELECT * FROM pessoa WHERE id = $id";
        
        //executar a query
        $resultado = $con->query($query);
        //validar o resultado
        foreach ($resultado as $value) {
            foreach ($value as $key => $v) {
                
                $$key = $v;
            }
        }
        //fechar a conexão
        $con->close();
    }elseif(isset($_POST['alterar'])){
        //receber e validar os dados do post
        $id = trim($_POST['id']);
        $nome = trim($_POST['nome']);
        $logradouro = trim($_POST['logradouro']);
        $cidade = trim($_POST['cidade']);
        $sexo = trim($_POST['sexo']);
        //conectar ao banco
        $con = new mysqli('localhost', 'root', 'root', 'imersao');
        if ($con->connect_error) {
            echo "Não foi possível estabelecer conexão! Erro: " . $con->connect_error;
        }
        //criar a query
        $query = "UPDATE pessoa SET nome='$nome', logradouro = '$logradouro', 
        cidade = '$cidade', sexo = '$sexo' WHERE id = $id";
        //executar a query
        $resultado = $con->query($query);
        //validar o resultado
        if ($resultado) {
            echo "Dados atualizados com sucesso!";
            $id=$nome=$logradouro = $cidade = $sexo = '';
        }else{
            echo "Não foi possível atualizar os dados!";
        }
        //fechar a conexão
        $con->close();
    }elseif(isset($_POST['deletar'])){
        //receber e validar os dados do post
        //conectar ao banco
        //criar a query
        //executar a query
        //validar o resultado
        //fechar a conexão
    }elseif(isset($_POST['limpa_tudo'])){

    }
    ?>