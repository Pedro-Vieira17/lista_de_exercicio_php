<?php

include("ex_15.php");

echo "<h2>Biblioteca de Funções</h2>";

echo "1. IMC: " . number_format(calcularIMC(70,1.75),2) . "<br><br>";

echo "2. Validar E-mail: ";
echo validarEmail("teste@gmail.com") ? "Válido" : "Inválido";
echo "<br><br>";

echo "3. Senha Aleatória: " . gerarSenha(10) . "<br><br>";

echo "4. Quantidade de Vogais: " . contarVogais("Pedro Paulo") . "<br><br>";

echo "5. Texto Invertido: " . inverterTexto("Programação") . "<br><br>";

echo "6. Idade: " . calcularIdade(2008) . " anos<br><br>";

echo "7. Conversão de Moeda: US$ " . number_format(converterMoeda(100,5.50),2) . "<br><br>";

echo "8. Telefone: " . formatarTelefone("47999998888") . "<br><br>";

echo "9. Saudação: " . saudacao() . "<br><br>";

echo "10. Senha: " . validarSenha("Abc12345");

?>