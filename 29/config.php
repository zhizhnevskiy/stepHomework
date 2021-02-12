<?php
$ok = true;

if (empty($_POST["name"])) {
    $nameErr = "Name is required";
} else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zа-я-' ]*$/iu", $name)) {
        $nameErr = "Only letters and white space allowed";
        $ok = false;
    }
}

if (empty($_POST["surname"])) {
    $surnameErr = "Surname is required";
} else {
    $surname = test_input($_POST["surname"]);
    if (!preg_match("/^[a-zа-я-' ]*$/iu", $surname)) {
        $surnameErr = "Only letters and white space allowed";
        $ok = false;
    }
}

if (empty($_POST["email"])) {
    $emailErr = "Email is required";
} else {
    $email = test_input($_POST["email"]);
    if (!preg_match("/^[0-9A-Z_]{5,}@[0-9A-Z]{2,}\.[A-Z]{2,6}$/iu", $email)) {
        $emailErr = "Invalid email format";
        $ok = false;
    }
}

if (empty($_POST["phone"])) {
    $phoneErr = "Phone is required";
} else {
    $phone = test_input($_POST["phone"]);
    $phone = preg_replace("/[^0-9\+]/", "", $phone);
    if (!preg_match("/^(80|\+375)(29|33|44|212)\d{6,7}$/iu", $phone)) {
        $phoneErr = "Invalid phone format";
        $ok = false;
    }
}

if (empty($_POST["social"])) {
    $socialErr = "Social network is required";
} else {
    $social = test_input($_POST["social"]);
    if (!preg_match("/((?:https?|ftp):\/\/|www)\.[-a-z0-9+&@#\/%?=~_|!:,.;]*/iu", $social)) {
        $socialErr = "Invalid social network link";
        $ok = false;
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($ok) {
    $row = "\n<----->\n" . $name . "\n" . $surname . "\n" . $email .
        "\n" . $phone . "\n" . $social .
        "\n" . date("d.m.Y") . "\n" . date("H:i");
    file_put_contents("contact.txt", $row, FILE_APPEND);
}
