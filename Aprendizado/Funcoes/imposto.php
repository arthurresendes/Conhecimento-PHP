<?php
    function calcularImposto($valor){
        $imposto = 0.0;
        if($valor <= 1903.98){
            echo 'Insento';
        }else if($valor <= 2828.65){
            $imposto = $valor*0.075;
            echo 'Tera que pagar de imposto nivel 1: ' . round($imposto,2);
        }else if($valor <= 3751.05){
            $imposto = $valor*0.15;
            echo 'Tera que pagar de imposto nivel 2: ' . round($imposto,2);
        }else if($valor <= 4664.68){
            $imposto = $valor*0.225;
            echo 'Tera que pagar de imposto nivel 3: ' . round($imposto,2);
        }else{
            $imposto = $valor*0.275;
            echo 'Tera que pagar de imposto nivel 4: ' . round($imposto,2);
        }
    }

    calcularImposto(2828.66)

?>