<?php


class cla {
    public $skaiciai = [];
    function add($n, $nuo, $iki) {
        for ($i=0; $i<$n; $i++) $this->skaiciai[] = rand($nuo, $iki);
    }
    function info() {
        $m = [];
        foreach ($this->skaiciai as $skaicius){
            if ($skaicius)
        }
    }
}