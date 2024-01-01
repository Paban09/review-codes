<?php

namespace App\classes;
use App\classes\Database;
use mysqli;

class Student{

    public $database,$row,$data=[],$name,$email,$mobile,$directory,$imageName,$imageUrl,$tempLocation,$dbResult,$query,$queryResult;

    public function __construct($post=null,$files=null)
    {

        if(isset($post['name'])){
            $this->name=$post['name'];   
            $this->email=$post['email'];   
            $this->mobile=$post['mobile']; 
        }
        
        if (isset($files['image']['size']) && $files['image']['size'] > 0){
            $this->directory='assets/img/';
            $this->imageName=time().$files['image']['name'];
            $this->tempLocation=$files['image']['tmp_name'];
            $this->imageUrl=$this->directory.$this->imageName;
        }
        
       
    }

    public function addStudent(){

        if( ! getimagesize($this->tempLocation)){
            return "Please enter your image";
        }

        move_uploaded_file($this->tempLocation, $this->directory.$this->imageName);


        $database=new Database;
        $this->dbResult=$database->getConnection();
        $this->query="INSERT INTO students (name,email,mobile,image) VALUES ('$this->name','$this->email','$this->mobile','$this->imageUrl')";
        mysqli_query($this->dbResult,$this->query);
        return "Data Inserted Successfully";
    }


    public function getAllStudent(){
        $this->query="SELECT * FROM students";
        $this->database=new Database;
        $this->dbResult=$this->database->getConnection();
        $this->queryResult=mysqli_query($this->dbResult,$this->query);
        
        // 
        
        while($this->row=mysqli_fetch_assoc($this->queryResult)){
            array_push($this->data,$this->row);
        }

        return $this->data;
    }


    public function getStudentById($id){
       
        $this->query="SELECT * FROM students WHERE id='$id'";
        $database=new Database;
        $this->dbResult=$database->getConnection();
        $this->queryResult=mysqli_query($this->dbResult,$this->query);

        $this->row=mysqli_fetch_assoc($this->queryResult);
            
        

        // print_r($this->row);
        // exit();
        return $this->row;
    }


    public function updateStudent()
    {
        $id = $_POST['id'];
        $this->query      = "SELECT * FROM students WHERE id = '$id' ";
        $this->database=new Database;
        $this->dbResult=$this->database->getConnection();
        $this->queryResult=mysqli_query($this->dbResult,$this->query);
        $this->row = mysqli_fetch_assoc($this->queryResult);

        

        if (isset($this->imageName))
        {
            if( ! getimagesize($this->tempLocation) )
            {
                return 'Please select only image file.';
            }
            else
            {
                if (file_exists($this->row['image']))
                {
                    unlink($this->row['image']);
                }
                move_uploaded_file($this->tempLocation, $this->imageUrl);
            }
        }
        else
        {

            $this->imageUrl = $this->row['image'];
        }

        $this->query      = "UPDATE students SET name = '$this->name', email = '$this->email', mobile = '$this->mobile', image = '$this->imageUrl'  WHERE id = '$id'";
        $this->database=new Database;
        $this->dbResult=$this->database->getConnection();
        $this->queryResult=mysqli_query($this->dbResult,$this->query);
        return 'Student info update successfully.';


        
    }

}



?>