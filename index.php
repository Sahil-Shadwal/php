
<?php

require 'functions.php';

// require 'router.php';

require 'Database.php';

$config = require 'config.php';

$db = new Database($config['database']);

$id = $_GET['id']; //never inline user data in query string
$query = "select * from posts where id = :id";

$posts = $db->query($query, [':id' => $id])->fetch(); //::scope resolution operator -> it gives us the access to the static and constant that was defined in the class

dd($posts);
