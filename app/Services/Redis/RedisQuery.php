<?php

namespace App\Services\Redis;

use Illuminate\Support\Facades\Redis;

abstract class RedisQuery
{
    private $redis , $model;
    
    public function __construct()
    {
        $this->redis = Redis::connection();
    }

    public function exists($key)
    {
        return (bool)$this->redis->exists($key);
    }

    public function get($key)
    {
        return unserialize($this->redis->get($key));
    }

    public function set( $key , $value)
    {
        $this->redis->set( $key , $value );
    }

    public function destroy($key)
    {
        $this->redis->del($key);
    }
}
