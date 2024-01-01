<?php

require_once "vendor/autoload.php";
use App\classes\Home;
use App\classes\FullName;
// print_r($_POST);

if(isset($_GET['page'])){
    if($_GET['page']=='home'){
        include "pages/home.php";
    }
}
elseif($_POST['full_name_btn']){
    
    if($_POST['full_name_btn']=='submit'){
        // print_r($_POST);

        $fullName=new FullName($_POST);
        $result = $fullName->getFullName();
        include "pages/home.php";
    }
}
else{
    $home=new Home();
    $home->index();
}

?>