<?php

function mascararCpf($cpf) {

$cpfMascarado = str_repeat("*", strlen($cpf) - 4) . substr($cpf, -4);

    return $cpfMascarado;

}

echo "Cpf original: 12345678901 <br>";
echo "Cpf mascarado: " . mascararCpf("12345678901") . "<br>";


?>