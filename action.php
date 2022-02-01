<?php

require_once 'vendor/autoload.php';
use App\classes\Calculator;

if (isset($_POST['btn'])){
    $cal = new Calculator($_POST);
    $res = $cal -> index();
    include 'index.php';
}else{
    header('Location: index.php');
}
