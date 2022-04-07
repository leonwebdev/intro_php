<?php

require __DIR__ . '/../../includes/connect.php';
require __DIR__ . '/../../includes/functions.php';

$title = 'First Query';

// SELECT id, first_name, last_name, email FROM employees
$query = "SELECT 
            id, 
            first_name, 
            last_name, 
            email 
            FROM 
            employees";

$stmt = $dbh->query($query);

$results = $stmt->fetchAll();

// 1 - Hard code what you want to see in the
//     output with at least one sample row

// 2 - Place a loop around the sample row, and
//      loop through your results -- this should
//      generate however many rows are in your
//      results... but all hard-coded

//  3 - Modify the sample row to output actual
//      values from the result set


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
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
    </tr>

    <!-- Sample Record --> 
    <?php foreach($results as $row) : ?>
    <tr>
        <td><?=e($row['id'])?></td>
        <td><?=e($row['first_name'])?></td>
        <td><?=e($row['last_name'])?></td>
        <td><?=e($row['email'])?></td>
    </tr>
    <?php endforeach; ?>
    <!-- /Sample Record -->

</table>
    
</body>
</html>