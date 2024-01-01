<?php

// print_r($_GET);
// exit();
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Student;

if(isset($_GET['page'])){
    if($_GET['page']=='home'){
        include "pages/home.php";
    }
    elseif($_GET['page']=='all-student'){
        // echo "Hello";
        $student = new Student();
        $students=$student->getAllStudent(); 
        // echo '<pre>';
        // print_r($students);
        // echo '</pre>';
        // exit();
        include "pages/all-student.php";
    }
    elseif($_GET['page']=='update'){
        
        // print_r($_GET);
        // echo $_GET['id'];
        // exit();
        $student=new Student;
        $data=$student->getStudentById($_GET['id']);
        include "pages/update.php";
    }
    elseif($_GET['page']=='register'){
        // echo "Hello";
        include "pages/register.php";
    }
    elseif($_GET['page']=='delete'){
        echo "Hello";
        exit();
    }

}
elseif(isset($_POST['reg_btn'])){
    // echo '<pre>';
    // print_r($_POST);
    // print_r($_FILES);
    // exit();
    $students = new Student($_POST,$_FILES);
    $result=$students->addStudent();
    // echo $result;
    // exit();
    include "pages/register.php";
    

}
elseif(isset($_POST['update_btn'])){
    // echo '<pre>';
    // print_r($_POST);
    // print_r($_FILES);
    // exit();
    $student = new Student($_POST,$_FILES);
    $message=$student->updateStudent();
    
    
    $student = new Student();
    $students=$student->getAllStudent(); 
    include "pages/all-student.php";
}

?>