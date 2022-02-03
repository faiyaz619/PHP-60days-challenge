<?php


namespace app\classes;


class Student
{
    protected $text;
    protected $students;
    protected $result=[];

    public function __construct($post=null)
    {
       if(isset($post['search']))
       {
           $this->text=$post['search'];
       }
    }

    public function getAllStudent()
    {
        return [
            0 =>[
                'name'    => 'Faiyaz',
                'mobile'  =>'123344',
                'email'   =>'Faiyaz.fahim@gmail.com',
                'address' =>'Savar,Dhaka'

            ],
            1 =>[
                'name'    => 'A',
                'mobile'  =>'1',
                'email'   =>'A@gmail.com',
                'address' =>'A'

            ],
            2 =>[
                'name'    => 'B',
                'mobile'  =>'2',
                'email'   =>'B@gmail.com',
                'address' =>'B'
            ],
            3 =>[
                'name'    => 'C',
                'mobile'  =>'3',
                'email'   =>'C@gmail.com',
                'address' =>'C'
            ],
            4 =>[
                'name'    => 'D',
                'mobile'  =>'4',
                'email'   =>'D@gmail.com',
                'address' =>'D'
            ]
        ];
    }
    public function getStudentBySearchText()
    {
        $this->students = $this->getAllStudent();
        foreach ($this->students as $student)
        {
            if ($this->text == $student['name'])
            {
                $this->result= $student;
                break;
            }
        }
        return $this->result;
    }
}