<?php
    $nome = "arthur";

    echo strtolower($nome); // Tudo minuscula
    echo "<br/>";
    echo strtoupper($nome); // Tudo maiscula
    echo "<br/>";
    echo ucfirst($nome); // Primeira letra maiuscula
    echo "<br/>";
    echo strlen($nome); // Tamanho da string
    echo "<br/>";
    echo str_replace("r", "a", $nome); // Troca todos os r por a
    echo "<br/>";
    echo substr($nome, 1, 3); // Pega a letra da posição 1 até a 3(rth)
    echo "<br/>";


?>