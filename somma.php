<?php
// Riproporre la funzione sommatoria con Splat Operator

function somma (...$numeri){

    $sum=0;

    foreach($numeri as $numero){
        $sum+=$numero;
    }

    return $sum;
}

$somma = somma(2,4,6,8,10);
echo "La somma dei numeri è $somma";

?>