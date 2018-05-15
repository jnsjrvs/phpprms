<?php

$s = '    labas               rytas';
if (preg_match("/labas/", $s)) echo 'labas surastas<br>';



if (preg_match("/\s+r",$s)) echo ' surastas<br>';

