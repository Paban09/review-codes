<?php

// print_r($_GET);
require_once "vendor/autoload.php";
use App\classes\Category;
use App\classes\Product;


$category=new Category;
$categories=$category->getAllCategories();

if(isset($_GET["page"])){
    if($_GET["page"]=='home'){

        $product=new Product;
        $products=$product->getAllProduct();
        include 'pages\home.php';
    }elseif($_GET["page"]=='category'){
        // print_r($_GET);
        // exit();
        $categoryId=$_GET["id"];
        // echo $categoryId;
        // exit();
        $product=new Product;
        $products=$product->getProductById($categoryId);
        include 'pages\category.php';
    }elseif($_GET["page"]=='detail'){
        
        // print_r($_GET);
        // exit();

        $productId=$_GET["id"];
        $product=new Product;
        $productDetail=$product->getProductDetailById($productId);
        include 'pages\detail.php';
       
    }
}

?>