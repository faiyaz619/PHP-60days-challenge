<?php


namespace App\classes;


class Registration
{
    protected $fullName;
    protected $email;
    protected $mobile;
    protected $result;
    public function __construct($post =null)
    {
        if (isset($post['full_name']))
        {
            $this->fullName=$post['full_name'];
            $this->email=$post['email'];
            $this->mobile=$post['phone'];
        }
    }

    public function add()
    {
       $_SESSION['name'] =$this->fullName;
       $_SESSION['email'] =$this->email;
       $_SESSION['mobile'] =$this->mobile;

       return 'Data store successfully';
    }
    public function allData()
    {
        $this->result= [
            'name' => $_SESSION['name'],
            'email' => $_SESSION['email'],
            'mobile' => $_SESSION['mobile'],

        ];
    }


}