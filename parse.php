
<?php

<data>
<auto parduota="1">
        <gam>Honda</gam>
         <mod>Civic</mod>
         <met>2005</met>
         <kai>2000</kai>
    </auto>
        <auto parduota="1">
         <gam>BMW</gam>
         <mod>320i</mod>
         <met> id='aaa'>2006</met>
         <kai>4000</kai>
     </auto>
    <auto>
         <gam>Audi</gam>
         <mod>A6</mod>
        <met>2005</met>
         <kai>3000</kai>
    </auto>

</data>

    $kaina = preg_replace("/^,*>met id=\"aaa\">(\d+),*$/mg, replacement: "$1", $s);