<?php

namespace ethermine\api;

/**
 * Class Worker
 */
class Worker extends HttpApi
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
    public function allWorkerStatistics()
    {
        $url = sprintf('/miner/%s/workers', $this->miner);

        return $this->get($url);
    }

    /**
     * @param $worker
     * @return string
     */
    public function individualHistoricalWorkerStatistics($worker)
    {
        $url = sprintf('/miner/%s/worker/%s1/history', $this->miner, $worker);

        return $this->get($url);
    }

    /**
     * @param $worker
     * @return string
     */
    public function individualWorkerStatistics($worker)
    {
        $url = sprintf('/miner/%s/worker/%s1/currentStats', $this->miner, $worker);

        return $this->get($url);
    }

    /**
     * @return string
     */
    public function workerMonitoring()
    {
        $url = sprintf('/miner/%s/workers/monitor', $this->miner);

        return $this->get($url);
    }
}