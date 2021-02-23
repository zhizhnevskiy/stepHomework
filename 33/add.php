<?php
include "replace.php";

$data = json_decode(file_get_contents("data.json"));
$data[] = ["message" => $_POST["message"], "name" => $_POST["name"], "date" => date("d $month Y ($day)")];


if (!matReplace($_POST["message"])) {
    file_put_contents("data.json", json_encode($data));
} else {
    file_put_contents('censorship.txt', ($_POST["message"] . " " . $_POST["name"] . "\n"), FILE_APPEND);
}

header("Location: main.php");