<?php

try {
$cnn = new PDO('mysql:host=8080;dbname=jaustu', 'jaustu', 'IsmokKodint333'); // rysys su db atidaromas/

$rea = $cnn->query( "select aut_gamintojas as g, aut_modelis as m, aut_metai as mm,
aut_kaina as k from aut_ order by aut_kaina");

while ($row = $rea->fetch()) {
    echo $row{'g'}. '', $row{'m'} , '', $row{'mm'} ,'',${'k','<br>';}
}
    };