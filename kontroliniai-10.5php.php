<?php
/**
Sukurti klasę, su savybe sąrašas. Sukurti metodą, kurio pagalba galima būtų įdėti studento egzaminų rezultatus: vardas, fizika, matematika,
programavimas (dšimtbalėje sistemoje). Sukurti metodą, kuris gražina visus egzaminus išlaikiusių studentų sąrašą
(egzaminas yra išlaikytas, jeigu rezultatas yra >= 5. Sukurti metodą,kuris gražina egzaminų laikymo vidurkį. Pademonstruoti veikimą.
 */

class sarasas  {
    public $sarasas = [];
    function add($v, $f, $m, $p){
        $this->sarasas[] = [
            'vardas' => $v,
            'fizika' => $f,
            'matemat' => $m,
            'program' => $p
        ];
    }
      function islaike(){
          $islaik=[];
          foreach ($this->sarasas as $std){
              if ($std['fizika']>=5 and $std['matemat']>=5 and $std['program']) $islaik[]= $std['vardas'];
          }
          return $islaik;
      }

};

/*
    $s=0;
    foreacch($this->sarasas as $a){
        $s+=$a['fizika']+$a['matemat']+$a['proram']
}
*/