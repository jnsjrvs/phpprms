<?php
/*
Panaudodami prieš tai sukurtą klasę universitetas, sukurkite klases standartinis ir technologinis,
 kurios paveldi universitetas klasę. Universitetas klasę papildykite metodu “info”,
kuris išvestų suformatuotą eilutę “Pavadinimas, miestas (studentų skaičius)”.
Technologinis klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “Pavadinimas,
miestas (studentų skaičius) - technologinis”. technologinis - tiesiog paprastas žodis.
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
    function info(){
                 $s = "%s %s (%s)";
         echo sprintf($s, $this->pavadinimas, $this->miestas, $this->studskaics);
     }
 }
 $s = new Universitetas('KTU', 'Kaunas', 11111);
 $s->info();
 echo '<br>';

class Technologinis extends Universitetas {}

 $s = new Technologinis('VTU', 'Vilnius', 12222);
 $s->info();
 echo '<br>';

 class Humanitarinis extends Universitetas {
     function info(){
                $s = "%s %s  (9999)";
         echo sprintf($s, $this->pavadinimas, $this->miestas);
     }
 }

 $s = new Humanitarinis('SiauliuUniversitetas', 'Siauliai', 9999);
 $s->info();


