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


    echo '<pre>';
    print_r($results);
    echo '</pre>';
    die;

}