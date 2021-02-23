<?php

function matReplace($mat)
{
    return preg_match("/.*дурак.*/iu", $mat);
}

$monthsList = [
    "1" => "Января",
    "2" => "Февраля",
    "3" => "Марта",
    "4" => "Апреля",
    "5" => "Майя",
    "6" => "Июня",
    "7" => "Июля",
    "8" => "Августа",
    "9" => "Сентября",
    "10" => "Октября",
    "11" => "Ноября",
    "12" => "Декабря"
];
$month = $monthsList[date("n")];

$dayList = [
    "Monday" => "Понедельник",
    "Tuesday" => "Вторник",
    "Wednesday" => "Среда",
    "Thursday" => "Четверг",
    "Friday" => "Пятница",
    "Saturday" => "Суббота",
    "Sunday" => "Воскресенье"
];
$day = $dayList[date("l")];

