
<?php

require 'functions.php';

// require 'router.php';

require 'Database.php';

$db = new Database();

$posts = $db->query('Select * from posts')->fetchAll(); //::scope resolution operator -> it gives us the access to the static and constant that was defined in the class

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
