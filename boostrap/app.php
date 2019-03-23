<?php


require_once '../vendor/autoload.php';

$app = new \Kubpro\Framework\Foundation\Application(
    dirname(__DIR__)
);

$app->register('env');
$app->register('woop');
$app->register('database');

$router = new Kubpro\Framework\Routing\Router();

include_once "../routes/web.php";

$router->dispatch($_SERVER['QUERY_STRING']);



