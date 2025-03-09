<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo");  // GMT-3
        echo "Hoje é dia " . date("d/M/Y");
        echo "e a hora atual é " . date("G:i:s:T")
    ?>

    <? echo "test<br>"?>  <!-- Essa é a short open tag, e deve ser habilitada em php.ini para funcionar-->

    <?php 
        $nome = "David";
        echo "Muito prazer, $nome!";  // Variável
        $nome = "Camila";
        echo "<br>Agora a variável nome se chama $nome!";

        const PAIS = "Brasil";
        echo "<br>O país que nasci foi o " . PAIS;

        $nomeCompletoCliente = "Camel Case";
        $telefone_contato_fornecedor = "Snake Case";
        $nomecursosuperior = "";

        // PAIS = "EUA";  Gera um erro ao tentar atribuir um valor a uma constante

    ?>
</body>
</html>