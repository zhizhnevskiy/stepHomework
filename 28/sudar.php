<?php
$site = file_get_contents("https://librebook.me/voina_i_mir/vol11/1");
$result = preg_match_all("/сударь(.*?)\b/iu", $site, $match);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
<h2>Слово "сударь" встречается <?php print_r($result); ?> раз(а) на сайте:<br>
    <a href="https://librebook.me/voina_i_mir/vol11/1">librebook.me</a></h2>
</h2>
<pre>
<?php print_r($match); ?>
</pre>
</body>
</html>