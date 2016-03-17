<?php

require_once('../config.php');
//require_once('../connect.php');

/**
*
*/
class Topic
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



}

/*
var_dump($config);
$user = new Topic( $config );
echo "yay";
*/
?>