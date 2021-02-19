<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
        div{
            margin-left: calc(50% - 100px);
            width: 200px;
            text-align: left;
            line-height: 1.5;
        }
    </style>
</head>
<body>
<h2>Файлы для скачивания:</h2>
<div>
    <?php
    include "showDir.php";
    ?>
</div>
<h2>Загрузка файлов:</h2>
<form enctype="multipart/form-data" action="uploader.php" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000000"/>
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    <input name="userfile" type="file"/>
    <input type="submit" value="Отправить файл"/>
</form>
</body>
</html>