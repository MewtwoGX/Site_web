<?php
//--------- BDD ---------
class Database
{
  private static $host = 'localhost';
  private static $dbname = 'olivier';
  private static $Username = 'olivier';
  private static $Password = 'SSfoagny.88';
    
  private static $pdo = null;

  public static function connect()
  { 
        try 
        {
          self::$pdo =  new PDO( "mysql:host=".self::$host.";"."dbname=".self::$dbname, self::$Username, self::$Password);  
        }
        catch(PDOException $e) 
        {
          die($e->getMessage());  
        }
        return self::$pdo;
  } 
}
?>
