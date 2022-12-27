<!DOCTYPE html>
<html lang="en">

<head>
    <title>Demo</title>
</head>

<body>

    <?php
    $books = [
        'Do Android Dream of Electric Sheep',
        'The Langoliers',
        'Hail Mary'
    ]
    ?>
    <h1>Recommend Books</h1>
    <ul>
        <?php foreach ($books as $book) : ?>
             <li><?= $book ?></li>
        <?php endforeach ?>
    </ul>
</body>

</html>