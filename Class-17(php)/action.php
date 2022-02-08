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

    elseif($_GET['pages']=='all-blogs')
    {
        $blog= new Blog();
        $allBlogs=$blog->getAllBlogs();
        include 'pages/blog.php';

    }
}

elseif (isset($_POST['btn']))
{
    $blog= new Blog($_POST);
    $message=$blog->index();
    include 'pages/home.php';
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

