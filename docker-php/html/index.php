<?php

sleep(1);

$dsn = 'mysql:dbname=sample_db;host=db';
$user = 'sample_user';
$password = 'dbpass';

try {
    $dbh = new PDO($dsn, $user, $password);
    $sql = 'SELECT version()';
    $prepare = $dbh->prepare($sql);
    $prepare->execute();
    $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result);
} catch (PDOException $e) {
    exit();
}

sleep(1);

