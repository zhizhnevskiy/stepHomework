<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>captcha</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
<h2>Напишите прописью название всех показываемых цифр</h2>
<h2><?= rand(100, 999) ?></h2>
<br>
<form action="captcha2.php" method="post">
    <input type="text" name="numbers">
    <input type="submit" value="ок">
</form>
</body>
</html>