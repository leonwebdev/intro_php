<?php

$description = 'is a person whose age is ';

$result = strlen($description);
echo "<p>The length is $result</p>";
echo '<p>strlen() returns the length of the string.</p>';
echo '<p>------------------------------------------------------------</p>';

$result = ucfirst($description);
echo "<p>The result is : $result</p>";
echo '<p>ucfirst() returns a string whose first letter is modified into upper case.</p>';
echo '<p>------------------------------------------------------------</p>';

$result = strrev($description);
echo "<p>The result is : $result</p>";
echo '<p>strrev() returns a string in the reverse order from the original one.</p>';
echo '<p>------------------------------------------------------------</p>';

$result = explode(' ',$description);
echo "<p>The result is : </p>";
foreach ($result as $key => $value) {
    echo "<p>[$key] : $value</p>";
}
// print_r($result);
echo '<p>explode() returns an array that split the original string by delimitor.</p>';
echo '<p>------------------------------------------------------------</p>';

$result = md5($description);
echo "<p>The result is : $result</p>";
echo '<p>md5() returns the hash of the string.</p>';
echo '<p>------------------------------------------------------------</p>';

$result = rtrim($description);
echo "<p>The result is : $result</p>";
echo '<p>rtrim() returns a string with whitespace (or other characters) stripped from the end of string.</p>';
echo '<p>------------------------------------------------------------</p>';

$result = str_repeat($description,2);
echo "<p>The result is : $result</p>";
echo '<p>str_repeat() returns a string repeated by times of the input number.</p>';
echo '<p>------------------------------------------------------------</p>';
