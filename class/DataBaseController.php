<?php

class DataBaseController
{

    private $PDOInstance = null;
    private static $instance = null;

    const DEFAULT_SQL_USER = 'damien';
    const DEFAULT_SQL_HOST = 'localhost';
    const DEFAULT_SQL_PASS = 'dada';
    const DEFAULT_SQL_DTB = 'users';


    private function __construct()
    {
        $this->PDOInstance = new PDO('mysql:dbname='.self::DEFAULT_SQL_DTB.';host='.self::DEFAULT_SQL_HOST,self::DEFAULT_SQL_USER ,self::DEFAULT_SQL_PASS);
    }


    public static function getInstance()
    {
        if(is_null(self::$instance))
        {
            self::$instance = new DataBaseController();
        }
        return self::$instance;
    }


    public function query($query)
    {
        return $this->PDOInstance->query($query);
    }

    public function createUser($username,$password){

        $stmt = $this->PDOInstance->prepare("INSERT INTO `users`.`datausers` (`id`, `username`, `password`) VALUES (NULL,:username ,:password)");

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);

        return $stmt->execute();

    }

    public function connecteUser($username,$password){

        return $this->PDOInstance->query("SELECT * FROM `users`.`datausers` WHERE `username`='$username' AND `password`='$password';'");
    }

}
?>
