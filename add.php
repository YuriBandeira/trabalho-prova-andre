<?php
require("./db.php");

$nome= $_POST['nome'];
$dataNasc= $_POST['data_nasc'];
$salario= $_POST['salario'];

$sth = $dbh->prepare("INSERT into usuario (nome, data_nasc, salario) values(?, ?, ?) ");
$count = $sth->execute([ $nome, $dataNasc, $salario ]);

if ($count) {
    echo "<p>$count registro adicionado</p>";
    header("Location: ./index.php");
}