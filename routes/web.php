<?php

$router->add('/',function (){

    return view('welcome');

});

$router->add('test','HomeController@index');
