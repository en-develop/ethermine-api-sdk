<?php

namespace ethermine\api;

/**
 * Class Worker
 */
class Worker
{
    /**
     * Miner address
     * @var
     */
    private $miner;

    private $endPoint;

    public function __construct($miner, $endPoint)
    {
        $this->miner = $miner;
    }

    /**
     * @return string
     */
    public function allWorkerStatistics()
    {
        return 'allWorkerStatistics';
    }

    /**
     * @param $worker
     * @return string
     */
    public function individualHistoricalWorkerStatistics($worker)
    {
        return 'individualHistoricalWorkerStatistics: ' . $worker;
    }

    /**
     * @param $worker
     * @return string
     */
    public function individualWorkerStatistics($worker)
    {
        return 'individualHistoricalWorkerStatistics: ' . $worker;
    }

    /**
     * @return string
     */
    public function workerMonitoring()
    {
        return 'workerMonitoring';
    }
}