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
            'name' => 'Xiaomi Redmi Note 11 Pro 5G',
            'price' => ' 290 EUR',
            'brand' => 'Xiaomi',
            'description' => 'Exp. release 2022, February</br>
                            202g, 8.1mm thickness</br>
                                Android 11, MIUI 13</br>
                                64GB/128GB storage, microSDXC',
            'category' => 'Rubel Khan',
            'image' => 'iphone 13 pro max.jpg'
        ],
        3 => [
            'id' => '4',
            'name' => 'Samsung Galaxy S21 FE 5G',
            'price' => 'Another Blog',
            'brand' => 'Another Blog',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores in mollitia nobis repellendus reprehenderit! Nihil, quas, totam. In, quidem, totam!',
            'category' => 'Rubel Khan',
            'image' => 'iphone 13 pro max.jpg'
        ],
        4 => [
            'id' => '5',
            'name' => 'Samsung Galaxy S21 FE 5G',
            'price' => 'Another Blog',
            'brand' => 'Another Blog',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores in mollitia nobis repellendus reprehenderit! Nihil, quas, totam. In, quidem, totam!',
            'category' => 'Rubel Khan',
            'image' => 'iphone 13 pro max.jpg'
        ],
        5 => [
            'id' => '6',
            'name' => 'Samsung Galaxy S21 FE 5G',
            'price' => '$ 578.98 / € 749.00 / £ 550.27 / ₹ 54,999 / C$ 1,039.00',
            'brand' => 'Samsung',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores in mollitia nobis repellendus reprehenderit! Nihil, quas, totam. In, quidem, totam!',
            'category' => 'Rubel Khan',
            'image' => 'iphone 13 pro max.jpg'
        ]
    ];
    public function getAllProduct()
    {
        return $this->data;
    }

    public function searchProduct($key)
    {
        foreach ($this->data as $products) {
            if ($products['id'] == $key) {
                return [$products];
            }
        }
    }

}