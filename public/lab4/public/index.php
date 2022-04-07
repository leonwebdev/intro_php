<?php

require __DIR__ . '/../includes/connect.php';
require __DIR__ . '/../includes/functions.php';

$title = 'Books';

$query = "SELECT 
            book.id as book_id,
            book.in_print,
            book.title,
            author.name as author,
            genre.name as genre,
            format.name as format,
            publisher.name as publisher,
            book.price
            FROM 
            book
            INNER JOIN author ON book.author_id = author.id
            INNER JOIN genre ON book.genre_id = genre.id
            INNER JOIN format ON book.format_id = format.id
            INNER JOIN publisher ON book.publisher_id = publisher.id
            ";

$stmt = $dbh->query($query);

$results = $stmt->fetchAll();

// echo '<pre>';
// print_r($results);
// echo '</pre>';
// die;

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

<table>
    <tr>
    <?php foreach($results[0] as $key => $value) : ?>
        <?php if($key!='book_id' && $key!='in_print') :?>
            <th><?=e(ucwords($key))?></th>
        <?php endif; ?>
    <?php endforeach; ?>
    </tr>

    
    <?php foreach($results as $row) : ?>
    <tr>
        <?php foreach($row as $key => $value) : ?>
            <?php if($row['in_print']==1 && $key!='book_id' && $key!='in_print') :?>
                <?php if($key=='title'): ?>
                        <td><a href="show.php?book_id=<?=e($row['book_id'])?>"><?=e($value)?></a></td>
                    <?php else: ?>
                        <td><?=e($value)?></td>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </tr>
    <?php endforeach; ?>
    

</table>
    
</body>
</html>