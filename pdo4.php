<?php
require 'db-config.php';

try
{
    $pdo = new PDO($DB_DSN, $DB_USER, $DB_PASS);
    $query = $pdo->query('SELECT * FROM users');

    echo 'Connexion réussi';
}
catch (PDOException $e)
{
    echo 'Erreur SQL : ' .$e->getMessage();
}
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO SQL</title>
</head>
<body>


    
</body>
</html>

