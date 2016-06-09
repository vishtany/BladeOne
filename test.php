<?php
/**
 * Copyright (c) 2016 Jorge Patricio Castro Castillo MIT License.
 */
include "BladeOne.php";

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade=new BladeOne($views,$cache);

//<editor-fold desc="Example data">
$name="New User";
$records=array(1,2,3);
$users=array();
$usr=new stdClass();
    $usr->id=1;
    $usr->name="John Doe";
    $usr->type=1;
    $usr->number=1;
$users[]=$usr;
$usr=new stdClass();
    $usr->id=2;
    $usr->name="Anna Smith";
    $usr->type=2;
    $usr->number=5;
$users[]=$usr;
//</editor-fold>


echo $blade->run("hello2"
    ,["name"=>"hola mundo"
    ,'records'=>$records
    ,'users'=>$users]
    ,true);