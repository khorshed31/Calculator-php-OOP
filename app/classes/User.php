<?php


namespace App\classes;


class User
{
    public $city = 'Dhaka';
    protected $country = 'Bangladesh';
    private $area = 'Karwanbazar';

    public function login(){
        echo 'LogIn';
    }

    protected function logout(){
        echo "LogOut";
    }

    private function profile(){
        echo "Profile";
    }
}