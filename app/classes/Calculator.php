<?php


namespace App\classes;
use App\classes\User;

class Calculator
{
    public $firstNumber;
    protected $secondNumber;
    private $operator;
    public $result;

    public function __construct($data)
    {
//        echo is_array($data) ? 'Data is array' : 'Data is single Variable';
        $this->firstNumber  = $data['f_num'];
        $this->secondNumber = $data['s_num'];
        $this->operator     = $data['operator'];
    }

    public function index(){
        switch ($this->operator){
            case '+':
                $this->result = $this->add();
                break;
            case '-':
                $this->result = $this->sub();
                break;
            case '*':
                $this->result = $this->mul();
                break;
            case '/':
                $this->result = $this->div();
                break;
            case '%':
                $this->result = $this->rem();
                break;
            default:
                echo 'Wrong Input';
        }
        return $this->result;
    }

    protected function add(){
        return $this->firstNumber + $this->secondNumber;
    }
    protected function sub(){
        return $this->firstNumber - $this->secondNumber;
    }
    protected function mul(){
        return $this->firstNumber * $this->secondNumber;
    }
    protected function div(){
        return $this->firstNumber / $this->secondNumber;
    }
    protected function rem(){
        return $this->firstNumber % $this->secondNumber;
    }


    private function two(){
        echo 'Private Function';
    }

}