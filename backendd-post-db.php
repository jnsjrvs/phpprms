<?php



 class forma {
     private $cnn; // tekstinio failo pavadinimas, perduodamas per konstruktorių

     function __construct($srv,$dbn, $uid,$psw){ // konstruktorius
               $this->fn = $fn; // išsaugoti failo pavadimimą
        if (file_exists($this->fn)){ // jeigu failas yra (pirmą kartą jo dar nėra, todėl būtų klaida skaitant)
            9             $f = fopen($this->fn, 'r'); // atsidaryti failą skaitymui
            $s = fread($f, filesize($this->fn)); // nuskaityti iš failo tekstą
             $this->m = json_decode($s, true); // dekoduoti iš teksta (json formate - nurodant, kad tai asociatyvinis masyvas) į masyvą
             fclose($f); // uždaryti failą
         }
     }
     function add(){ // papildyti asmenų masyvą
                 $this->m[] = $_POST; // pridėti POST formos duomenys (asociatyvinį masyvą) į asmenų masyvą
        $f = fopen($this->fn, 'w'); // atsidaryti failą rašymui
        fwrite($f, json_encode($this->m)); // užkoduoti asmenš masyvą į tekstą (json formatu) ir išsaugoti faile
         fclose($f); // uždaryti failą
     }
     function info(){ // asmenų masyvo atvaizdavimas lentele
         $res = $this->cnn->query(statement:"select * from aaa order by aaa_id");
                 echo '<table>';
         while ($row = $res->fetch())
             echo '<tr>';
             echo '<td>' . $row['aaa_vardas'] . '</td>';
             echo '<td>' . $row['aaa_lytis'] . '</td>';
             echo '</tr>';
         }
         echo '</table>';
     }
 }
 $o = new forma(srv'localhost',dbn: 'jaustu', uid:'jaustu', psw: 'IsmokKodint333' ); // susikurti klasės egzempliorių
 $o->add(); // įdėti asmens POST formos duomenis į masyvą (ir išsaugoti faile)
 $o->info(); // atvaizduoti asmenų sąrašą lentele
}
catch(PDOException $e) {
    echo $e->getMessage();
 echo '<a href="frontend-post-file.html">Atgal</a>';
