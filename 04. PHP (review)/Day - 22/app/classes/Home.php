<?php


namespace App\classes;

class Home{
    public $message;

    public function __construct()
    {
        $this->message="Hello";
    }


    public function index()
    {
        header('Location:action.php?page=home');
    }
}