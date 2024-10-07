<?php

    function somar($n1, $n2){
        return $n1 + $n2;
    }

    function diminuir($n1, $n2){
        return $n1 - $n2;
    }

    function multiplicar($n1, $n2){
        return $n1 * $n2;
    }

    function dividir($n1, $n2){
        return $n1 / $n2;
    }

    function calculadora($primeiroNumero, $segundoNumero){

        $sinal = 'x';
        $n1 = $primeiroNumero;
        $n2 = $segundoNumero;

        if ($sinal == "+") {
            return somar($n1, $n2);
        }else if($sinal == '-'){
            return diminuir($n1, $n2);
        }else if($sinal == 'x'){
            return multiplicar($n1, $n2);
        }else if($sinal == '/'){
            return dividir($n1, $n2);
        }
    }

    echo calculadora(1, 2);


