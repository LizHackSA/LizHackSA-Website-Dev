<?php

    $request = $_SERVER['REQUEST_URI'];
    
    switch($request){
        // if the is an '/'
        case'/':
            require 'index.html';
            break;
    
        // if the is no '/'
        case'':
            require 'index.html';
            break;
    
        // if page is not found
        default:
            require '404page.html';
        break;
    }

?>