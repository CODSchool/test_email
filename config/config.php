<?php
$driver = "mysql";
$host = "localhost";
$db_name = "soon";
$db_user = "root";
$db_pass = "root";
$charset = "utf8";
$opt =   [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,];

try{
    $dsn = "mysql:host=$host;dbname=$db_name;charset=$charset";
    $pdo = new PDO($dsn, $db_user, $db_pass, $opt);
}catch (PDOException $i){
    echo $i->getMessage();;
}
// Проверка подключения
// $STH = $pdo->prepare("INSERT INTO soon_email ( email ) values ( 'ilia@gmail.com' )");  
// $STH->execute();

function insert($table, $params){
    global $pdo;
    $i = 0;
    $coll = '';
    $mask = '';
    foreach ($params as $kay => $value){
        if ($i === 0){
            $coll = $coll . "$kay";
            $mask = $mask . "'" ."$value" . "'";
        }else {
            $coll = $coll . ", $kay";
            $mask = $mask . ", '" ."$value" . "'";
        }
        $i++;
    }

    $sql = "INSERT INTO $table ($coll) VALUES ($mask)";

    $query = $pdo->prepare($sql);
    $query->execute();
    return $pdo->lastInsertId();
};