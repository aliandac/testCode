<?php


namespace App\Cache\Redis;

use Illuminate\Support\Facades\Redis as LRedis;

/**
 * Class Redis
 * @package App\Cache\Redis
 */
class Redis
{

    private $redis;

    /**
     * Redis constructor.
     */
    public function __construct()
    {
        $this->redis = LRedis::connection();
    }

    /**
     * @return Redis
     */
    static  function make()
    {
        return new self();
    }

    /**
     * @return Client
     *
     */
    function client()
    {
        return $this->redis;
    }

}
