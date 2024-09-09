<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <h1>Tipos primitivos em PHP:</h1>

    <?php 
        // $num = 300;
        // echo "o valor da variavel é $num";
        // //Exibindo todas as informações da variavel na tela
        // var_dump(300);

        $num = (int) 3e1; //Forçando o número a ser inteiro (coerção);

        var_dump($num);

        $casado = true;

        echo "O valor de casado é: $casado";

        //Array em PHP
        $array = [6, "3", 2.3, 3e2];
        var_dump($array);

        

    ?>

</body>
</html>