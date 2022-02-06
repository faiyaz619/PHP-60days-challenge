<?php

require_once 'vendor\autoload.php';
use App\classes\Home;
use App\classes\PasswordGenerator;
use App\classes\Blog;
use App\classes\Product;

if(isset($_GET['pages']))
{
    if($_GET['pages']=='home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['pages']=='password-generator')
    {
        include 'pages/password-generator.php';
    }
    elseif ($_GET['pages']=='blog')
    {
        $blog = new Blog();
        $blogs=$blog->getAllBlog();
        include 'pages/blog.php';
    }
    elseif ($_GET['pages']=='product')
    {
        $product = new Product();
        $products=$product->getAllproduct();
        include 'pages/product.php';
    }
    elseif ($_GET['status']=='search')
    {
        $productDetails= new Product();
        $Details=$productDetails->searchProduct($_GET['id']);
        include 'pages/detail.php';

    }
}
elseif (isset($_POST['btn']))
{
    $passwordGenerator = new PasswordGenerator($_POST);
    $result=$passwordGenerator->newPassword();
    include 'pages/password-generator.php';
}
else
    {
     $home=new Home();
     $home->index();
    }