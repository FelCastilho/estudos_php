<?php 
    //Concatenação

    $nome = 'Felipe';
    $idade = 22;
    $nomedaclasse = 'box';

    define("CARGO", 'Programador');
    
    //Formas de concatenar 
    echo "Meu nome é $nome";

    echo "<br/>";

    //Em elementos HTML
    echo "<div class=\"$nomedaclasse\"> Meu conteúdo da div</div>";
?>