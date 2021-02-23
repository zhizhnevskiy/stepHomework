<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>

    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm">

            <form action="add.php" method="POST">
                <label for="exampleFormControlTextarea1" class="form-label">Оставьте своё сообщение:</label>
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>

                <label for="exampleFormControlTextarea1" class="form-label">Ваше имя:</label>
                <input class="form-control" name="name" type="text" placeholder="ваше имя"
                       aria-label="default input example">
                <input type="submit" value="ok">
            </form>

        </div>
        <div class="col-sm"></div>
    </div>
</div>

<label for="exampleFormControlTextarea1" class="form-label">Оставленные сообщения пользователей:</label>
<br>
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