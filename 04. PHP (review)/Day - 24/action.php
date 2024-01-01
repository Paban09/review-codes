<?php

// print_r($_GET);
require_once 'vendor/autoload.php';
use App\classes\Student;


if(isset($_GET['page'])){
    if($_GET['page']=='home'){
        include "pages/home.php";
    }
}
elseif(isset($_POST['submit_btn'])){
    // print_r($_POST);
    // exit();
    $student=new Student($_POST);
    $student->newStudent();
}

?>