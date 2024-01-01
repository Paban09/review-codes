<?php 

namespace App\classes;
 

class Product{

    public $products=[],$result=[];

    public function __construct()
    {
        $this->products=[
            0=>[
                'id'=>1,
                'category_id'=>1,
                'name'=>'New T-shirt',
                'price'=>2500,
                'image'=>"1.png",
                'description'=>'Check that Firefox has permission to access the web (you might be connected but behind a firewall'
            ],
            1=>[
                'id'=>2,
                'category_id'=>2,
                'name'=>'Women shirt',
                'price'=>2500,
                'image'=>"2.png",
                'description'=>'Check that Firefox has permission to access the web (you might be connected but behind a firewall'
            ],
            2=>[
                'id'=>3,
                'category_id'=>2,
                'name'=>'Women Nighty',
                'price'=>3500,
                'image'=>"4.png",
                'description'=>'Check that Firefox has permission to access the web (you might be connected but behind a firewall'
            ],
            3=>[
                'id'=>4,
                'category_id'=>2,
                'name'=>'Lady Hill',
                'price'=>4500,
                'image'=>"product1.png",
                'description'=>'Check that Firefox has permission to access the web (you might be connected but behind a firewall'
            ],
            4=>[
                'id'=>5,
                'category_id'=>1,
                'name'=>'Belt',
                'price'=>500,
                'image'=>"product2.png",
                'description'=>'Check that Firefox has permission to access the web (you might be connected but behind a firewall'
            ],
            5=>[
                'id'=>6,
                'category_id'=>1,
                'name'=>'Polo-shirt',
                'price'=>2000,
                'image'=>"3.png",
                'description'=>'Check that Firefox has permission to access the web (you might be connected but behind a firewall'
            ]
        ];
    }

    public function getAllProduct(){
        return $this->products;
    }

    public function getProductById($categoryId){
        $this->products=$this->getAllProduct();
        foreach($this->products as $product){
            if($product['category_id']==$categoryId){
                array_push($this->result,$product);
            }
        }
        return $this->result;
        
    }

    public function getProductDetailById($productId){
        $this->products=$this->getAllProduct();
        foreach($this->products as $product){
            if($product['id']==$productId){
                array_push($this->result,$product);
            }
        }
        return $this->result;
    }

}

?>