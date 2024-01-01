<?php 
// echo '<pre>';
// print_r($_GET);
// exit();

// echo '<pre>';
// print_r($_POST);
// print_r($_FILES);
// exit();

require_once 'vendor\autoload.php';
use App\classes\Product;

if(isset($_GET['page'])){
    if($_GET['page']=='home'){
        // print_r($_GET);
        // exit();
        include 'pages/home.php';
    }
    elseif($_GET['page']=='add-product'){
        // print_r($_GET);
        // exit();
        include 'pages/add-product.php';
    }
    elseif($_GET['page']=='all-product'){
        // print_r($_GET);
        // exit();
        $product=new Product();
        $products=$product->getAllProduct();
        // echo '<pre>';
        // print_r($products);
        // exit();
        include 'pages/all-product.php';
    }elseif($_GET['page']=='edit-product'){
        // print_r($_GET);
        // exit();
        $product=new Product();
        $singleProduct=$product->getProductById($_GET['id']);
        // echo '<pre>';
        // print_r($singleProduct);
        // exit();
        include 'pages/edit-product.php';
    }
    elseif($_GET['page']=='delete-product'){
        // print_r($_GET);
        // exit();
        $product=new Product();
        $message=$product->deleteProduct($_GET['id']);
        $products=$product->getAllProduct();

        include 'pages/all-product.php';
        
    }
}
elseif(isset($_POST['add_product'])){
    // echo "<pre>";
    // print_r($_POST);
    // print_r($_FILES);
    // print_r($_FILES['image']['size']);
    // exit();
    $product=new Product($_POST,$_FILES);
    $message=$product->newProduct();
    include 'pages/add-product.php';
   
}
elseif(isset($_POST['update_product'])){
    // echo '<pre>';
    // print_r($_POST);
    // print_r($_FILES);
    // exit();
    $product=new Product($_POST,$_FILES);
    $message=$product->updateProduct();
    $products=$product->getAllProduct();
    include 'pages/all-product.php';
   
}

?>