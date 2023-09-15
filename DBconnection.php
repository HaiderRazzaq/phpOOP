<?php
class DBconnection
{
    private static $pdo;
    private static $dbname = 'php_basics';
    private static $user = 'root';
    private static $password = 'haiderrazaq';
    public static function make()
    {
        $dbname = self::$dbname;
        $user = self::$user;
        $password = self::$password;
        try {
            self::$pdo = self::$pdo ?: new pdo("mysql:host=localhost;dbname=$dbname;charset=utf8", $user, $password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
DBconnection::make();
