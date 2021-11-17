<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="csspf.css" media="screen" />
   <title>Cadastro Pessoa Física</title>
   
</head>

<body>
    <div class="basic-container">
        <header class="page-header">
            <h2 class="main-title">
                Cadastro Pessoa Física
            </h2>
        </header>

        <form name="cadastro_pf" method="post" action="cadastropfB.php" class="form-base" novalidate="">
                       
            <!--row-->
            <div class="row">
                <div class="col-xs-4">
                    <div class="form-group">
                        <label for="contribuinte_cpf" class="lbl1">CPF:*</label>
                        <input type="text" id="contribuinte_cpf" name="cpf" required="required" class="form-control form-control" maxlength="14" data-parsley-id="5041">
                        <ul class="parsley-errors-list" id="parsley-id-5041"></ul>
                    </div>
                </div>
            </div>

<!--row-->
<div class="row">
                <div class="col-xs-4">
                    <div class="form-group">
                        <label for="contribuinte_tipo" class="lbl1">Tipo:*</label>
                        <input type="text" id="contribuinte_tipo" name="tipo" readonly value="<?= $tipo ?>" class="form-control form-control" data-parsley-id="1318">
                        <ul class="parsley-errors-list" id="parsley-id-1318"></ul>
                    </div>
                </div>
            </div>
            <!--row-->

            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group">
                        <label for="contribuinte_nome" class="lbl1">Nome Completo:*</label>
                        <input type="text" id="contribuinte_nome" name="nome_completo" required="required" class="form-control form-control" data-parsley-id="6182">
                        <ul class="parsley-errors-list" id="parsley-id-6182"></ul>
                    </div>
                </div>
            </div>
            <!--/row-->

            <!--row-->
            <div class="row">
                <div class="col-xs-4">
                    <div class="form-group">
                        <label for="contribuinte_rg" class="lbl1">Rg:*</label>
                        <input type="text" id="contribuinte_rg" name="rg" required="required" class="number form-control" data-parsley-id="8423">
                        <ul class="parsley-errors-list" id="parsley-id-8423"></ul>
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
                                <label for="contribuinte_endereco" class="lbl1">Endereço:*</label>
                                <input type="text" id="contribuinte_endereco" name="endereco" required="required" class="form-control form-control" data-parsley-id="1318">
                                <ul class="parsley-errors-list" id="parsley-id-1318"></ul>
                            </div>
                        </div>

                        <div class="col-xs-2">
                            <div class="form-group">
                                <label for="contribuinte_numero" class="lbl1">Numero:*</label>
                                <input type="text" id="contribuinte_numero" name="numero" required="required" class="number form-control" data-parsley-id="1613">
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
                                <input type="text" id="contribuinte_bairro" name="bairro" required="required" class="form-control form-control" data-parsley-id="5481">
                                <ul class="parsley-errors-list" id="parsley-id-5481"></ul>
                            </div>
                        </div>

                        <div class="col-xs-2">
                            <div class="form-group">
                                <label for="contribuinte_uf" class="lbl1">Uf:*</label>
                                <input type="text" id="contribuinte_uf" name="uf" required="required" class="form-control form-control" data-parsley-id="9090">
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
                                <input type="text" id="contribuinte_municipio" name="municipio" required="required" class="form-control form-control" data-parsley-id="9104">
                                <ul class="parsley-errors-list" id="parsley-id-9104"></ul>
                            </div>
                        </div>

                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="contribuinte_cep" class="lbl1">Cep:*</label>
                                <input type="text" id="contribuinte_cep" name="cep" required="required" class="cep form-control" data-parsley-id="1632" maxlength="10">
                                <ul class="parsley-errors-list" id="parsley-id-1632"></ul>
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
                        <div class="col-xs-2">
                            <div class="form-group">
                                <label for="contribuinte_ddd" class="lbl1">DDD:*</label>
                                <input type="text" id="contribuinte_ddd" name="ddd" required="required" class="number form-control" maxlength="2" data-parsley-id="3777">
                                <ul class="parsley-errors-list" id="parsley-id-3777"></ul>
                            </div>
                        </div>

                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="contribuinte_telefone" class="lbl1">Telefone:*</label>
                                <input type="text" id="contribuinte_telefone" name="telefone" required="required" class="telefone-no-ddd form-control" data-parsley-id="8428" maxlength="9">
                                <ul class="parsley-errors-list" id="parsley-id-8428"></ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--/row-->


            <!--/row-->
            <div class="row">
                <div class="col-xs-4">
                    <div class="form-group">
                        <label for="contribuinte_email" class="lbl1">Email:*</label>
                        <input type="email" id="contribuinte_email" name="email" required="required" class="form-control form-control" data-parsley-id="6276">
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
            <div class="btn-bar">
                <button rel="btn-avancar" type="submit" name="cadastrar_pf" class="btn btn-default">
                    Cadastrar
                    <i class="fa fa-chevron-right icon-base-right" aria-hidden="true"></i>
                </button>
            </div>



            <input type="hidden" id="contribuinte__token" name="contribuinte[_token]" class="form-control" value="xGgz6-35kxgdP8QK9JsUrXh9LZkrdl96MWReBmTzGvk">
        </form>

    </div>
</body>

</html>