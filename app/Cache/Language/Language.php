<?php


namespace App\Cache\Language;


use App\Cache\CacheInterface;

class Language implements CacheInterface
{

    private $key;


    private $ttl;


    /**
     * @return mixed
     */
    function get()
    {
        // TODO: Implement get() method.
    }

    /**
     * @return mixed
     */
    function save()
    {
        // TODO: Implement save() method.
    }

    /**
     * @return mixed
     */
    function fresh()
    {
        // TODO: Implement fresh() method.
    }

    /**
     * @return mixed
     */
    function delete()
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param $key
     * @param $value
     * @param null $ttl
     * @return mixed
     */
    function set($key, $value, $ttl = null)
    {
        // TODO: Implement set() method.
    }
}
