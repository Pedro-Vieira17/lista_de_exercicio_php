<?php

function analisarProdutos($produtos, $pesquisa){

    $caro = $produtos[0];
    $barato = $produtos[0];
    $soma = 0;
    $encontrado = "Produto não encontrado";

    foreach($produtos as $produto){

        if($produto["preco"] > $caro["preco"]){
            $caro = $produto;
        }

        if($produto["preco"] < $barato["preco"]){
            $barato = $produto;
        }


         $soma += $produto["preco"];

          if($produto["nome"] == $pesquisa){
            $encontrado = "Produto encontrado: " . $produto["nome"] .
                          " - R$ " . number_format($produto["preco"], 2, ",", ".");
        }

    }

    $media = $soma / count($produtos);



    return [
        "Mais caro" => $caro,
        "Mais barato" => $barato,
        "Média" => $media,
       "Pesquisa" => $encontrado
    ];
}

   $produtos = [
    ["nome" => "Arroz", "preco" => 25],
    ["nome" => "Feijão", "preco" => 10],
    ["nome" => "Macarrão", "preco" => 8],
    ["nome" => "Carne", "preco" => 45]
];

    $resultado = analisarProdutos($produtos, "Carne");

   echo "Produto mais caro: " . $resultado["Mais caro"]["nome"] . " - R$ " . $resultado["Mais caro"]["preco"] . "<br>";
echo "Produto mais barato: " . $resultado["Mais barato"]["nome"] . " - R$ " . $resultado["Mais barato"]["preco"] . "<br>";
echo "Média dos preços: R$ " . number_format($resultado["Média"], 2, ",", ".") . "<br>";
echo $resultado["Pesquisa"];
   




?>