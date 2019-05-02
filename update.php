<?php

require("./db.php");

$id = $_GET['id'];
$nome = $_POST['nome'];
$dataNasc = $_POST['data_nasc'];
$salario = $_POST['salario'];

$sth = $dbh->prepare("UPDATE usuario SET nome = ?, data_nasc = ?, salario = ? WHERE id= ?");
$count = $sth->execute([ $nome, $dataNasc, $salario, $id ]);

echo "<p>$count registro foi editado</p>";

header("Location: ./index.php");