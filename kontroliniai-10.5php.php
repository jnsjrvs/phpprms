<?php
/**
Sukurti klasę, su savybe sąrašas. Sukurti metodą, kurio pagalba galima būtų įdėti studento egzaminų rezultatus: vardas, fizika, matematika,
programavimas (dšimtbalėje sistemoje). Sukurti metodą, kuris gražina visus egzaminus išlaikiusių studentų sąrašą
(egzaminas yra išlaikytas, jeigu rezultatas yra >= 5. Sukurti metodą,kuris gražina egzaminų laikymo vidurkį. Pademonstruoti veikimą.
 */

class cla  {
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
          $$m=[];
          foreach ($this->sarasas as $std){
              if ($std['fizika']>=5 and $std['matemat']>=5 and $std['program']) $islaik[]= $std['vardas']
              $m[] = $std('vardas');
          }
          return $m;
      }
      function vidurkis() {
           $s = 0;
           foreach($this->sarasas as $std){
               $s += $std['fizika'] + $std['matematika'] + $
           }
      }

};
$o = new cla();
$o->add('Jonas',10, 8, 9);
$o->add('Petras',6,4, 8);
$o->add('Maryte', 5, 9, 7);

/*
    $s=0;
    foreacch($this->sarasas as $a){
        $s+=$a['fizika']+$a['matemat']+$a['proram']
}
*/