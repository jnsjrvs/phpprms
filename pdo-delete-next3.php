<?php


error_reporting( E_ALL );
ini_set('display_errors', '1');

try {
    $cnn = new PDO('mysql:host=localhost;dbname=jaustu', 'jaustu', 'IsmokKodint333');
    $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // allow exceptions

    $res = $cnn->prepare("delete from aut where aut_id=?");
    $res->execute([9]);
    echo 'ok';
}
catch(PDOException $e) {
    echo $e->getMessage();
}