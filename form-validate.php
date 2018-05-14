<?php

class cla{
    public $vardas, $pavarde, $amzius, $epastas;
    function _construct ($v, $p, $a, $e){
        $this->vardas = $v;
        $this->pavarde = $p;
        $this->amzius = $a;
        $this->epastas = $e;
    }
    function info(){
        $a = "Vardas: %s, pavarde: %s, amzius: %s, el. pastas: %s";
        return sprintf($s, $this->vardas, $this->pavarde, $this->amzius, $this->epastas);
    }
}
$o = new cla($_POST ['vardas'],$_POST['pavarde'], $_POST['amzius'],$_POST['epastas']);
$data = $o->info();


echo json_encode($data);