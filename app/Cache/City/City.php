<?php


namespace App\Cache\City;


use App\Cache\CacheInterface;
use App\Cache\Redis\Redis;
use Illuminate\Database\Query\Builder;
use Predis\Client;
use App\Models\City as CityModel;

class City implements CacheInterface
{

    /**
     * @var Client
     */
    private $redis;

    /**
     * @var string $key
     *
     */
    private $key = 'cities';

    /**
     * @var int $ttl 3 days
     */
    private $ttl = 604800;


    public function __construct()
    {
        $this->redis = Redis::make()->client();
    }

    /**
     * @return mixed
     */
    function get()
    {
        if (!$this->redis->exists($this->key))
            $this->save();

        return unserialize($this->redis->get($this->key));


    }

    /**
     * @return mixed
     *
     */
    function save()
    {
        $mysqlData = $this->fetchFromMysql();
        $serializeData = serialize($mysqlData);

        return $this->redis->set($this->key, $serializeData, 'EX', $this->ttl);

    }

    /**
     * @return mixed
     */
    function fresh()
    {
        $this->delete();
        $this->save();
    }

    /**
     * @return mixed
     */
    function delete()
    {
        return $this->redis->executeRaw(['del', $this->key]);
    }


    /**
     * @param $value
     * @param null $ttl
     * @return mixed|void
     *
     */
    function set($value, $ttl = null)
    {
        return $this->redis->set($this->key, serialize($value), 'EX', $ttl);
    }

    /**
     * @return CityModel|Builder
     */
    private function fetchFromMysql()
    {
        return CityModel::get();
    }

    /**
     * @param int $minute
     */
    public function addMinuteAsTtl(int $minute): void
    {
        $this->ttl = $minute*60;
    }


    /**
     * @param $hour
     * @return  void
     */
    function addHourAsTtl(int $hour)
    {
        $this->ttl=$hour*3600;
    }

    /**
     * @param int $day
     */
    function addDayAsTtl(int $day)
    {
        $this->ttl=$day*24*3600;
    }


}
