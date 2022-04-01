<?php

// Variable names
// Must begin $ sign
// Second character, must be a letter, or an underscore
// Third and additional characters can be letter, underscore or number

// Legal
// $title
// $_title
// $title_1
//$_1_title

// Illegal names
// title  -- missing $
// $1title -- second character is not letter or underscore
// $my-title -- uses a character that is not letter, number, or underscore

$title = "First PHP";

$user = array(
    'First Name' => 'Steve',
    'Last Name' => 'George',
    'Email Address' => 'edu@pagerange.com',
    'Job' => 'Instructor'
);

$user = [
    'First Name' => 'Steve',
    'Last Name' => 'George',
    'Email Address' => 'edu@pagerange.com',
    'Job' => 'Instructor'
];

$para = "The title of this page is: $title.";
$para2 = 'The title of this page is: $title.';

$src = 'nasa.jpg';
$src2= 'nasa2.png';

// output usiing
// echo
// print
// printf

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        img {
            max-width: 400px;
            height: auto;
        }
    </style>
</head>
<body>

<!-- PHP Short Echo, alternate syntax -->
<h1><?=$title?></h1>

<!-- The above is exactly equivalent to the following -->
<h1><?php echo $title; ?></h1>

<p>
    First Name: <?php echo $user['First Name'] ?><br />
    Last Name: <?php echo $user['Last Name'] ?><br />
    Email Address: <?php echo $user['Email Address'] ?><br />
    Job: <?php echo $user['Job'] ?><br />
</p>

<p><?php echo $para ?></p>

<p><?=$para2?></p>

<p><img alt="<?=$title?>" src="<?=$src2?>" />

    
</body>
</html>