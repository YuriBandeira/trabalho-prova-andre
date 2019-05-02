<?php

require("./db.php");

$sth = $dbh->prepare("DELETE FROM usuario WHERE id = ?");

$count = $sth->execute([ $_GET["id"] ]);

echo "<p>$count registro foi excluído</p>";

header("Location: ./index.php");

?>