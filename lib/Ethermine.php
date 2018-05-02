<?php

namespace ethermine;

use ethermine\api\Miner;
use ethermine\api\Pool;
use ethermine\api\Worker;

/**
 * Class EthermineApi
 */
class Ethermine
{
    /**
     * Miner address
     * @var
     */
    private $miner;

    /**
     * @var
     */
    private $endPointUrl;

    public function __construct($miner, $endPointUrl = 'https://api.ethermine.org')
    {
        $this->miner = $miner;
        $this->endPointUrl = $endPointUrl;
    }

    /**
     * @return Pool
     */
    public function pool()
    {
        return new Pool($this->endPointUrl);
    }

    /**
     * @return Worker
     */
    public function worker()
    {
        return new Worker($this->miner, $this->endPointUrl);
    }

    /**
     * @return Miner
     */
    public function miner()
    {
        return new Miner($this->miner, $this->endPointUrl);
    }
}