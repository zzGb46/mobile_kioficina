<?php

//Definir uma url base
define('BASE_URL','http://localhost/kioficina-app/public/');

spl_autoload_register(function($class){
if(file_exists('../app/controllers/'.$class.'.php')){
    require_once '../app/controllers/'.$class.'.php';
}

if(file_exists('../rotas/'.$class.'.php')){
    require_once '../rotas/'.$class.'.php';
}
});