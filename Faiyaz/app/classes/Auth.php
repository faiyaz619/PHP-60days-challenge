<?php


namespace App\classes;
use App\classes\User;
use App\classes\Home;
class Auth
{
    protected $email;
    protected $password;
    protected $user;
    protected $users;
    protected $message;
    protected $home;

    public function __construct($post=null)
    {
        $this->email = $post['email'];
        $this->password = $post['password'];
    }

    public function login()
    {
        header('Location: action.php?pages=login');
    }
    public function verify()
    {
        $this->user = new User();
        $this->users = $this->user->getAllUser();
        foreach ($this->users as $data)
        {
            if ($data['email'] == $this->email && $data['password'] == $this->password)
            {
                $_SESSION['id'] = $data['id'];
                $_SESSION['name'] = $data['name'];
            }

        }
        return $this->users;
    }

    public function logout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['name']);

        $this->login();

    }

}