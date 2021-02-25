<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Système d'article</title>
</head>
<body>

<form action="data.php" method="POST">
 Titre:<br/>
 <input type="text" name="titre" required><br/>
 Contenu:<br/>
 <textarea name="contenu" cols="30" rows="10" required></textarea><br/>
 <input type="submit" name="submit" value="Publier">
</form>


<ul>
<?php
    $sql = "SELECT id, titre from article";
    $db = new PDO('mysql:host=localhost;dbname=tutorial', 'root', '');
    $request = $db->query($sql);
    while ($row = $request->fetch()){
        ?>
        <li><?php echo stripslashes($row['titre']) ?></li>
        <?php
    }
    ?>
</ul>
    
</body>
</html>