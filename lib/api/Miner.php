<?php

namespace ethermine\api;

/**
 * Class Miner
 */
class Miner
{
    /**
     * Miner address
     * @var
     */
    private $miner;

    /**
     * @var
     */
    private $endPoint;

    public function __construct($miner, $endPoint)
    {
        $this->miner = $miner;
    }

    public function dashboard()
    {
        return 'dashboard';
    }

    public function history()
    {
        return 'history';
    }

    public function payouts()
    {
        return 'payouts';
    }

    public function round()
    {
        return 'round';
    }

    public function settings()
    {
        return 'settings';
    }

    public function statistics()
    {
        return 'statistics';
    }
}