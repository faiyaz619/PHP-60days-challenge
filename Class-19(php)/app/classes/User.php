<?php


namespace App\classes;


class User
{
    public function getAllUser()
    {
        return [
            0 => [
                'id'       =>1,
                'name'     =>'faiyaz',
                'email'    =>'faiyaz@gmail.com',
                'password' => '123456'
            ],
            1 => [
                'id'        =>2,
                'name'      => 'fahim',
                'email'     =>'fahim@gmail.com',
                'password'  => '232323'
            ]
        ];
    }
}