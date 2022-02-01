<?php
require_once 'vendor/autoload.php';
use App\classes\Calculator;
if(isset($_POST['operator']))
{
    if($_POST['first_number']!='')
    {
        if($_POST['Second_number']!='')
        {
            $calculator= new Calculator($_POST);
            $result=$calculator->index();
            include 'index.php';
        }
        else
        {
            header('location:index.php');
        }
    }
    else
    {
        header('location:index.php');
    }
}
else
{
    header('location:index.php');
}

