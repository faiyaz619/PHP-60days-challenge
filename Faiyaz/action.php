<?php
session_start();
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Product;
use App\classes\User;
use App\classes\Auth;
use App\classes\FileUpload;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        if (isset($_SESSION['id'])){
            $product = new Product();
            $products=$product->getAllproduct();
            include 'pages/home.php';
        }
        else
        {
            $product = new Product();
            $products=$product->getAllproduct();
            include 'pages/home.php';
        }
    }
    elseif ($_GET['pages'] == 'product')
    {
        if (isset($_SESSION['id'])){
            $product = new Product();
            $products=$product->getAllproduct();
            include 'pages/product.php';
        }
        else
        {
            $product = new Product();
            $products=$product->getAllproduct();
            include 'pages/home.php';
        }
    }
    elseif ($_GET['pages'] == 'upload')
    {
        if (isset($_SESSION['id'])){
            include 'pages/fileupload.php';
        }
        else
        {
            $product = new Product();
            $products=$product->getAllproduct();
            include 'pages/home.php';
        }
    }
    elseif($_GET['pages']=='search')
    {
        $productDetails= new Product();
        $detail=$productDetails->searchProduct($_GET['id']);
        $detail=$detail[0];
        include 'pages/product-details.php';
    }
    elseif($_GET['pages']=='login')
    {
        include 'pages/login.php';
    }
    elseif($_GET['pages']=='all-user')
    {
        $user =new User();
        $results=$user ->getAllUser();
        include 'pages/dashboard.php';
    }
    elseif($_GET['pages']=='logout')
    {
        $auth =new Auth();
        $auth ->logout();
    }
}
elseif (isset($_POST['search_btn']))
{
    $productDetails= new Product();
    $products=$productDetails->searchProduct($_POST['id']);
    include 'pages/home.php';
}
elseif (isset($_POST['image-btn']))
{
    $file=new FileUpload();
    $message=$file->index();
    include 'pages/fileupload.php';
}
elseif (isset($_POST['login-btn']))
{
    $auth =new Auth($_POST);
    $result=$auth ->verify();
    $product = new Product();
    $products=$product->getAllproduct();
    include 'pages/home.php';
}

else{
    $home = new Home();
    $home->index();
}
