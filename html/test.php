<?php

$dsn = 'pgsql:dbname=postgres host=172.30.0.3 port=5432';
$user = 'postgres';
$password = 'postgres';

try{
    $dbh = new PDO($dsn, $user, $password);
    $sql = 'select * from test';
    foreach ($dbh->query($sql) as $row) {
        echo $row['name'] . ' ';
    }
}catch (PDOException $e){
    echo $e->getMessage() . PHP_EOL;
    die();
}
