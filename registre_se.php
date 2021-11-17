<!DOCTYPE html>
<html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <title>Registre-se</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <style>
        /* The container */
        .container {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .btn {
            border: none;
            color: white;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
        }

        .info {
            background-color: #2196F3;
        }

        /* Blue */
        .info:hover {
            background: #0b7dda;
        }

        /* Hide the browser's default radio button */
        .container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        /* Create a custom radio button */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
            border-radius: 50%;
        }

        /* On mouse-over, add a grey background color */
        .container:hover input~.checkmark {
            background-color: #ccc;
        }

        /* When the radio button is checked, add a blue background */
        .container input:checked~.checkmark {
            background-color: #2196F3;
        }

        /* Create the indicator (the dot/circle - hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the indicator (dot/circle) when checked */
        .container input:checked~.checkmark:after {
            display: block;
        }

        /* Style the indicator (dot/circle) */
        .container .checkmark:after {
            top: 9px;
            left: 9px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
        }
    </style>
</head>
<body>

<?php
    //$id=$nome=$logradouro = $cidade = $sexo = '';
var_dump($_POST);
    if (isset($_POST['registre_se'])) {
        echo "teste";
        //receber e validar os dados do post
        //$tipo = isset($_GET['tipo'])?$_GET['tipo']:"Selecione o tipo" 

        $tipo = trim($_POST['tipo']);
        switch ($tipo) {
            case 'Pessoa Física':
               require_once "cadastropf.php";
               // header("Location: cadastropf.php");
               exit;
                break;

            case 'Pessoa Jurídica':
                require_once "cadastropj.php";
                exit;
                break;
        }
    }
    else {
        echo "Não foi possível identificar";
    }
    ?>

    <form method="post" action="#">
        <h1>Tipo de Cadastro</h1>
        <label class="container">Pessoa Física
            <input type="radio" checked="checked" name="tipo" value="Pessoa Física">
            <span class="checkmark"></span>
        </label>
        <label class="container">Pessoa Jurídica
            <input type="radio" name="tipo" value="Pessoa Jurídica">
            <span class="checkmark"></span>
        </label>
        <button type="submit" name="registre_se" class="btn info">Cadastrar</button>
    </form>


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>