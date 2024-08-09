<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 50vh;
            margin: 0;
            font-size: 2rem;
            margin-top: 1rem;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>
</head>
<body>
    <h1>Recommended Books</h1>

    <?php
        $books = [
           [
            'name' => 'Do Androids Dream of Electric Sheep?',
            'author' => 'Philip K. Dick',
            'purchaseUrl '=> 'https://shadwal.site'
           ],
           [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'https://shadwal.site'
           ]
        ]
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <?= $book['name']; ?> 
            </li>
        <?php endforeach; ?>
    </ul>

   
    
</body>
</html>