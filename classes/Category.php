<?php

require_once('../config.php');
require_once('../utility.php');

/**
*
*/
class Category
{
    protected $conn = null ;
    
    function __construct( $config )
    {
        try{

            $conn = new PDO("mysql:host=".$config['server'].";dbname=".$config['db']."", $config['user'], $config['pass']);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Success!";
        } catch ( PDOException $e ) {
            echo $e->getMessage();
        }
    }


    function __destruct(){
        $conn = null ;
    }

}
/*
var_dump($config);
$user = new Category( $config );
echo "yay";
*/
?>