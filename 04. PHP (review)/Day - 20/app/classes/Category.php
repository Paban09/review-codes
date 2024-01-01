<?php

namespace App\classes;

class Category{
   public $categories=[];

   public function __construct()
   {
    $this->categories=[
        0=>[
            'id'=>1,
            'name'=>'Man Fashion'
        ],
        1=>[
            'id'=>2,
            'name'=>'Woman Fashion'
        ]
    ];
   }
   
   public function getAllCategories(){
        return $this->categories;
   }

}

?>