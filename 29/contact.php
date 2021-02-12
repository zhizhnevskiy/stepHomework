<?php
$nameErr = $surnameErr = $emailErr = $phoneErr = $socialErr = "";
$name = $surname = $email = $phone = $social = "";
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
        <b>Name:</b> <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        <b>Surname:</b> <input type="text" name="surname" value="<?php echo $surname; ?>">
        <span class="error">* <?php echo $surnameErr; ?></span>
        <br><br>
        <b>E-mail:</b> <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        <b>Phone:</b> <input type="text" name="phone" value="<?php echo $phone; ?>">
        <span class="error">* <?php echo $phoneErr; ?></span>
        <br><br>
        <b>Social network:</b> <input type="text" name="social" value="<?php echo $social; ?>">
        <span class="error">* <?php echo $socialErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>
    </form>
</div>
</body>

</html>