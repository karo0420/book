<?php

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

require 'vendor/autoload.php';

set_exception_handler(function(Exception $e) {
    $log = new Logger('HAM');
    $log->pushHandler(new StreamHandler(__DIR__.'/my_app.log', Logger::DEBUG));

    $log->error($e->getMessage(), ['code'=> $e->getCode()]);
    echo $e->getMessage();
});

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    var_dump(func_get_args());
});


$whoops = new Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


$dsn = 'mysql:host=127.0.0.1;dbname=test;charset=utf8';
$pdo = new PDO($dsn, 'root', '');

//restore_exception_handler();

//trigger_error('error');
