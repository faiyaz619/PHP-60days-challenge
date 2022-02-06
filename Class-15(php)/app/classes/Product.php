<?php


namespace App\classes;


class Product
{
    protected $product;
    protected $productlist;
    public $data=[
        0 =>[
            'id'           =>'1',
            'name'         =>'Galaxy S8',
            'price'        =>'TK 10000',
            'brand'        =>'Samsung',
            'description'  =>'Blog Description',
            'category'     =>'Mobile',
            'image'        =>'mobile.jpg'
        ],
        1 =>[
            'id'           =>2,
            'name'         =>'Another Blog',
            'price'        =>'Another Blog',
            'brand'        =>'Another Blog',
            'description'  =>'Blog Description',
            'category'     =>'Rubel Khan',
            'image'        =>'mobile.jpg'
        ],
        2 =>[
            'id'           =>3,
            'name'         =>'Another Blog',
            'price'        =>'Another Blog',
            'brand'        =>'Another Blog',
            'description'  =>'Blog Description',
            'category'     =>'Rubel Khan',
            'image'        =>'mobile.jpg'
        ],
        3 =>[
            'id'           =>4,
            'name'         =>'Another Blog',
            'price'        =>'Another Blog',
            'brand'        =>'Another Blog',
            'description'  =>'Blog Description',
            'category'     =>'Rubel Khan',
            'image'        =>'mobile.jpg'
        ],
        4 =>[
            'id'           =>5,
            'name'         =>'Another Blog',
            'price'        =>'Another Blog',
            'brand'        =>'Another Blog',
            'description'  =>'Blog Description',
            'category'     =>'Rubel Khan',
            'image'        =>'mobile.jpg'
        ],
        5 =>[
            'id'           =>6,
            'name'         =>'Another Blog',
            'price'        =>'Another Blog',
            'brand'        =>'Another Blog',
            'description'  =>'Blog Description',
            'category'     =>'Rubel Khan',
            'image'        =>'mobile.jpg'
        ],
        6 =>[
            'id'           =>7,
            'name'         =>'Another Blog',
            'price'        =>'Another Blog',
            'brand'        =>'Another Blog',
            'description'  =>'Blog Description',
            'category'     =>'Rubel Khan',
            'image'        =>'mobile.jpg'
        ],
        7 =>[
            'id'           =>8,
            'name'         =>'Another Blog',
            'price'        =>'Another Blog',
            'brand'        =>'Another Blog',
            'description'  =>'Blog Description',
            'category'     =>'Rubel Khan',
            'image'        =>'mobile.jpg'
        ],
        8 =>[
            'id'           =>9,
            'name'         =>'Another Blog',
            'price'        =>'Another Blog',
            'brand'        =>'Another Blog',
            'description'  =>'Blog Description',
            'category'     =>'Rubel Khan',
            'image'        =>'mobile.jpg'
        ],
        9 =>[
            'id'           =>'10',
            'name'         =>'Another Blog',
            'price'        =>'Another Blog',
            'brand'        =>'Another Blog',
            'description'  =>'Blog Description',
            'category'     =>'Rubel Khan',
            'image'        =>'mobile.jpg'
        ],
        10 =>[
            'id'           =>'11',
            'name'         =>'Another Blog',
            'price'        =>'Another Blog',
            'brand'        =>'Another Blog',
            'description'  =>'Blog Description',
            'category'     =>'Rubel Khan',
            'image'        =>'mobile.jpg'
        ],
    ];
    public function getAllProduct()
    {
        return $this->data;
    }
    public function searchProduct($key)
    {
        foreach ($this->data as $products)
        {
            if($products['id']==$key)
            {
                return $products;
            }
        }
    }

}