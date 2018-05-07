<?php


Tekstinio redaktoriaus pagalba sukurti failą su teleloto skaičiais (5 x 5). Parašyto PHP skriptą, kuris nuskaito failą ir išveda ekrane teleloto lentelę (5 x 5).
 */
5
6 $f = fopen('php-file-02.txt', 'r');
7 $s = fread($f, filesize('php-file-02.txt'));
8 fclose($f);
9 $m = json_decode($s);
10 echo '<table>';
11 foreach($m as $row){
    12     echo '<tr>';
13     foreach($row as $cell){
        14         echo '<td>' . $cell . '</td>';
15     }
16     echo '</tr>';
17 }
18 echo '</table>';
