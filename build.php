<?php

$html = file_get_contents('http://localhost/GitHubVC/valuecom.gr/src/index.php');
file_put_contents('./public/index.html', $html);

$html = file_get_contents('http://localhost/GitHubVC/valuecom.gr/src/we-believe.php');
file_put_contents('./public/we-believe.html', $html);