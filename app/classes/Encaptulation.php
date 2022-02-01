<?php


namespace App\classes;


class Encaptulation
{
    public $firstNumber = 10;
    protected $secondNumber = 20;
    private $operator = 30;
    public $result;

    public $user;

    public function index(){
        echo $this->country;

//        WITHOUT EXTENDS
//        $this->user = new User();
//        echo $this->user ->city;
    }

    protected function one(){
        echo 'Protected Function';
    }

    private function two(){
        echo 'Private Function';
    }
}