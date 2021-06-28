<?php

namespace App\Services\Redis;

class Redis extends RedisQuery
{
    private $redis;

    public function insert($object)
    {
        $this->create($object);
    }
}
