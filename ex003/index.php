<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
        // 0x = hecadecimal 0b = binário = 0 = Octal
        $num = 300;
        $hexa = 0x1A;
        $octal = 010;
        echo "O valor da variável é $num<br>";
        echo "O valor hexadecimal representa $hexa<br>";
        echo "O valor octal representa $octal<br>";

        $variavel = 300;
        var_dump($variavel);  // Mostra o tipo e o valor da variável

        $exponencial = 3e2;  // 3 x 10 (2)
        echo "<br>O valor de 3e2 é = $exponencial<br>";

        var_dump($exponencial);
        $exponencial = (integer) 3e2;  // Coerção de tipo, float para int
        var_dump($exponencial);

        $casado = false;
        echo "<br>O valor para casado é $casado";  // O valor false dentro de um echo é vazio
        $casado = true;
        echo "<br>O valor para casado é $casado";  // O valor true dentro de um echo é 1

        $array = [9, 2.5, false, 5, "David"]; // É possível usar vários tipos primitivos dentro do array
        var_dump($array);

        echo "<br>";
        
        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>