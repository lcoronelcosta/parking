<?php
include_once('database.php');

// Define configuration
/*define("DB_HOST", "ec2-184-73-249-56.compute-1.amazonaws.com");
define("DB_USER", "aavqcdzrbgjasz");
define("DB_PASS", "b3a00eec85a40ca5bcb62bc71d0bb016f0cccdf03d8a1bcc7a3a1216c8204971");
define("DB_NAME", "d5sdev9a383nje");*/


define("DB_HOST", "localhost");
define("DB_USER", "postgres");
define("DB_PASS", "postgres");
define("DB_NAME", "parking");



class Collector extends database
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>