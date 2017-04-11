<?php
/**
 * Created by PhpStorm.
 * User: systemfailure
 * Date: 05.04.17
 * Time: 17:12
 */

namespace BotClass;

use Psr\Log\InvalidArgumentException;

class Bot
{
    protected $accesstoken = null;

    public function __construct($token = null)
    {
        $this->accesstoken = isset($token) ? $token : getenv("TOKEN");
    }

    public function getMe()
    {
        return (new Update)->getUpdates("getMe");
    }

    public function sendMessage($chat_id, $message, $reply, $parse_mode, $preview, $replyMarkup)
    {
        return (new Update)->sendMessage($params = [
            "chat_id" => $chat_id,
            "message" => "$message",
            "reply" => "$reply",
            "parse_mode" => $parse_mode,
            "preview" => $preview,
            "markup" => $replyMarkup,
        ]);
    }
}
