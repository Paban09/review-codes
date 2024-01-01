<?php 

namespace App\classes;

class Home{

    public $messege,$data;


    public function __construct(){
        $this->messege="Hello from home.";

        $this->data =[
            0=>[
                "name"  =>"Paban",
                "age"   =>25,
                "city"  =>"Dhaka",
                "moblie"=>01213211
            ],
            1=>[
                "name"  =>"Rabby",
                "age"   =>21,
                "city"  =>"Nowka",
                "moblie"=>054534411
            ],
            2=>[
                "name"  =>"Talha",
                "age"   =>29,
                "city"  =>"Comilla",
                "moblie"=>21453145
            ]
        ];
    }


    public function index(){
        // echo $this->messege."<br>";

        // $this->data=[100,200,"Paban",true,false,50.22];
        
        // foreach($this->data as $item){
        //     echo $item." ";
        // }


        // $this->data=[
        //     "name"  =>"Paban",
        //     "age"   =>25,
        //     "city"  =>"Dhaka",
        //     "moblie"=>01213211
        // ];

        // foreach($this->data as $index => $item){
        //     echo $index." = ".$item."<br>";
        // }

        // $this->data =[
        //     0=>[
        //         "name"  =>"Paban",
        //         "age"   =>25,
        //         "city"  =>"Dhaka",
        //         "moblie"=>01213211
        //     ],
        //     1=>[
        //         "name"  =>"Rabby",
        //         "age"   =>21,
        //         "city"  =>"Nowka",
        //         "moblie"=>054534411
        //     ],
        //     2=>[
        //         "name"  =>"Talha",
        //         "age"   =>29,
        //         "city"  =>"Comilla",
        //         "moblie"=>21453145
        //     ]
        // ];

        // foreach($this->data as $item){
        //     echo $item;
        // }
        echo "<pre>";    
        print_r($this->data);
        echo "</pre> <br> <hr> <br>";  

        foreach($this->data as $item){
            echo $item["name"]."<br>";
        }
        echo "<br> <hr> <br>";  

        foreach($this->data as $item){
            foreach($item as $key => $value){
                echo $key." = ".$value."<br>";
            }
            echo "<br><br>";
        }

        

    }
}

?>