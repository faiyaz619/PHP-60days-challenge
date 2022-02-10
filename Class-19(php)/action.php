<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\NumberChecker;
use App\classes\SeriesChecker;
use App\classes\Registration;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    } elseif ($_GET['pages'] == 'series')
    {
        include 'pages/series.php';
    }
    elseif ($_GET['pages'] == 'registration')
    {
    include 'pages/registration.php';
    }
    else
        {
        include 'pages/home.php';
    }
}
elseif (isset($_POST['btn']))
{
 $NumberChecker= new numberChecker($_POST);
 $result=$NumberChecker->primeNumberChecker();
 include 'pages/home.php';
}
elseif (isset($_POST['series_btn'])) {
    $SeriesChecker = new seriesChecker($_POST);
    $result= $SeriesChecker->seriesNumberChecker();
    include 'pages/series.php';
}
elseif (isset($_POST['reg_btn'])) {
    $registration = new Registration($_POST);
//    $result= $registration->getRegistration();
//    include 'pages/registration.php';
}
else
    {
        $home= new Home();
        $home->index();
    }