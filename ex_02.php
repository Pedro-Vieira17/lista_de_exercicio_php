<?php

function inverterTexto($texto) {
    
    $textoInvertido = strrev($texto);
    return $textoInvertido;

}

echo "Texto original: Oi, mundo! <br>";
echo "Texto invertido: " . inverterTexto("Oi, mundo!") . "<br>";

?>