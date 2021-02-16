<?php

//$header = get_headers($_POST["URL"], 1);
//header('Content-Type: ' . $header['Content-Type']);

$site = file_get_contents($_POST["URL"]);

preg_match('/<div class="news-entry">(.*?)<\/div>/isu', $site, $matches);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>onliner</title>
    <style>
        div {
            position: absolute;
            margin-left: calc(50% - 300px);
            width: 600px;
            text-align: left;
            line-height: 1.5;
        }
    </style>

</head>
<body>
<div>
    <h2>Краткое описание Вашей статьи на
        <a href="https://www.onliner.by/">Onliner.by</a>:</h2>
    <h3>
        <?php
        print_r($matches[0]);
        ?>
    </h3>
</div>
</body>
</html>