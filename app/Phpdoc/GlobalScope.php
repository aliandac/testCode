<?php


namespace App\Phpdoc;


use Illuminate\Database\Query\Builder;

/**
 * Interface GlobalScope
 * @package App\Phpdoc
 *
 */
interface GlobalScope
{

    /**
     * @param string $globalScopeClassWithNamespace
     * @return mixed
     */
    static function withoutGlobalScope(string  $globalScopeClassWithNamespace);
}
