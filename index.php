
<?php

require 'functions.php';

// require 'router.php';

$dns = "mysql:host=localhost;port=3306;user=root;password=sexy;dbname=myass;charset=utf8mb4";

$pdo = new PDO($dns);

$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
