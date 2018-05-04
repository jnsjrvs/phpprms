<?php

$ff =  "tekstai/tekstas.txt ,mode:'w");
$s = 'stai ir as';
fwrite($ff, $s);
fclose($ff);
echo 'ok';