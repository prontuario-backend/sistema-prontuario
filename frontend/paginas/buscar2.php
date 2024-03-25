<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'interFront.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'buscar.php';


if (isset ($_POST['inputPasciente'])) {
    $inter = new InterPasc();

} else {
    echo "Erro especifique um pasciente";
}