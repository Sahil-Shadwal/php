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
            'releaseYear' => 2021,
            'purchaseUrl' => 'https://shadwal.site'
           ],
           [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 1968,
            'purchaseUrl' => 'https://shadwal.site'
           ],
           [
            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseUrl' => 'https://shadwal.site'
           ],
        ];
        // $filterByAuthor = function ($books, $author) {

        function filter($items, $fn) {
            $filteredItems = [];

            foreach ($items as $item) {
                if($fn($item)) {
                    $filteredItems[] = $item;
                }
            }
            return $filteredItems;
        }
        $filteredBooks = filter($books,function($book) {
            return $book['releaseYear'] < 2000;
        });
    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
                <li>
                    <a href="<?= $book['purchaseUrl']; ?>">
                        <?= $book['name']; ?> (<?= $book['releaseYear']?>)
                    </a> 
                </li>
            
        <?php endforeach; ?>
    </ul>

    <!-- <p>
        <?= filterByAuthor($books); ?>

    </p> -->

   
    
</body>
</html>