<?php

$m = [1, 4, 7, 11, 23, 55];
 $s = implode(',', $m);
 $f = fopen('php-file-01.txt', 'w');
 fwrite($f, $s);
 fclose($f);
 echo 'ok';
