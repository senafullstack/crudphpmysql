<?php
namespace classes;
use mysqli;
abstract Class Conexao{
    public static  $connection=null;
    
    public static function  get_conexao(){
    try {
        self::$connection = new mysqli("localhost", "root", "", "crudphpmysql");
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
        exit();
    } finally {
        
    }

     return self::$connection;
    }
}
    


