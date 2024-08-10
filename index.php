
<?php

require 'functions.php';

// require 'router.php';

$dns = "mysql:host=localhost;port=3306;dbname=myass;charset=utf8mb4";

$pdo = new PDO($dns, 'root', 'sexy');

$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll();

dd($posts);
