<?php
$dir = array_diff(scandir("files\\"), ["..", "."]);
sort($dir);
foreach ($dir as $value) {
    if (preg_match("/^.*\.(txt)$/iu", $value))
    {
        echo "<img src='img/txt.png'> ";
        echo "<a href='files\\$value'>$value</a><br>";
    }
    elseif (preg_match("/^.*\.(docx)$/iu", $value))
    {
        echo "<img src='img/docx.png'> ";
        echo "<a href='files\\$value'>$value</a><br>";
    }
    elseif (preg_match("/^.*\.(xlsx)$/iu", $value))
    {
        echo "<img src='img/xlsx.jpeg'> ";
        echo "<a href='files\\$value'>$value</a><br>";
    }
    elseif (preg_match("/^.*\.(pdf)$/iu", $value))
    {
        echo "<img src='img/pdf.png'> ";
        echo "<a href='files\\$value'>$value</a><br>";
    }
}