<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dados = array(
        "nome" => $_POST["nome"],
        "nConta" => $_POST["nConta"],
        "saldo" => $_POST["saldo"],
        "cpf" => $_POST["cpf"],
        "email" => $_POST["email"],
    );

    $json = json_encode($dados, JSON_PRETTY_PRINT);

    $nome_arquivo = "dados_" . date("YmdHis") . ".json";

    $string = print_r($json, true); 

    if (file_put_contents($nome_arquivo, $json)) {
        echo "Dados enviados com sucesso e salvos no arquivo JSON.<br><br><br>"; 
        echo $string;
    } else {
        echo "Ocorreu um erro ao salvar os dados em JSON.";
    }
}
?>
