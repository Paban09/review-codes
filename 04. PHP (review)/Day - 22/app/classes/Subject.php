<?php

namespace App\classes;

class Subject{

    public function getAllSubject(){
        return [
            0 => [
                'id'  => 1,
                'name'=> 'Bangla'
            ],
            1 => [
                'id'  => 2,
                'name'=> 'English'
            ],
            2 => [
                'id'  => 3,
                'name'=> 'Biology'
            ],
            3 => [
                'id'  => 4,
                'name'=> 'Math'
            ],
            4 => [
                'id'  => 5,
                'name'=> 'Higher Math'
            ],
            5 => [
                'id'  => 6,
                'name'=> 'Physics'
            ]
        ];
    }
}

?>