<?php
/*Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “dviratis”,
kuri turi savybes - gamintojas, modelis, kaina.
Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus
- gamintojas, modelis, kaina - perduotus parametrus padėtų į savo savybes.
 */

        class dviratis {
            public $gamint;
            public $modelis;
            public $kaina;
            function __construct($gam, $mod, $kn){
                $this->gamint = $gam;
                $this->modelis = $mod;
                $this->kaina = $kn;
        }

            function getInfo(){
                $s = "%s %s %s";
                echo sprintf($s, $this->gamint, $this->modelis, $this->kaina). '<br>';
            }
        }

        $o = new dviratis('BMX',  'Star', '1999 Eur' );
        $o->getInfo();
        $o = new dviratis( 'Vairas',  'Ereliukas', '599 Eur');
        $o->getInfo();

