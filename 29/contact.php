<?php
/** @var string $name
 * @var string $nameErr
 * @var string $surname
 * @var string $surnameErr
 * @var string $email
 * @var string $emailErr
 * @var string $phone
 * @var string $phoneErr
 * @var string $social
 * @var string $socialErr
 */
require_once "config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact information</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="box">
    <h2>Contact information</h2>
    <form method="POST" action="?">
        <b>Name:</b> <input type="text" name="name" value="<?= $name ?>">
        <span class="error">* <?= $nameErr ?></span>
        <br><br>
        <b>Surname:</b> <input type="text" name="surname" value="<?= $surname ?>">
        <span class="error">* <?= $surnameErr ?></span>
        <br><br>
        <b>E-mail:</b> <input type="text" name="email" value="<?= $email ?>">
        <span class="error">* <?= $emailErr ?></span>
        <br><br>
        <b>Phone:</b> <input type="text" name="phone" value="<?= $phone ?>">
        <span class="error">* <?= $phoneErr ?></span>
        <br><br>
        <b>Social network:</b> <input type="text" name="social" value="<?= $social ?>">
        <span class="error">* <?= $socialErr ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>
    </form>
</div>
</body>

</html>