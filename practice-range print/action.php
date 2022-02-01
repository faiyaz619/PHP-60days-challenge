<?php

require_once 'vendor/autoload.php';
use app\classes\Range;

$range= new Range($_POST);
$result = $range->index();

include 'index.php';