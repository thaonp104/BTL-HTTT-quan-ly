<?php
session_start();
//include("config.php");
//include("model/model.php");
//$controller=isset($_GET["controller"])?$_GET["controller"]:"";
//if($controller != "")
//    $controller="controller/frontend/controller_$controller.php";
//else
//    $controller ="controller/frontend/controller_home.php";
//if(file_exists($controller))
//    include("frontend/master2.blade.php");
//else
//    include("frontend/master1.blade.php");
?>
{{--@include('customer.layouts.main')--}}
@include('customer.frontend.master1')
{{--@include('customer.frontend.master2')--}}
