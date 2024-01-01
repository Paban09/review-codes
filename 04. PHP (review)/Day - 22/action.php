<?php

// print_r($_POST);
require_once 'vendor/autoload.php';

use App\classes\Registration;
use App\classes\Subject;


if(isset($_GET['page'])){
    if($_GET['page']=='home'){
        
        include "pages/home.php";
    }
    elseif($_GET['page']=='registration'){

        $subject = new Subject;
        $subjects =$subject->getAllSubject();
        include "pages/registration.php";
    }
}
elseif(isset($_POST["reg_btn"])){
    $subject = new Subject;
    $subjects =$subject->getAllSubject();
    

    $registration = new Registration($_POST);
    $results=$registration->getAllData();
    // print_r($data);
    include "pages/registration.php";
}
elseif(isset($_POST["image_upload"])){
   
    // echo "<pre>";
    // print_r($_POST); 
    // print_r($_FILES);
    // echo "</pre>";
    // exit();

    $data=getimagesize($_FILES['image']['tmp_name']);
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";

    if($data){
        $directory  ='assets/images/';
        $imageName  = $_FILES['image']['name'];
        $destination=$directory.$imageName;
        move_uploaded_file($_FILES['image']['tmp_name'],$destination);
        include "pages/home.php";
    }else{
        echo "Wrong File to upload";
        include "pages/home.php";
    }


    
}

?>