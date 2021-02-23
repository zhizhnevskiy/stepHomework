<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
<h2>Оставьте своё сообщение:</h2>
<form action="add.php" method="POST">
    <textarea name="message" cols="30" rows="10"></textarea>
    <h2>Ваше имя:</h2>
    <input type="text" name="name">
    <input type="submit" value="ok">
</form>
<h2>Оставленные сообщения пользователей:</h2>
<?php
include "replace.php";
$data = json_decode(file_get_contents("data.json"), true);
$i = 1;
foreach ($data as $row) {
    echo "<b>" . $i++ . "</b>. Сообщение: " . $row["message"] . "<br>\n" .
        "От пользователя: " . $row["name"] . "<br>\n" .
        "Получено: " . $row["date"] . "<br><br>\n";
}
?>
</body>
</html>