<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
            //  var_dump($_GET);  // Variável superglobal que armazena informações do método GET HTTP
            //  var_dump($_POST);  // Variável superglobal que armazena informações do método POST HTTP
            //  var_dump($_REQUEST);  // Superglobal de GET e POST e COOKIES

            // Na URL, ao tentar fazer um request sem passar um valor necessário, haverá um erro
            // O operador null coalescing ?? informa um valor substituto, caso não seja enviado nada

            $nome = $_GET["nome"] ?? "Sem nome";  // "nome" representa o name do input do formulário
            $sobrenome = $_GET["sobrenome"] ?? "Sem sobrenome";  // "nome" representa o name do input do formulário
            echo "<p>Seu nome é: <strong>$nome $sobrenome</strong></p>";
        ?>
        <p><a href="javascript:history.back()">Voltar para a página anterior</a></p>
    </main>
</body>
</html>