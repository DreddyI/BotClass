<?php
/**
 * Created by PhpStorm.
 * User: systemfailure
 * Date: 05.04.17
 * Time: 17:34
 */

namespace BotClass;

use Couchbase\Exception;
use GuzzleHttp\Client;

/**
 * Class Api
 * @package BotClass
 */
class Api
{
    public $updatetype;
    public static $url = "https://api.telegram.org/bot";


    /**
     * @return User
     */
    public function getMe(){
         $response = $this->post('getMe');
        return new User($response);
    }

    /**
     * @param $method
     * @param $arguments
     * @return \Psr\Http\Message\StreamInterface
     */
    public function __call($method, $arguments)
    {
        try {
            $client = new Client();
            $res = $client->request($method,self::$url.getenv("TOKEN")."/".$arguments[0]);
             return $res->getBody();
        } catch (RequestException $e) {
            return $e->getRequest();
            if ($e->hasResponse()) {
                return $e->getResponse();
            }
        }
    }
}
