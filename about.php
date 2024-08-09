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

$filteredBooks = array_filter($books,function($book) {
    return $book['author'] === 'Andy Weir';
});

require 'views/about.view.php';