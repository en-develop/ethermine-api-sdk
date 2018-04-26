<?php

namespace ethermine\api;

/**
 * Class Pool
 */
class Pool
{
    private $endPointUrl;

    public function __construct($endPointUrl)
    {
        $this->endPointUrl = $endPointUrl;
    }

    /**
     *
     */
    public function basicPoolStats()
    {
        return 'basicPoolStats';
    }

    public function minedBlockStats()
    {
        return 'minedBlockStats';
    }

    public function networkStatistics()
    {
        return 'networkStatistics';
    }

    public function serverHashrateStats()
    {
        return 'serverHashrateStats';
    }
}