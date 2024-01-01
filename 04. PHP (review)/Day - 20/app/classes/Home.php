<?php

namespace App\classes;

class Home{


    public function index(){
        // echo "Hello form Home Class";
        header('Location:action.php?page=home');
    }
}

?>