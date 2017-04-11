<?php
/**
 * Created by PhpStorm.
 * User: systemfailure
 * Date: 11.04.17
 * Time: 17:24
 */

namespace BotClass;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

class BotLogger
{
    public $logger = null;

    public function __construct($logger = null)
    {
        $this->logger = isset($logger) ? $logger : getenv("LOGGER");
        $logger = new Logger($this->logger);
        $logger->pushHandler(new StreamHandler(__DIR__.getenv("LOGGER_FILE"), Logger::DEBUG));
        $logger->pushHandler(new FirePHPHandler());
        //$logger->info('My logger is now ready'); //TODO Monolog doesn't work correctly in __construct method
    }
}