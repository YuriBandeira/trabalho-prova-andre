<?php
//conectar bd
require('./db.php');

$id= $_GET['id'];

$sql = "SELECT * FROM usuario WHERE id = ?";
$sth = $dbh->prepare($sql);
$sth->execute([ $id ]);
$rows = $sth->fetchAll();

foreach ($rows as $row){
    echo "<br>
    <form method='post' action=update.php?id=" . $row["id"] . ">
    <p>Nome:</p>
    <input type=text name=nome value=".$row['nome'].">
    <p>Data de Nascimento</p>
    <input type=date name='data_nasc' value=".$row['data_nasc'].">
    <p>Salario</p>
    <input type=int name=salario value=".$row['salario'].">
    <input type=submit name=editar>
    </form>";
}
?>