<?php
$cadastro = array(
    array("Anselmo", "Renata", "Lucas"),
    array("Ana", "Ticlane", "Roberta"),
    array("Daniela", "Adriana", "Maria")
);

// Exibir Roberta (linha 1, coluna 2)
echo $cadastro[1][2];

echo "<br>";

// Exibir Daniela (linha 2, coluna 0)
echo $cadastro[2][0];
?>