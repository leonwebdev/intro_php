<?php

require __DIR__ . '/../includes/connect.php';
require __DIR__ . '/../includes/functions.php';

$title = 'Detail';

if(empty($_GET['book_id'])) {

    echo "<h1>No item found</h1>";
    die;

} else {

    $query ="SELECT
            book.image,
            book.id as book_id,
            book.title,
            book.year_published,
            book.num_pages,
            book.in_print,
            book.price,
            book.description,
            author.name as author,
            author.country as author_country,
            genre.name as genre,
            format.name as format,
            publisher.name as publisher,
            publisher.city as publisher_city,
            publisher.phone as publisher_phone
            
            FROM 
            book
            INNER JOIN author ON book.author_id = author.id
            INNER JOIN genre ON book.genre_id = genre.id
            INNER JOIN format ON book.format_id = format.id
            INNER JOIN publisher ON book.publisher_id = publisher.id

            WHERE 
            book.id = :book_placeholder
            ";

    $stmt = $dbh->prepare($query);

    $stmt->bindValue(':book_placeholder', $_GET['book_id'], PDO::PARAM_STR);

    $stmt->execute();

    $results = $stmt->fetchAll();

    // echo '<pre>';
    // print_r($results);
    // echo '</pre>';
    // die;
    $title .= ": {$results[0]['title']}";
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=e($title)?></title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #cfcfcf;
            padding: 1em;
        }
        th{
            background: #333;
            color: #fff;
            font-size: 1.5em;
        }
    </style>
</head>
<body>

<h1><?=e($title)?></h1>
<img src="images/covers/<?=e($results[0]['image'])?>" alt="img">

<ul>
    <?php foreach ($results[0] as $key => $value) :?>
        <?php if($key != 'book_id' && $key != 'image') :?>
            <?php if($key == 'description') :?>
                    <li><strong><?=e(ucwords( str_replace('_', ' ', $key) ))?></strong>: <p><?=e(strip_tags($value))?></p></li>
                <?php else :?>
                    <li><strong><?=e(ucwords( str_replace('_', ' ', $key) ))?></strong>: <?=e(strip_tags($value))?></li>
            <?php endif; ?>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>
    
</body>
</html>