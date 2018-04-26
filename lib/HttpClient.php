<?php

namespace ethermine;

use Psr\Http\Message\RequestInterface;
use GuzzleHttp\ClientInterface;

/**
 * Class HttpClient
 */
class HttpClient implements ClientInterface
{

    public function send(RequestInterface $request, array $options = [])
    {

    }


    public function sendAsync(RequestInterface $request, array $options = [])
    {

    }


    public function request($method, $uri = null, array $options = [])
    {

    }

    public function requestAsync($method, $uri, array $options = [])
    {

    }

    public function getConfig($option = null)
    {

    }
}