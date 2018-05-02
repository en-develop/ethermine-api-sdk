<?php

namespace ethermine\api;

/**
 * Class Pool
 */
class Pool extends HttpApi
{
    /**
     * Pool constructor.
     * @param $endPointUrl
     */
    public function __construct($endPointUrl)
    {
        $this->endPointUrl = $endPointUrl;
    }

    /**
     * @return mixed
     */
    public function basicPoolStats()
    {
        return $this->get('/poolStats');
    }

    /**
     * @return mixed
     */
    public function minedBlockStats()
    {
        return $this->get('/blocks/history');
    }

    /**
     * @return mixed
     */
    public function networkStatistics()
    {
        return $this->get('/networkStats');
    }

    /**
     * @return mixed
     */
    public function serverHashrateStats()
    {
        return $this->get('/servers/history');
    }
}