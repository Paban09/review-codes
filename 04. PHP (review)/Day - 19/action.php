<?php

// print_r($_GET);
require_once 'vendor/autoload.php';
use App\classes\Category;
use App\classes\Product;

$category=New Category;
$categories=$category->getAllCategory();

// var_dump($products);

if(isset($_GET['page'])){
    if($_GET['page']=='home'){
        $product=new Product;
        $products=$product->getAllProduct();
        include 'pages\home.php';
    }elseif($_GET['page']=='category'){
        $categoryId = $_GET['id'];
        $product=new Product;
        $categoryProducts=$product->getProductByCategoryId($categoryId);
        include 'pages\category.php';
    }
}


?>