<?php


$f = fopen('php-file-01.txt', 'r');
 $s = fread($f, filesize('php-file-01.txt'));
 fclose($f);
 $m = explode(',', $s);
 var_dump($m);
