<?php
$numbers = $_POST["numbers"];
?>

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
<h2>Ваш ответ: <?= $numbers ?></h2>
<h2>
    <?php
    $result = preg_match("/((\bодин\b)$|(\bдва\b)$|(\bтри\b)$|(\bчетыре\b)$|(\bпять\b)$|
(\bшесть\b)$|(\bсемь\b)$|(\bвосемь\b)$|(\bдевять\b)$|(\bноль\b)$)/iu", $numbers);
    if ($result) {
        echo "Спасибо, что прошли проверку";
    } else {
        echo "Попробуйте, ещё раз";
    }
    ?>
</h2>
</body>
</html>
