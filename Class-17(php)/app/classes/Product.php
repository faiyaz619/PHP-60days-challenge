<?php


namespace App\classes;


class Product
{
    public $data = [
        0 => [
            'id' => '1',
            'name' => 'Samsung Galaxy S21 FE 5G',
            'price' => '$ 578.98 / € 749.00 / £ 550.27 / ₹ 54,999 / C$ 1,039.00',
            'brand' => 'Samsung',
            'description' => 'Released 2022, January 07</br>
                              177g, 7.9mm thickness </br> Android 12, One UI 4 </br>
                              128GB/256GB storage, no card slot',
            'category' => 'Mobile',
            'image' => 's21.jpg'
        ],
        1 => [
            'id' => '2',
            'name' => 'Apple iPhone 13 Pro Max',
            'price' => '$ 1,099.00 / £ 929.99 / ₹ 129,900 / Rp 23,681,736',
            'brand' => 'iPhone',
            'description' => 'Released 2021, September 24 </br>
                              240g, 7.7mm thickness </br>
                              iOS 15, up to iOS 15.3</br>
                              128GB/256GB/1TB storage, no card slot',
            'category' => 'Mobile',
            'image' => 'iphone 13 pro max.jpg'
        ],
        2 => [
            'id' => '3',
            'name' => 'Another Blog',
            'price' => 'Another Blog',
            'brand' => 'Another Blog',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores in mollitia nobis repellendus reprehenderit! Nihil, quas, totam. In, quidem, totam!',
            'category' => 'Rubel Khan',
            'image' => 'iphone_12.jpg'
        ],
        3 => [
            'id' => '4',
            'name' => 'Another Blog',
            'price' => 'Another Blog',
            'brand' => 'Another Blog',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores in mollitia nobis repellendus reprehenderit! Nihil, quas, totam. In, quidem, totam!',
            'category' => 'Rubel Khan',
            'image' => 'mobile.jpg'
        ],
        4 => [
            'id' => '5',
            'name' => 'Another Blog',
            'price' => 'Another Blog',
            'brand' => 'Another Blog',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores in mollitia nobis repellendus reprehenderit! Nihil, quas, totam. In, quidem, totam!',
            'category' => 'Rubel Khan',
            'image' => 'mobile.jpg'
        ],
        5 => [
            'id' => '6',
            'name' => 'Another Blog',
            'price' => 'Another Blog',
            'brand' => 'Another Blog',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores in mollitia nobis repellendus reprehenderit! Nihil, quas, totam. In, quidem, totam!',
            'category' => 'Rubel Khan',
            'image' => 'mobile.jpg'
        ],
        6 => [
            'id' => '7',
            'name' => 'Another Blog',
            'price' => 'Another Blog',
            'brand' => 'Another Blog',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores in mollitia nobis repellendus reprehenderit! Nihil, quas, totam. In, quidem, totam!',
            'category' => 'Rubel Khan',
            'image' => 'mobile.jpg'
        ],
        7 => [
            'id' => '8',
            'name' => 'Another Blog',
            'price' => 'Another Blog',
            'brand' => 'Another Blog',
            'description' => 'Blog Description',
            'category' => 'Rubel Khan',
            'image' => 'mobile.jpg'
        ],
        8 => [
            'id' => '9',
            'name' => 'Another Blog',
            'price' => 'Another Blog',
            'brand' => 'Another Blog',
            'description' => 'Blog Description',
            'category' => 'Rubel Khan',
            'image' => 'mobile.jpg'
        ],
        9 => [
            'id' => '10',
            'name' => 'Another Blog',
            'price' => 'Another Blog',
            'brand' => 'Another Blog',
            'description' => 'Blog Description',
            'category' => 'Rubel Khan',
            'image' => 'mobile.jpg'
        ],
        10 => [
            'id' => '11',
            'name' => 'Another Blog',
            'price' => 'Another Blog',
            'brand' => 'Another Blog',
            'description' => 'Blog Description',
            'category' => 'Rubel Khan',
            'image' => 'mobile.jpg'
        ],
    ];

    public function getAllProduct()
    {
        return $this->data;
    }

    public function searchProduct($key)
    {
        foreach ($this->data as $products) {
            if ($products['id'] == $key) {
                return $products;
            }
        }
    }

}