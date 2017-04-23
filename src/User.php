<?php
/**
 * Created by PhpStorm.
 * User: systemfailure
 * Date: 23.04.17
 * Time: 8:56
 */

namespace BotClass;


/**
 * Class User
 * @package BotClass
 */
class User
{
    public $id;
    public $first_name;
    public $last_name;
    public $username;


    public function __construct($response)
    {
    $output = \GuzzleHttp\json_decode($response);
    $this->id         =  isset($output->result->id)? $output->result->id: null;
    $this->first_name =  isset($output->result->first_name)? $output->result->first_name: null;
    $this->last_name  =  isset($output->result->last_name)? $output->result->last_name: null;
    $this->username   =  isset($output->result->username)? $output->result->username: null;
    var_dump($output);
        echo isset($this->last_name);
    }

    /**
     * @return string
     */
    public function __toString():string
    {
    return $this->username;
    }

    public function __isset($property)
    {
       return isset($this->$property);
    }

}