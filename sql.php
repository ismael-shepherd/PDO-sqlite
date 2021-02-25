<?php

require 'db-config.php';

$dsn = "$DB_DSN";

$pdo = new PDO($dsn, $DB_USER, $DB_PASS);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$stmt = $pdo->query('SELECT * FROM users');

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo 'Votre mail : ' . $row['email'] . '<br>';
    echo 'Votre pseudo : ' . $row['username'] . '<br>';
}
?>

<ul>
 <li>Nom : </li>
 <li>Email :</li>
</ul>