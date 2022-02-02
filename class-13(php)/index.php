<?php

require_once 'vendor\autoload.php';
use app\classes\Series;

$series = new Series($_POST);
$series->index();