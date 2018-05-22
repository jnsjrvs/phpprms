<?php
/*
 Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis masyvas iš 5 elementų - teksto eilučių.
Panaudodami foreach ciklą - pakeiskite visus masyvo elementus - paversdami tekstą dižiosiomis raidėmis.

 */

$m = ['Jonaitis', 'Petraitis', 'Antanaitis', 'Kaziokaitis', 'Mindaugaitis'];

 $i = 0;
 foreach($m as $x){
     $m[$i++] = strtoupper($x);
 }

 var_dump($m);
