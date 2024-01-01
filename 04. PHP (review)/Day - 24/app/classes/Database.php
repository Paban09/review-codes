<?php

namespace App\classes;

use mysqli;

class Database{
    public $user;
    public $hostname;
    public $password;
    public $databaseName;
    public $dbResult;

    public function __construct()
    {
        $this->user         ='root';
        $this->hostname     ='localhost';
        $this->password     ='';
        $this->databaseName ='day_24';
    }

    public function dbConnect(){
        $this->dbResult=mysqli_connect($this->hostname,$this->user,$this->password,$this->databaseName);
        // echo "<pre>";
        // print_r($this->dbResult);
        // echo "</pre>";
        // exit();

        return $this->dbResult;
    }

}

?>