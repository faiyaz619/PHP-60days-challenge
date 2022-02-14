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
                'mobile'  => '+131256',
                'email'    =>'faiyaz@gmail.com',
                'address'     =>'savar',
                'password' => '123456'
            ],
            1 => [
                'id'        =>2,
                'name'      => 'fahim',
                'mobile'  => '+1656556',
                'email'     =>'fahim@gmail.com',
                'address'     =>'mirpur',
                'password'  => '232323'
            ]
        ];
    }
}