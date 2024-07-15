<?php 
    //Die e Sleep

    //Sleep

    //O código só sera executado após 3 segundos
    sleep(3);
    echo "um";
    echo "<br/>";

    sleep(3);
    echo "dois";
    echo "<br/>";

    sleep(3);
    echo "três";
    echo "<br/>";

    //Die

    //O die para a execução do programa, ele não lê nada abaixo.

    $nome = "felipe";
    if($nome == "miguel"){
        echo "tudo certo";
    }else{
        die();
    }

?>