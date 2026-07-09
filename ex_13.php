<?php

function criptografarMensagem($texto){

 $resultado = "";

    foreach(str_split($texto) as $letra){

        if($letra >= "a" && $letra <= "z"){
            $codigo = ord($letra) + 3;

            if($codigo > ord("z")){
                $codigo -= 26;
            }

            $resultado .= chr($codigo);
        }else{
            $resultado .= $letra;
        }
    }

    return $resultado;
}


function descriptografarMensagem($texto){

 $resultado = "";

    foreach(str_split($texto) as $letra){

        if($letra >= "a" && $letra <= "z"){
            $codigo = ord($letra) - 3;

            if($codigo < ord("a")){
                $codigo += 26;
            }

            $resultado .= chr($codigo);
        }else{
            $resultado .= $letra;
        }
    }

    return $resultado;

}

$mensagem = "ola mundo";

$criptografada = criptografarMensagem($mensagem);
$descriptografada = descriptografarMensagem($criptografada);

echo "Mensagem original: " . $mensagem . "<br>";
echo "Criptografada: " . $criptografada . "<br>";
echo "Descriptografada: " . $descriptografada;




?>