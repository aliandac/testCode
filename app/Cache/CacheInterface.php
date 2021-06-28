<?php


namespace App\Cache;


use App\Cache\Redis\Redis;
use App\Models\Category as CategoryModel;
use Predis\Client;

interface CacheInterface
{

    /**
     * @return mixed
     */
    function get();

    /**
     * @return mixed
     */
    function save();

    /**
     * @return mixed
     */
    function fresh();

    /**
     * @return mixed
     */
    function delete();

    /**
     * @param $key
     * @param $value
     * @param null $ttl
     * @return mixed
     */
    function set($value,$ttl=null);

}
