<?php

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Product;

if(isset($_GET['page'])){
    if($_GET['page'] =='home'){

        $home=new Home;
        $students=$home->getAllStudent();
        include "pages/home.php";
    }elseif($_GET['page'] =='product'){
        $product=new Product;
        $products=$product->getAllProduct();
        include "pages/product.php";
    }
}

?>