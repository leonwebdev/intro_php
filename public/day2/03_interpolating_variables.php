<?php

$title = 'My Page';

$users =[];
$users[] = 'Dave';
$users[] = 'Garth';

// scalar variables can be inserted directly into strings
$str1 = "The title of my page is $title";

// complex variables must be enclosed in curly braces
$str2 = "My friend's name is {$users[0]}.";

// alternatively, you can concatenate your strings and variables
$str3 = "My friend's name is " . $users[1];

echo $str1 . '<br />';
echo $str2 . '<br />';
echo $str3 . '<br />';