<?php

require_once 'vendor\autoload.php';
use App\classes\Home;
use App\classes\PasswordGenerator;
use App\classes\Blog;
use App\classes\Product;
use App\classes\Pattern;

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
    elseif($_GET['pages']=='search')
    {
        $productDetails= new Product();
        $detail=$productDetails->searchProduct($_GET['id']);
        include 'pages/detail.php';

    }
    elseif($_GET['pages']=='pattern')
    {
        include 'pages/pattern.php';

    }
    elseif($_GET['pages']=='fileUpload')
    {
        include 'pages/fileUpload.php';

    }
}

elseif (isset($_POST['btn']))
{
    $passwordGenerator = new PasswordGenerator($_POST);
    $result=$passwordGenerator->newPassword();
    include 'pages/password-generator.php';
}
elseif (isset($_POST['pattern_btn']))
{
    $pattern = new Pattern($_POST);
    $result=$pattern->index();
    include 'pages/pattern.php';
}
elseif (isset($_POST['image_btn']))
{
    $fileUpload = new FileUpload($_POST);
    $fileUpload->index();
    include 'pages/fileUpload.php';
}
else
    {
     $home=new Home();
     $home->index();
    }

