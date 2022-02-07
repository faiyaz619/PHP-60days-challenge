<?php


namespace App\classes;


class Blog
{
    protected $blogs;

    public function getAllBlog()
    {
        return [
            0 =>[
                'title'         =>'Another Blog',
                'description'   =>'Blog Description',
                'author'        =>'Rubel Khan',
                'image'     =>'1.jpg'
            ],
            1 =>[
                'title'         =>'Another Blog',
                'description'   =>'Blog Description',
                'author'        =>'Rubel Khan',
                'image'     =>'#.jpg'
             ],
            2 =>[
                'title'         =>'Another Blog',
                'description'   =>'Blog Description',
                'author'        =>'Rubel Khan',
                'image'     =>'#.jpg'
             ]
        ];
    }
}