<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'interFront.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'balancohidrico.html';

$inter = new InterBalHidrico();
$inter->create()