<?php

namespace ethermine\api;

/**
 * Class Miner
 */
class Miner extends HttpApi
{
    /**
     * Miner address
     * @var
     */
    private $miner;

    public function __construct($miner, $endPointUrl)
    {
        $this->miner = $miner;
        $this->endPointUrl = $endPointUrl;
    }

    /**
     * @return string
     */
    public function dashboard()
    {
        $url = sprintf('/miner/%s/dashboard/', $this->miner);

        return $this->get($url);
    }

    /**
     * @return mixed
     */
    public function history()
    {
        $url = sprintf('/miner/%s/history', $this->miner);

        return $this->get($url);
    }

    /**
     * @return mixed
     */
    public function payouts()
    {
        $url = sprintf('/miner/%s/payouts/', $this->miner);

        return $this->get($url);
    }

    /**
     * @return mixed
     */
    public function rounds()
    {
        $url = sprintf('/miner/%s/rounds/', $this->miner);

        return $this->get($url);
    }

    /**
     * @return mixed
     */
    public function settings()
    {
        $url = sprintf('/miner/%s/settings/', $this->miner);

        return $this->get($url);
    }

    /**
     * @return mixed
     */
    public function statistics()
    {
        $url = sprintf('/miner/%s/currentStats/', $this->miner);

        return $this->get($url);
    }
}
