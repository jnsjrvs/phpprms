<?php
/*
 Panaudodami pries tai sukurta klase "preke", sukurkite klases "vaikams" ir "studentams" ,kurios paveldi "preke" klase
"Preke" klase papildykite metodu info,kuris išvestų suformatuotą eilutę “kodas, pavadinimas kaina”.
"vaikams" klasėje perrašykite metodą "info", pakeisdami išvedamą eilutę į “kodas, pavadinimas, kaina (vaikams)”.

 */

class preke {
     public $kodas, $pavadinimas, $kaina;
     function __construct($ko, $pa, $ka){
            $this->kodas = $ko;
         $this->pavadinimas = $pa;
        $this->kaina = $ka;
     }
     function info($nuolaida = 0){
            $s = "%s, %s, %s";
         echo sprintf($s, $this->kodas, $this->pavadinimas,$this->kaina);
     }
 }
 class vaikams extends preke{
    function info($nuolaida = 0){
             $s = "%s, %s, %s (vaikams)";
         echo sprintf($s, $this->kodas, $this->pavadinimas,($this->kaina * (100 - $nuolaida))/100);
     }
 }
 class studentams extends preke{
     function info($nuolaida = 0){
               $s = "%s, %s, %s (studentams)";
         echo sprintf($s, $this->kodas, $this->pavadinimas,($this->kaina * (100 - $nuolaida))/100);
     }
 }
 $o = new preke('001', 'Gėrimas', 1);
 $o->info(); echo '<br>';
 $o = new vaikams('001', 'Gėrimas', 1);
 $o->info(20); echo '<br>';
 $o = new studentams('001', 'Gėrimas', 1);
 $o->info(10);
