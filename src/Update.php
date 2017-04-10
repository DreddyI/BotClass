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

class Update
{
    public $update;
    public static $url = "http://api.telegram.org/bot281890161:AAFvdyIBxkvfwG-8P18vh2DK6uXaldh5hKQ/";


    public function getUpdates($method)
    {
        $client = new \GuzzleHttp\Client();
        try {
            $res = $client->request('GET', self::$url . $method);
            if ($res->getStatusCode() == "200") {
                return $res->getBody();
            } else {
                throw new \Exception("StatusCode != 200 aborting");
            }
        } catch (Exception $e) {
            return "Exception $e->getMessage()";
        }
    }

    public function sendMessage(array $params)
    {
        $chat_id = $params["chat_id"];
        $message = $params["message"];
        $parse_mode = $params["parse_mode"];
        $preview = $params["preview"];
        $reply = $params["reply"];
        $markup = $params["markup"];

        $client = new \GuzzleHttp\Client();
        $url = self::$url . "sendMessage?chat_id={$chat_id}&text={$message}&parse_mode={$parse_mode}&disable_web_page_preview={$preview}&reply_to_message_id={$reply}&markup={$markup}";
        try {
            $res = $client->request('GET', $url);
        } catch (Exception $e) {
            return "Exception $e->getMessage()";
        }
        if ($res->getStatusCode() == "200") {
            echo date('H:i:s') . " [SendMessage] $chat_id $message ";
            return $res->getBody();
        }
    }
}