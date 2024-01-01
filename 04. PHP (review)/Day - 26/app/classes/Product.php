<?php

namespace App\classes;
use App\classes\Database;
use mysqli;

class Product{
    public $id,$row,$queryResult,$result=[],$name,$price,$stock,$description,$imageName,$directory,$tempLocation,$imgUrl,$sql,$dbConnect;

    public function __construct($post=null,$files=null)
    {

        if(isset($post['name'])){
            $this->name       =$post['name'];
            $this->price      =$post['price'];
            $this->stock      =$post['stock'];
            $this->description=$post['description'];
            
            if(isset($post['id'])){
                $this->id=$post['id'];
            }
        }

        if(isset($files['image']['size']) && $files['image']['size']>0){
            $this->imageName=time().$files['image']['name'];
            $this->directory='assets/img/';
            $this->tempLocation=$files['image']['tmp_name'];
            $this->imgUrl=$this->directory.$this->imageName;
        }
        
    }


    public function newProduct(){

        move_uploaded_file($this->tempLocation,$this->imgUrl);
        $this->sql="INSERT INTO products(name,price,stock,description,image) VALUES ('$this->name','$this->price','$this->stock','$this->description','$this->imgUrl')";
        $this->dbConnect=new Database();
        mysqli_query($this->dbConnect->dbConnect(),$this->sql);
        return "Product saved successfully";
    }

    public function getAllProduct(){
        $this->sql="SELECT * FROM products";
        $this->dbConnect=new Database();
        $this->queryResult=mysqli_query($this->dbConnect->dbConnect(),$this->sql);
        // print_r($this->queryResult);
        // exit();
        while($this->row=mysqli_fetch_assoc($this->queryResult)){
            array_push($this->result,$this->row);
        }
        // echo '<pre>';
        // print_r($this->result);
        // exit();
        return $this->result;

    }

    public function getProductById($id){
        $this->sql="SELECT * FROM products WHERE id='$id'";
        $this->dbConnect=new Database();
        $this->queryResult=mysqli_query($this->dbConnect->dbConnect(),$this->sql);
        // print_r($this->queryResult);
        // exit();
        $this->row=mysqli_fetch_assoc($this->queryResult);
           
        // echo '<pre>';
        // print_r($this->row);
        // exit();
        return $this->row;
    }

    public function updateProduct(){

        $this->row=$this->getProductById($this->id);

        if($this->tempLocation){
            if(file_exists($this->row['image'])){
                unlink($this->row['image']);
            }
            move_uploaded_file($this->tempLocation,$this->imgUrl);           
        }else{
            $this->imgUrl=$this->row['image'];
            
        }
      
        $this->sql="UPDATE products SET name='$this->name', price='$this->price', stock='$this->stock', description='$this->description', image='$this->imgUrl' WHERE id='$this->id'";
        $this->dbConnect=new Database();
        mysqli_query($this->dbConnect->dbConnect(),$this->sql);
        return "Product Info Updated Successfully";
    }


    public function deleteProduct($id){
        $this->sql="DELETE FROM products WHERE id='$id'";
        $this->dbConnect=new Database();
        mysqli_query($this->dbConnect->dbConnect(),$this->sql);
        return "Product Deleted Successfully";
    }

}

?>