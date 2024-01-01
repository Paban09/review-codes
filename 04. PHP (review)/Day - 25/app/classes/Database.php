<?php

namespace App\classes;

use mysqli;

class Database{
    public $user,$hostname,$password,$databaseName,$dbResult;

    public function __construct()
    {
        $this->hostname     ='localhost';
        $this->user         ='root';
        $this->password     ='';
        $this->databaseName ='day_24';
    }

    public function getConnection(){
        $this->dbResult=mysqli_connect($this->hostname,$this->user,$this->password,$this->databaseName);
        return $this->dbResult;
    }
}

?>