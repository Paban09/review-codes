<?php 

namespace App\classes;

class Home{

    public $students=[];


    public function __construct(){
        

        $this->students =[
            0=>[
                "id"    =>1,
                "name"  =>"Paban",
                "email" =>"paban@gamil.com",
                "mobile"=>01213211
            ],
            1=>[
                "id"    =>2,
                "name"  =>"Rabby",
                "email" =>"rabby@gamil.com",
                "mobile"=>054534411
            ],
            2=>[
                "id"    =>3,
                "name"  =>"Talha",
                "email" =>"talha@gamil.com",
                "mobile"=>21453145
            ]
        ];
    }

    public function index(){
        header('Location:action.php?page=home');
    }

    public function getAllStudent(){
        return $this->students;
    }

    // public function index(){
    //       echo "<pre>";
    //       var_dump($this->data); 
    //       echo "</pre>";

    //       echo "<br><br>";

    //       echo "<pre>";
    //       print_r($this->data);
    //       echo "</pre>";

    //       echo "<br><br>";
          
    //       foreach($this->data as $info){
    //         foreach($info as $key => $i){
    //             echo $key." = ".$i."<br>";
    //         }
    //         echo "<br><br>";
    //       }

    // }
}

?>