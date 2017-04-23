<?php
/**
 * Created by PhpStorm.
 * User: systemfailure
 * Date: 05.04.17
 * Time: 17:02
 */
require("vendor/autoload.php");

$env = new Dotenv\Dotenv(__DIR__);
$env->load();
try{
    $bot = new BotClass\Bot();
    echo $bot->getUpdate()->message; //TODO rework this
}catch(Exception $e){
    echo $e->getMessage();
}

