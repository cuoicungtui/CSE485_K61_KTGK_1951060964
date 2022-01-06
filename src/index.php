<?php
    $controller = isset($_GET['controller']) ? $_GET['controller'] : 'user';
    $acction = isset($_GET['acction']) ? $_GET['acction'] : 'index';

    //http://localhost/CSE485_K61_KTGK_1951060964/src/index.php

    $controller = ucfirst($controller);
    $filecontroller = $controller.'controller.php';
    $pathcontroller = 'controllers/'.$filecontroller;
   
    if(!file_exists($pathcontroller))
        die($pathcontroller.'không tồn tại');

    require_once $pathcontroller;
    $classcontroller = $controller.'Controller';
        $User = new $classcontroller();

     if(!method_exists($User,$acction))
         die("kho tim thấy acction $acction");

     $User->$acction();
    
?>