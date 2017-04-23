<?php
/**
 * Created by PhpStorm.
 * User: systemfailure
 * Date: 05.04.17
 * Time: 17:12
 */

namespace BotClass;


/**
 * Class Bot
 * @package BotClass
 */
class Bot
{
    protected $accesstoken;

    public function __construct($token = null)
    {
        $this->accesstoken = isset($token) ? $token : getenv("TOKEN");
    }

    /**
     * @return User
     * by default return only a username;
     */
    public function getMe()
    {
        return (new Api())->getMe();
    }

    public function getUpdate()
    {
        return (new Api())->getUpdate();
    }
}
