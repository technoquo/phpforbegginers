<?php
$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'Project Hail Mary 2 part',
        'author' => 'Andy Weir',
        'releaseYear' => 2022,
        'purchaseUrl' => 'http://example.com'
    ]
];

$filtersBooks = array_filter($books, function ($book) {
    return $book['author'] === 'Andy Weir';
});

require 'index.view.php';