<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>
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

    // one way
    //    $filterAuthorBy = function ($books, $author)
//     {

//         $filtersBooks = [];

//         foreach ($books as $book) {
//             if ($book['author'] === $author) {
//                 $filtersBooks[] = $book;
//             }
//         }

//         return $filtersBooks;
//     };




//     $filtersBooks = $filterAuthorBy($books, 'Andy Weir');


// two way
    // function filter($items, $fn)
    // {

    //     $filteredItems = [];

    //     foreach ($items as $item) {
    //         if ($fn($item)) {
    //             $filteredItems[] = $item;
    //         }
    //     }

    //     return $filteredItems;
    // }




    // $filtersBooks = filter($books, function($book){ 
    //     return $book['releaseYear'] < 2000;

    // });

       $filtersBooks = array_filter($books, function($book){ 
         return $book['author'] === 'Andy Weir';

       });
    ?>

    <ul>
        <?php foreach ($filtersBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) By (<?= $book['author'] ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>