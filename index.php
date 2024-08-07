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
            "Do Android Dream of Electric Sheep",
            "The Langoliers",
            "Hail Mary"
        ]
    ?>

    <ul>
        <!-- <?php foreach ($books as $book) {
            echo "<li>{$book}™</li>";
        } ?> -->

        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>