<?php
/**
 * Created by PhpStorm.
 * User: systemfailure
 * Date: 23.04.17
 * Time: 11:34
 */

namespace BotClass;


class Update
{
    public $update_id;
    public $message;
    public $user_id;
    public $first_name;
    public $username;
    public $date;

    public function __construct($response)
    {
        $output = \GuzzleHttp\json_decode($response,TRUE);
        var_dump($output['result']['0']);
        $this->update_id = $output['result']['0']['update_id'];
        $this->message = $output['result'][0]['message']['text'];
        $this->user_id = $output['result'][0]['message']['from']['id'];
        $this->first_name = $output['result'][0]['message']['from']['first_name'];
        $this->username = $output['result'][0]['message']['from']['username'];
        $this->date = $output['result'][0]['message']['date'];
//        echo $this->user_id; //TODO do something with that;
    }
    public function __toString():string
    {
        return $this->message;
    }
}