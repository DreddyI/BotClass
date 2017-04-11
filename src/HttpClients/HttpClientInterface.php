<?php
/**
 * Created by PhpStorm.
 * User: systemfailure
 * Date: 11.04.17
 * Time: 17:24
 */

namespace BotClass;

/**
 * Interface HttpClientInterface.
 */
interface HttpClientInterface
{
    /**
     * @param            $url
     * @param            $method
     * @param array      $headers
     * @param array      $options
     * @param int        $timeOut
     * @param bool|false $isAsyncRequest
     * @param int        $connectTimeOut
     *
     * @return mixed
     */
    public function send(
        $url,
        $method,
        array $headers = [],
        array $options = [],
        $timeOut = 30,
        $isAsyncRequest = false,
        $connectTimeOut = 10
    );
}
