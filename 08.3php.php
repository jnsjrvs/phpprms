<?php
/*
 Sukurti php skripta,kuriame butu aprasyta klase "preke",kuti turi savybes
kodas,pavadinimas,kaina.
Sukurti standartini class__construct metoda,kuriam perdavus tris parametrus
kodas,pavadinimas,kaina padetu i savo savybes.
 */

class prekes {
    public $kodas;
    public $pav;
    public $kaina;
    function __construct($kod, $pav, $kai){
        $this->kodas = $kod;
        $this->pav = $pav;
        $this->kai = $kai;
}
     function getInfo()
     {
         $s = "%s   %s lux kaina %s";
         echo sprintf($s, $this->kodas, $this->pav, $this->kai) . '<br>';
      }
     }

     $o = new prekes('010101','cocacola','1.55');
     $o->getInfo();
     $o = new prekes('020202','fanta', 0.56);
     $o -> getInfo();
