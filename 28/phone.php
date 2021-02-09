<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>
<h2>Please, enter your phone number<br>
    and we will call you back if you are from Vitebsk</h2>
<form action="?" method="post">
    Phone: <input type="text" name="phone">
    <input type="submit" value="ok">
</form>
<br>
<?php
$phone = $_POST["phone"];
$phone = preg_replace("/[^0-9\+]/","", $phone);
echo $phone;
//if (preg_match("/^((80|\+375(\-)?(\()?212(\))?)?[0-9,\-]{6,9})/iu", $phone)) {
if (preg_match("/^(80|\+375)212[2369]\d{5}$/iu", $phone)) {
    echo "Thanks, we will call you back to " . $phone;
} else {
    echo "Sorry, you are not from Vitebsk";
}
?>
</body>

</html>