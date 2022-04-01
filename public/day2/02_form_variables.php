<?php

/**
 * Escape function to protect agains XSS attach
 * Cross Site Scripting
 *
 * @param string $str
 * @return $str
 */
function e(string $str):string
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

$title = "Form Variables";

// Takeaway -- All User Data is Tainted
//          -- Assume it is bad and cannot be trusted

// FIEO - Filter Input, Escape Output

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title)?></title>
</head>
<body>

<h1><?php echo htmlentities($title)?></h1>

<form method="post">
    <input name="first_name" type="text" placeholder="Your first name" /><br />
    <input name="last_name" type="text" placeholder="Your last name" /><br />
    <input name="email" type="text" placeholder="Your email address" /><br />
    <input name="job" type="text" placeholder="Your position" /><br />
    <input name="img_src" type="text" placeholder="Profile pic" /><br />
    <button type="submit">Register</button>
</form>

<?php if('POST' == $_SERVER['REQUEST_METHOD']) : ?>

    <p>
        First Name: <?=e($_POST['first_name'])?><br />
        Last Name: <?=e($_POST['last_name'])?><br />
        Email: <?=e($_POST['email'])?><br />
        Job: <?=e($_POST['job'])?>
    </p>

    <p><img src="<?=e($_POST['img_src'])?>" /></p>

<?php endif; ?>


    
</body>
</html>