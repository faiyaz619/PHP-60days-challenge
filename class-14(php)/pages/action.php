<?php
require_once '../vendor/autoload.php';
use app\classes\StringWordCount;
use app\classes\Student;

if (isset($_POST['btn']))
{
    $StringWordCount=new StringWordCount($_POST);
    $result          =$StringWordCount->getWordString();
    include 'index.php';
}
elseif (isset($_POST['search_btn']))
{
    $student= new Student($_POST);
    $result=$student->getStudentBySearchText();
    include 'search_result.php';
}
elseif (isset($_GET['status']))
{
    if($_GET['status']=='search'){
        $student = new Student($_GET);
        $students =$student->getAllStudent();
        include 'search.php';
    }

}
else
    {
            header('location:index.php');
    }