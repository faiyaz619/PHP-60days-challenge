<?php


namespace app\classes;


class User
{
    protected $user =[];

    public function getAllUser()
    {
        $this->user=[
            0 =>[
                'name'=>'Faiyaz',
                'mobile'=>'1234',
                'location'=>'Dhaka'
            ],
            1 => [
                'name'=>'tanveer',
                'mobile'=>'7890',
                'location'=>'narsindhi'
            ]
        ];
        return $this->user;
    }
}