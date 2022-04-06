<?php

require __DIR__ . '/../../includes/connect.php';
require __DIR__ . '/../../includes/functions.php';

$title = 'Second Query';

$query = "SELECT
            *
            FROM
            employees
            WHERE
            id=1";

$stmt = $dbh->query($query);

// fetch() returns a single result
$result = $stmt->fetch();


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=e($title)?></title>
</head>
<body>

    <h1><?=e($title)?></h1>

    <ul>
        <li><strong>ID</strong>: <?=e($result['id'])?></li>
        <li><strong>First Name</strong>: <?=e($result['first_name'])?></li>
        <li><strong>Last Name</strong>: <?=e($result['last_name'])?></li>
        <li><strong>Email</strong>: <?=e($result['email'])?></li>
        <li><strong>Department</strong>: <?=e($result['department'])?></li>
        <li><strong>Phone</strong>: <?=e($result['phone'])?></li>
        <li><strong>Created At</strong>: <?=e($result['created_at'])?></li>
    </ul>
    
</body>
</html>