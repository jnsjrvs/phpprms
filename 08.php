<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “universitetas”,
kuri turi savybes - pavadinimas, miestas, studentų skaičius.
Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris pavadinimas -
pavadinimas, miestas, studentų skaičius - perduotus parametrus padėtų į savo savybes.
 */


class Universitetas {
     public $pavadinimas;
     public $miestas;
     public $studskaics;
     function __construct($p, $m, $ss){
             $this->pavadinimas = $p;
         $this->miestas = $m;
         $this->studskaics = $ss;
     }
 }

 $s = new Universitetas('KTU', 'Kaunas', 11111);

 var_dump($s);
