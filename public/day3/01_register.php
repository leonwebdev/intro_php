<?php

include './functions.php';

$title = 'Register';

$errors = [];

if('POST' == $_SERVER['REQUEST_METHOD']) {

    if(empty($_POST['first_name'])) {
        $errors['first_name'] = "First Name is required.";
    }

    if(empty($_POST['last_name'])) {
        $errors['last_name'] = 'Last Name is required.';
    }

    if(empty($_POST['email'])) {
        $errors['email'] = 'Email is required.';
    }

    if(empty($_POST['password'])) {
        $errors['password'] = 'Password is required.';
    }

    if(empty($_POST['password_confirm'])) {
        $errors['password_confirm'] = 'Confirm Password is required.';
    }

    // If there are no errors, we can
    // redirect the user to the thank you page
    if(!count($errors)) {
        header('Location: 02_thankyou.php');
        exit();
    }

}


/* Sticky Form Values
----------------------------------------- */

// ternary operator
$first_name = (isset($_POST['first_name'])) ? $_POST['first_name'] : '';
// null coalesce
$last_name = $_POST['last_name'] ?? '';
$email = $_POST['email'] ?? '';

/* 

<?php if(count($errors)) : ?>
    <h2>Please correct these errors:</h2>
    <ul>
        <?php // foreach($errors as $error) : ?>
            <li><?=e($error)?></li>
        <?php // endforeach; ?>
    </ul>
<?php endif; ?>

*/

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

<form action="01_register.php" method="post">

<p><label for="first_name">First Name</label>
<input type="text" name="first_name" value="<?=e($first_name)?>" />
<?=e($errors['first_name'] ?? '')?>
</p>

<p><label for="last_name">Last Name</label>
<input type="text" name="last_name" value="<?=e($last_name)?>" />
<?=e($errors['last_name'] ?? '')?></p>

<p><label for="email">Email</label>
<input type="text" name="email" value="<?=e($email)?>" />
<?=e($errors['email'] ?? '')?></p>

<p><label for="password">Password</label>
<input type="password" name="password" />
<?=e($errors['password'] ?? '')?></p>

<p><label for="password_confirm">Confirm Password</label>
<input type="password" name="password_confirm" />
<?=e($errors['password_confirm'] ?? '')?></p>

<p><button type="submit">Submit</button></p>

</form>

</body>
</html>

<pre>

<?php // print_r($_SERVER); ?>