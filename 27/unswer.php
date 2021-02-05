<?php
$unswer = $_POST["name"];

$result = preg_replace("/дурак/iu", "ай-яй-яй", $unswer);

// Вариант №1
$hello = preg_split("/ |,|!|\?|\./", $unswer);
$count = 0;
foreach ($hello as $value) {
    if ($value == "привет" || $value == "Привет" || $value == "ПРИВЕТ") {
        $count += 1;
    }
}

// Вариант №2
$helloMatch = (preg_match_all("/привет/iu", $unswer));

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
<h2>Ваш запрос:</h2>
<?php
echo "<h4>" . $result . "</h4>";
?>
<h2>Количество слов "привет" в запросе:</h2>
<?php
// Вариант №1
// echo "<h4>" . $count . " раз(а)</h4>";

// Вариант №2
echo "<h4>" . $helloMatch . " раз(а)</h4>";
?>
</body>

</html>