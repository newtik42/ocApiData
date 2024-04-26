<?php

spl_autoload_register(function ($class_name) {

    $classs = explode('\\', $class_name);

    if (current($classs) != 'NewTik')
        return;
    array_shift($classs);

    if (current($classs) == 'API') {
        array_unshift($classs, 'vendor');
    }
    
    if (current($classs) != 'ocApiData')
        return;
    array_shift($classs);

    include_once __DIR__ . '/src/'. (implode('/', $classs)) . '.php';
});
