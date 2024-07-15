<?php 

    echo "<br/>";
    echo "<strong>Utilizando For</strong>";
    echo "<hr>";

    for($contador =0; $contador <= 10; $contador++){
        echo "O número atual é $contador";
        echo "<hr>";
    }

    //While
    echo "<br/>";
    echo "<strong>Utilizando while</strong>";
    echo "<hr>";

    $contador = 0;

    while($contador < 10){
        echo "O número atual é $contador";
        echo "<hr>";
        $contador++;
    }

    echo "<br/>";
    echo "<strong>Utilizando Do While</strong>";
    echo "<hr>";

    $contador = 0;

    do{
        echo "Olá, mundo";
        echo "<br/>";
        $contador++;
    }while($contador < 10)
?>