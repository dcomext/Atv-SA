<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<?php
require_once "funcoes.php";
$cnpj = "";
if (isset($_POST['consulta_cnpj'])) {
    empty($_POST['cnpj']) ? alertErro('CNPJ não preenchido') : $cnpj = formatarcnpj($_POST['cnpj']);
}
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,  "https://www.receitaws.com.br/v1/cnpj/$cnpj");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $resultado = curl_exec($ch);
    $resultado = json_decode($resultado, true);
    foreach ($resultado as $result => $key) {
        if($key == null ){
            continue;
        }
        else{
            $$result = $key;
        }
        
    }
    curl_close($ch);
    
?>