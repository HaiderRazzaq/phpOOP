<?php
try{
    $pdo=new pdo("mysql:host=localhost;dbname=php_basics;charset=utf8",'root','haiderrazaq');
}catch(PDOException $e){
    echo $e->getMessage();
}




?>