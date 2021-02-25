<?php

$pdo = new PDO('sqlite:./data.db');

$pdo->setAttribute(
    PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
);

$query = $pdo->query('SELECT * FROM posts');
$posts = $query->fetchAll(PDO::FETCH_OBJ);


?>


<ul>
<?php foreach($posts as $post): ?>
 <li><?= $post->name ?></li>
<?php endforeach ?>
</ul>

