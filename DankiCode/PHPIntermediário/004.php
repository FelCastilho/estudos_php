<?php 
    //Criando funções
    function mostrarNome($nome){
        echo "<h2>Meu nome é: $nome</h2>";
    }  
    
    function mostrarIdade(){
        echo "eu tenho 22 anos";
    }

    mostrarNome("Felipe");
    mostrarIdade();

    echo "<hr/>";

    function calculadora($n1, $n2){
        echo $n1 + $n2;
    }    

    calculadora(1, 4);
?>
