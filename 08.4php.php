<?php
/**
 Sukurkite PHP skripta,kuriame bnutu aprasyta klase miestas,kuri turi savybes
  pavadinimas,gyventoju skaicius,regionas
  sukurti standartini klases_construct metoda,kuriam perdavus tris parametrus-
  pavadinimas,gyvent.skaicius,regionas.
   perduotus parametrus padetu i savo savybes
 */

class miestas {
      $pav;
      $gyvskc;
      $reg;
    function __construct ($pav, $gyvskc, $reg);
        $this->pav = $pav;
        $this->gyvskc = $gyvskc;
        $this->reg = $reg;
}

    function getInfo(){
    $s = "%s %s yra %s";
    echo sprintf($s)
    }