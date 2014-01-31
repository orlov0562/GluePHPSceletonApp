<?php

    require_once(ROOT_DIR.'inc/loader.php');

    set_exception_handler(function($e){
        die($e->getMessage().'<hr>'.'<pre>'.$e->getTraceAsString().'</pre>');
    });

    header('Content-Type: text/html; charset=utf-8');    