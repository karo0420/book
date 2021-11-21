<?php



try {
    $dsn = 'mysql:host=127.0.0.1;dbname=test;port=3306;charset=utf8';
    $pdo = new PDO($dsn, 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage();
}