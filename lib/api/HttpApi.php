<?php

namespace ethermine\api;

/**
 * Class HttpApi
 * @package ethermine\api
 */
class HttpApi
{
    /**
     * @var
     */
    public $endPointUrl;

    /**
     * @param $url
     * @param bool $asArray
     * @return mixed
     */
    public function get($url, $asArray = true)
    {
        $url =  $this->endPointUrl . $url;

        return json_decode(
            file_get_contents($url),
            $asArray
        );
    }
}