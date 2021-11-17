
<?php

    require_once "cabecalho.php";
    require_once "conexao.php";
    require_once "funcoes.php";
?>
<main class = "shadow-lg py-3 px-md-5 mb-5 bg-red text-yellow rounded border">
<?php
    if (isset($_POST['submit'])) {
        $query = "DELETE FROM cliente WHERE id={$_POST['id']}";
        echo $query;
        $resultado = $con->query($query);
        if($resultado){
            alertSucesso("Deletado com sucesso");
            btEncerrar();
            exit();//encerrar a aplicação
        }else{
            alertErro("Houve um problema ao deletar o dado: ".$con->erro);
        }


    }else{
    //construir a query
    $query = "SELECT * FROM cliente where id = {$_GET['id']}";
    echo $query;
    //executar a query
    $resultado = $con->query($query);
    }
?>
<table class="table table-striped">
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
      <th scope="col">E-mail</th>>
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
      <td><a href="cadastropj.php?id=<?= $value['id']?>" class="btn btn-warning">Editar</a></td>
      <td><a href="delete.php?id=<?= $value['id']?>" class="btn btn-danger">Deletar</a></td>
    </tr>
    <?php } ?>
  
  </tbody>
</table>
<form action="#" method="post">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <div class="form-row">
        <input type="submit" name="submit" class="btn btn-danger text-center" value="Deletar">
        <a href="lista_dados.php" class="btn btn-primary">Lista Dados</a>
    </div>
</form>

</main>
<?php

    require_once "rodape.php";

?>