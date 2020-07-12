<?php
include_once "classes/simpleClass.classes.php";


$obj = new SimpleClass();
$obj->helloWorld();

//anonymous class

$newObj = new class(){
  public function helloWorld(){
    echo "hello Aya";
  }
};

$newObj->helloWorld();

 ?>
