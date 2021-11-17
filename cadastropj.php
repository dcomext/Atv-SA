<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="csspj.css" media="screen" />
    <title>Cadastro Pessoa Jurídica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <?php
        require_once "api.php";
        $flag = 1;
        if (isset($_POST['cadastrar_pj']) || isset($_POST['alterar']))
            require_once "cadastropjB.php";
        elseif ($_GET['id']) {
            require_once "selecionar_dados.php";
        }
    ?>

    <div class="basic-container">
        <header class="page-header">
            <h2 class="main-title">
                Cadastro Pessoa Jurídica
            </h2>
        </header>

        <form method="post" class="form-base" novalidate="" action="#">

            <!--row-->
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            <div class="row">
                <div class="col-xs-4">
                    <div class="form-group">
                        <label for="contribuinte_cpf" class="lbl1">CNPJ:*</label>
                        <input type="text" id="contribuinte_cnpj" name="cnpj" required="required" class="form-control form-control" data-parsley-id="5041" value="<?= $cnpj ?>">
                        <ul class="parsley-errors-list" id="parsley-id-5041"></ul>
                    </div>
                </div>
            </div>
            <!--row-->
        
            <div class="btn-bar">
                <button rel="btn-avancar" type="submit" name='consulta_cnpj' class="btn btn-default">
                    Consultar CNPJ
                    <i class="fa fa-chevron-right icon-base-right" aria-hidden="true"></i>
                </button>
            </div>
    <!--row-->
    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label for="contribuinte_nome_empresarial" class="lbl1">Nome Empresarial:*</label>
                <input type="text" id="contribuinte_nome_empresarial" name="nome_empresarial" required="required" class="form-control form-control" data-parsley-id="1318" value="<?php if(isset($nome)){ echo $nome; } else { echo ''; } ?>">
                <ul class="parsley-errors-list" id="parsley-id-1318"></ul>
            </div>
        </div>
    </div>
    <!--/row-->

    <!--row-->
    <div class="row">
        <div class="col-xs-4">
            <div class="form-group">
                <label for="contribuinte_endereco" class="lbl1">Tipo:*</label>
                <input type="text" id="contribuinte_endereco" name="tipo" readonly value="<?= isset($tipo) ? $tipo : '' ?>" class="form-control form-control" data-parsley-id="1318">
                <ul class="parsley-errors-list" id="parsley-id-1318"></ul>
            </div>
        </div>
    </div>
    <!--row-->


    <!--row-->
    <div class="row">
        <div class="col-xs-8">
            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group">
                        <label for="contribuinte_endereco" class="lbl1">Endereço:*</label>
                        <input type="text" id="contribuinte_endereco" name="logradouro" required="required" class="form-control form-control" data-parsley-id="1318" value="<?php if(isset($logradouro)){ echo $logradouro; } else { echo ''; } ?>">
                        <ul class="parsley-errors-list" id="parsley-id-1318"></ul>
                    </div>
                </div>
                <!--row-->

                <div class="col-xs-2">
                    <div class="form-group">
                        <label for="contribuinte_numero" class="lbl1">Numero:*</label>
                        <input type="text" id="contribuinte_numero" name="numero" required="required" class="number form-control" data-parsley-id="1613" value="<?php if(isset($numero)){ echo $numero; } else { echo ''; } ?>">
                        <ul class="parsley-errors-list" id="parsley-id-1613"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->


    <!--row-->
    <div class="row">
        <div class="col-xs-8">
            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group">
                        <label for="contribuinte_bairro" class="lbl1">Bairro:*</label>
                        <input type="text" id="contribuinte_bairro" name="bairro" required="required" class="form-control form-control" data-parsley-id="5481" value="<?php if(isset($bairro)){ echo $bairro; } else { echo ''; } ?>">
                        <ul class="parsley-errors-list" id="parsley-id-5481"></ul>
                    </div>
                </div>

                <div class="col-xs-2">
                    <div class="form-group">
                        <label for="contribuinte_uf" class="lbl1">Uf:*</label>
                        <input type="text" id="contribuinte_uf" name="uf" required="required" class="form-control form-control" data-parsley-id="9090" value="<?php if(isset($uf)){ echo $uf; } else { echo ''; } ?>">
                        <ul class="parsley-errors-list" id="parsley-id-9090"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->

    <!--row-->
    <div class="row">
        <div class="col-xs-8">
            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group">
                        <label for="contribuinte_municipio" class="lbl1">Município:*</label>
                        <input type="text" id="contribuinte_municipio" name="municipio" required="required" class="form-control form-control" data-parsley-id="9104" value="<?php if(isset($municipio)){ echo $municipio; } else { echo ''; } ?>">
                        <ul class="parsley-errors-list" id="parsley-id-9104"></ul>
                    </div>
                </div>

                <div class="col-xs-4">
                    <div class="form-group">
                        <label for="contribuinte_cep" class="lbl1">Cep:*</label>
                        <input type="text" id="contribuinte_cep" name="cep" required="required" class="cep form-control" data-parsley-id="1632" maxlength="10" value="<?php if(isset($cep)){ echo $cep; } else { echo ''; } ?>">
                        <ul class="parsley-errors-list" id="parsley-id-1632"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->

                <div class="col-xs-4">
                    <div class="form-group">
                        <label for="contribuinte_telefone" class="lbl1">Telefone:*</label>
                        <input type="text" id="contribuinte_telefone" name="telefone" required="required" class="telefone-no-ddd form-control" data-parsley-id="8428" maxlength="9" value="<?php if(isset($telefone)){ echo $telefone; } else { echo ''; } ?>">
                        <ul class="parsley-errors-list" id="parsley-id-8428"></ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--/row-->


    <!--row-->
    <div class="row">
        <div class="col-xs-8">
            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group">
                        <label for="natureza_juridica" class="lbl1">Natureza Juridica:*</label>
                        <input type="text" id="natureza_juridica" name="natureza_juridica" required="required" class="form-control form-control" data-parsley-id="7553" value="<?php if(isset($natureza_juridica)){ echo $natureza_juridica; } else { echo ''; } ?>">
                        <ul class="parsley-errors-list" id="parsley-id-7553"></ul>
                    </div>
                </div>

                <div class="col-xs-4">
                    <div class="form-group">
                        <label for="situacao_a_d" class="lbl1">Situação:*</label>
                        <input type="text" id="situacao_a_d" name="situacao" required="required" class="number form-control" data-parsley-id="8423" value="<?php if(isset($situacao)){ echo $situacao; } else { echo ''; } ?>">
                        <ul class="parsley-errors-list" id="parsley-id-8423"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->

    <!--row-->
    <div class="row">
        <div class="col-xs-4">
            <div class="form-group">
                <label for="contribuinte_cpf" class="lbl1">Porte:*</label>
                <input type="text" id="contribuinte_cpf" name="porte" required="porte" class="form-control form-control" maxlength="14" data-parsley-id="5041" value="<?php if(isset($porte)){ echo $porte; } else { echo ''; } ?>">
                <ul class="parsley-errors-list" id="parsley-id-5041"></ul>
            </div>
        </div>
    </div>

    <!--row-->
    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label for="contribuinte_regime_tributacao" class="lbl1">Abertura:*</label>
                <input type="text" id="contribuinte_regime_tributacao" name="abertura" required="required" class="form-control form-control" data-parsley-id="9157" value="<?php if(isset($abertura)){ echo $abertura; } else { echo ''; } ?>">
                <ul class="parsley-errors-list" id="parsley-id-9157"></ul>
            </div>
        </div>
    </div>

    <!--/row-->
    <div class="row">
        <div class="col-xs-4">
            <div class="form-group">
                <label for="contribuinte_email" class="lbl1">Email:*</label>
                <input type="email" id="contribuinte_email" name="email" required="required" class="form-control form-control" data-parsley-id="6276" value="<?php if(isset($email)){ echo $email; } else { echo ''; } ?>">
                <ul class="parsley-errors-list" id="parsley-id-6276"></ul>
            </div>
        </div>
    </div>
    <!--/row-->

    <!--/row-->
    <div class="row">
        <div class="col-xs-4">
            <div class="form-group">
                <label for="contribuinte_senha" class="lbl1">Senha:*</label>
                <input type="password" id="contribuinte_senha" name="senha" required="required" class="form-control form-control" data-parsley-id="6059">
                <ul class="parsley-errors-list" id="parsley-id-6059"></ul>

                <p>
                    A senha deve ter no mínimo 7 caracteres, possuir letras maiúsculas e minúsculas e um número.
                </p>

            </div>
        </div>
    </div>
            <!--/row-->
            <!--row-->
            <div class="row">
                <div class="col-xs-12 atividade-content">

                    <div class="panel panel-default">

                    </div>
                </div>
            </div>

            <!--row-->
            <div class="row">

            </div>

            <div class="row">
                <!--row-->
                        

            </div>
            <div class="form-row justify-content-center">
            <?php if ($flag) : ?>
                <input type="submit" name="cadastrar_pj" class="btn btn-primary text-center" value="Cadastrar">
            <?php else : ?>
                <input type="submit" name="alterar" class="btn btn-primary text-center" value="Alterar">
            <?php endif ?>
            <a href="lista_dados.php" class="btn btn-primary text-center ml-3">Ver dados</a>
        </div>

            

            <input type="hidden" id="contribuinte__token" name="contribuinte[_token]" class="form-control" value="xGgz6-35kxgdP8QK9JsUrXh9LZkrdl96MWReBmTzGvk">
        </form>

    </div>
</body>

</html>