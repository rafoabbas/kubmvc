<?php

$router->add('/',function (){

    return view('test');

});

$router->add('test','TestController@index');
