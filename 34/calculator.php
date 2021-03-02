<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Сalculator</title>
</head>

<body>
<br><br>
<h2>Калькулятор</h2>
<div class="container">
    <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm">

            <form action="?" method="POST">
                <br><br>
                <span><b>Выберите первое число:</b></span>
                <select name="q1" class="form-select" aria-label="Default select example">
                    <option value="" selected></option>
                    <option value=0>0</option>
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                    <option value=5>5</option>
                    <option value=6>6</option>
                    <option value=7>7</option>
                    <option value=8>8</option>
                    <option value=9>9</option>
                    <option value=10>10</option>
                </select>
                <br><br>
                <span><b>Выберите оператор:</b></span>
                <select name="q3" class="form-select" aria-label="Default select example">
                    <option value="" selected></option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <br><br>
                <span><b>Выберите второе число:</b></span>
                <select name="q2" class="form-select" aria-label="Default select example">
                    <option value="" selected></option>
                    <option value=0>0</option>
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                    <option value=5>5</option>
                    <option value=6>6</option>
                    <option value=7>7</option>
                    <option value=8>8</option>
                    <option value=9>9</option>
                    <option value=10>10</option>
                </select>
                <br><br>
                <input type="submit" value="выполнить" class="btn btn-primary">
                <br><br>
            </form>

        </div>
        <div class="col-sm"></div>
    </div>
</div>
<h5>
<?php

$answer1 = $_POST["q1"];
$answer2 = $_POST["q2"];
$answer3 = $_POST["q3"];

echo "Ваш результат = ";

if ($answer1 == "" || $answer2 == "") {
    echo '"необходимо ввести все данные."';
}

switch ($answer3) {
    case '+':
        echo $answer1 + $answer2;
        break;
    case '-':
        echo $answer1 - $answer2;
        break;
    case '*':
        echo $answer1 * $answer2;
        break;
    case '/':
        echo $answer1 / $answer2;
        break;
}
?>
</h5>
</body>

</html>