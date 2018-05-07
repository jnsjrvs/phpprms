<?php


error_reporting( E_ALL );
ini_set('display_errors', '1');

try {
    $cnn = new PDO('mysql:host=localhost;dbname=jaustu', 'jaustu', 'IsmokKodint333');
    $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // allow exceptions

    $res = $cnn->prepare ("update  aut set aut_metai=:met, aut_modelis=:mod where aut_id=:id");
    $res = $res->execute([':mod' => 'Fabia', ':met' => '2010', 'id' =>7]);
    echo 'ok';
}
catch(PDOException $e) {
    echo $e->getMessage();
}