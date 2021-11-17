<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">-->
    <style>

h1{
  margin-top: 3px;
  margin-bottom: 3px;
}

header {
  padding: 5px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 14px;
  width: 1264px;
 }

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size: 10px;
  text-align: center;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
}
  a.two:link, a.two:visited {
  background-color: #c62115;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 5px;
}

a.two:hover, a.two:active {
  background-color: red;
}
a.one:link, a.one:visited {
  background-color: #10927d;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 5px;
}

a.one:hover, a.one:active {
  background-color: #15a890;
}

</style>

    <title>Lista de Dados</title>
</head>
<body>
    <header class="bg-secondary text-dark text-center sticky-top">
        <h1>Dados PJ</h1>
    </header>

<main class = "shadow-lg py-3 px-md-5 mb-5 bg-white text-dark rounded border">

<?php
require_once "conexao.php";
    //criar a string da query
    $query = "SELECT * FROM pessoa_pj";
    //executa a query
    $resultado = $con->query($query);
    
?>
<table id="customers">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">cnpj</th>
      <th scope="col">Nome Empresarial</th>
      <th scope="col">Tipo</th>
      <th scope="col">Endereço</th>
      <th scope="col">Número</th>
      <th scope="col">Bairro</th>
      <th scope="col">UF</th>
      <th scope="col">Município</th>
      <th scope="col">CEP</th>
      <th scope="col">Telefone</th>
      <th scope="col">Natureza Jurídica</th>
      <th scope="col">Situação</th>
      <th scope="col">Porte</th>
      <th scope="col">Abertura</th>
      <th scope="col">E-mail</th>
      <th colspan = "2" scope="col">Opções</th>>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($resultado as $value) {?>
    <tr>
      <th scope="row"><?= $value['id'] ?></th>
      <td><?= $value['cnpj'] ?></td>
      <td><?= $value['nome'] ?></td>
      <td><?= $value['tipo'] ?></td>
      <td><?= $value['logradouro'] ?></td>
      <td><?= $value['numero'] ?></td>
      <td><?= $value['bairro'] ?></td>
      <td><?= $value['uf'] ?></td>
      <td><?= $value['municipio'] ?></td>
      <td><?= $value['cep'] ?></td>
      <td><?= $value['telefone'] ?></td>
      <td><?= $value['natureza_juridica'] ?></td>
      <td><?= $value['situacao'] ?></td>
      <td><?= $value['porte'] ?></td>
      <td><?= $value['abertura'] ?></td>
      <td><?= $value['email'] ?></td>
      <td><a href="cadastropj.php?id=<?= $value['id']?>" class="one">Editar</a></td>
      <td><a href="delete.php?id=<?= $value['id']?>" class="two">Deletar</a></td>
    </tr>
    <?php } ?>
  
  </tbody>
</table>

</main>

<footer class = "bg-secondary fixed-bottom text-center text-dark">
    <p>@Copyright</p>
</footer>
</body>
</html>


<?php
   // require_once "rodape.php";
?>;