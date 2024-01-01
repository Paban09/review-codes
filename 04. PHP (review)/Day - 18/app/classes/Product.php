<?php

namespace App\classes;

class Product{
    public $products=[];

    public function __construct(){
        $this->products=[
            0=>[
                'id'    => '1',
                'name'  => 'Hill Shoe',
                'price' =>  2500,
                'image' =>  'product1.png'
            ],
            1=>[
                'id'    => '2',
                'name'  => 'Belt',
                'price' =>  2000,
                'image' =>  'product2.png'
            ],
            2=>[
                'id'    => '3',
                'name'  => 'Hat',
                'price' =>  3750,
                'image' =>  'product3.png'
            ],
            3=>[
                'id'    => '4',
                'name'  => 'Gucci Bag',
                'price' =>  36000,
                'image' =>  'product4.png'
            ]
       ];
    }


    public function getAllProduct()
    {
       return $this->products;

    }
}

?>