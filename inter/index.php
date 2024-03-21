<?php
include __DIR__ . '/includeInter.php';
//programa principal...
$cep = new Cep('01001-000');
echo $cep->getCep();