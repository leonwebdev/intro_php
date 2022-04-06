<?php

require __DIR__ . '/../includes/connect.php';
require __DIR__ . '/../includes/functions.php';

$title = 'Books';

$query = "SELECT 
            book.title,
            book.price,
            author.name as author,
            genre.name as genre,
            format.name as format,
            publisher.name as publisher
            FROM 
            book
            INNER JOIN author ON book.author_id = author.id
            INNER JOIN genre ON book.genre_id = genre.id
            INNER JOIN format ON book.format_id = format.id
            INNER JOIN publisher ON book.publisher_id = publisher.id ";

$stmt = $dbh->query($query);

$results = $stmt->fetchAll();

echo '<pre>';
print_r($results);
die;

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
            padding: 6px;
        }
    </style>
</head>
<body>

<h1><?=e($title)?></h1>

<table>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Format</th>
        <th>Publisher</th>
        <th>Price</th>
    </tr>

    
    <?php foreach($results as $row) : ?>
    <tr>
        <td><?=e($row['title'])?></td>
        <td><?=e($row['first_name'])?></td>
        <td><?=e($row['last_name'])?></td>
        <td><?=e($row['email'])?></td>
        <td><a href="01_dynamic_query.php?id=<?=e($row['id'])?>">view</a></td>
    </tr>
    <?php endforeach; ?>
    

</table>
    
</body>
</html>