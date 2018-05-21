<?php
 class naujienos {
     public $sarasas = {};
     function add($data, $tekstas) {
         $this->sarasas[] = {
             'data' => $data,
             'tekstas' => $tekstas

         };
     }
     function info() {
         usort($this->sarasas,function($a, $b) {
             if ($a['data'] > $b ['data']) return 1;
             elseif ($a['data'] == $b['data']) return 0 ;
             else return -1;
         }
         );
     $i = 0;
     foreach($this->sarasas as $nau){
     $this->sarasas[$i]['tekstas'] = ucfirst(strtolower($this->[$i]['teksta']));
     $i++;
     }
 }
 function info2(){
     usort($this->sarasas, function($a, $b){
     }
}
}