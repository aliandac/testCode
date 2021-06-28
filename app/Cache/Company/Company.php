<?php


namespace App\Cache\Company;

use App\Cache\CacheInterface;
use App\Cache\Redis\Redis;
use Predis\Client;
use App\Models\Company\Company as CompanyModel;

/**
 * Class Category
 * @package App\Cache\Category
 */
class Company implements CacheInterface
{
    /**
     * @var Client
     */
    private $redis;

    /**
     * @var string $key
     *
     */
    private $key = 'companies';

    /**
     * @var int $ttl 3 days
     */
    private $ttl = 259200;

    /**
     * Category constructor.
     */
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

        return $this->fetch();

    }

    /**
     * @return mixed
     */
    private function fetch()
    {
        return unserialize($this->redis->get($this->key));
    }


    /**
     *
     */
    function save()
    {
        $this->redis->set($this->key, $this->getFromMysqlAndSerialize(), 'EX', $this->ttl);
    }


    /**
     * @return string
     */
    private function getFromMysqlAndSerialize()
    {
        return serialize(CategoryModel::get());
    }


    /**
     *
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
    function set($value,$ttl=null)
    {
        $this->redis->set($this->key,serialize($value),'EX',$ttl);
    }
}
