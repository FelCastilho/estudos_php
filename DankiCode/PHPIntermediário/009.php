<?php 
    //Funções para arrays

    $array1 = array("chave1" => "valor1","chave2" => "valor2");
    $array2 = array("chave3" => "valor3", "chave4" => "valor4");

    //Fundindo arrays
    $result = array_merge($array1, $array2);
    print_r ($result);

    echo "<br/>";

    $arr = ['<p>Felipe</p>', 'Miguel', '<h1>Gohan</h1>'];

    //Percorremos o array e adicionamos alguma funçao que a afeta todos os itens
    print_r(array_map('strip_tags', $arr));
?>