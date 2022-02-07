<?php


namespace App\classes;


class FileUpload
{
    protected $image;
    protected $imageName;
    protected $directory;
    public function __construct($post=null)
    {
       $this->image=$post['image'];
    }
    public function index()
    {
        $this->imageName=$_FILES['image']['name'];
        $this->directory ='assets/img/upload'.$this->imageName;
        move_uploaded_file($_FILES['image']['tap name'],$this->directory);
        echo 'success';
    }
}