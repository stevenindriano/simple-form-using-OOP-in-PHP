<?php
spl_autoload_register(function ($class){
    $class = explode('\\', $class);
    $class = end($class);
    require_once "Magister/" . $class . ".php";
    require_once "Sarjana/" . $class . ".php";
});