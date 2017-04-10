<?php
/**
 * Created by PhpStorm.
 * User: systemfailure
 * Date: 05.04.17
 * Time: 17:02
 */
require("vendor/autoload.php");


$bot = new \BotClass\Bot("123");
//echo $bot->getMe();
//$bot->sendMessage("123","123","html","false","disable","null");

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

var_dump($_ENV);