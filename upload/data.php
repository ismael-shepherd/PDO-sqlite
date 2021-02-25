<?php

if (isset($_POST['titre'], $_POST['contenu']) && !empty($_POST['titre'] && !empty($_POST['contenu']))){
    $titre = htmlspecialchars(addslashes($_POST['titre']));
    $contenu = htmlspecialchars(addslashes($_POST['contenu']));
    $NOW = date("Y-m-d H:i:s");

    $db = new PDO('mysql:host=localhost;dbname=tutorial', 'root', '');
    $sql = "INSERT INTO article (titre, contenu, date_publication) VALUES (:titre, :contenu, :date_publication)";
    $request = $db->prepare($sql);
    $request->bindParam(':titre', $titre);
    $request->bindParam(':contenu', $contenu);
    $request->bindParam(':date_publication', $NOW);
    $request->execute();

    header("Location:index.php");
}