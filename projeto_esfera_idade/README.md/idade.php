<?php
$anoAtual = date("Y");

if (isset($_GET["nascimento"])) {
    $nascimento = $_GET["nascimento"];
    $idade = $anoAtual - $nascimento;

    $diasVividos = $idade * 365;
    $idadeEm2050 = 2050 - $nascimento;

    echo "Ano de nascimento: $nascimento<br>";
    echo "Idade atual: $idade anos<br>";
    echo "Dias vividos (aproximadamente): $diasVividos dias<br>";
    echo "Idade em 2050: $idadeEm2050 anos<br>";
}
?>

<form method="get">
    Ano de nascimento: <input type="number" name="nascimento" required>
    <input type="submit" value="Calcular">
</form>
