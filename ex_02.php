<?php

function inverterTexto($texto) {
    
    $textoInvertido = strrev($texto);
    return $textoInvertido;

}

echo "Texto original: Olá, mundo! <br>";
echo "Texto invertido: " . inverterTexto("Olá, mundo!") . "<br>";

?>