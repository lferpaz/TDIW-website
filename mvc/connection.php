<?php 
/*Para la coneccion de la base de datos, se hace uso de la clase PDO
mas info -> https://www.php.net/manual/es/class.pdo.php 
*/
Class Database{
    private static $dbconnect = NULL;
    private function _construct (){}
    private function __clone(){}
    public static function getConnect(){
        if(!isset(self::$dbconnect)){
            $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
				self::$dbconnect= new PDO('mysql:host=localhost;dbname=padelstore','root','',$pdo_options);
               // echo "Connected successfully";
        }
        return self::$dbconnect;
    }
}
//$db=Database::getConnect('root','','localhost','padelstore');
?>