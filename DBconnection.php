<?php
class DBconnection{
    private static $pdo;
    public static function make(){
        
        try{ 
            self::$pdo=self::$pdo ? :new pdo("mysql:host=localhost;dbname=php_basics;charset=utf8",'root','haiderrazaq');
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

}
DBconnection::make();




?>