<?php

// 1. Calcular IMC
function calcularIMC($peso, $altura){
    return $peso / ($altura * $altura);
}

// 2. Validar e-mail
function validarEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// 3. Gerar senha aleatória
function gerarSenha($tamanho){
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $senha = "";

    for($i = 0; $i < $tamanho; $i++){
        $senha .= $caracteres[rand(0, strlen($caracteres)-1)];
    }

    return $senha;
}

// 4. Contar vogais
function contarVogais($texto){
    $vogais = "aeiouAEIOU";
    $contador = 0;

    for($i = 0; $i < strlen($texto); $i++){
        if(strpos($vogais, $texto[$i]) !== false){
            $contador++;
        }
    }

    return $contador;
}

// 5. Inverter texto
function inverterTexto($texto){
    return strrev($texto);
}

// 6. Calcular idade
function calcularIdade($anoNascimento){
    return date("Y") - $anoNascimento;
}

// 7. Converter moeda (Real para Dólar)
function converterMoeda($valor, $cotacao){
    return $valor / $cotacao;
}

// 8. Formatar telefone
function formatarTelefone($telefone){
    return "(" . substr($telefone,0,2) . ") " .
           substr($telefone,2,5) . "-" .
           substr($telefone,7,4);
}

// 9. Saudação
function saudacao(){

    $hora = date("H");

    if($hora < 12){
        return "Bom dia";
    }elseif($hora < 18){
        return "Boa tarde";
    }else{
        return "Boa noite";
    }
}

// 10. Validar senha forte
function validarSenha($senha){

    if(strlen($senha) >= 8){
        return "Senha forte";
    }else{
        return "Senha fraca";
    }
}

?>