<?php
    spl_autoload_register(function($class){
        $class = str_replace('_', '/', $class);
        require_once(ROOT_DIR.'inc/classes/'.$class.'.php');
    });

    require_once(ROOT_DIR.'inc/vendors/loader.php');
