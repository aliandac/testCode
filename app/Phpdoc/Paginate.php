<?php


namespace App\Phpdoc;


use App\Providers\AppServiceProvider;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

/**
 * normally there is no paginate method in the collection, but the AppServiceProvider provider creates it for which data
 * be careful just work in AppServiceProvider
 * Interface Paginate
 * @package App\Phpdoc
 */
interface Paginate
{

    /**
     * create custom paginate with macro
     * @see AppServiceProvider::boot()
     * @param int $perCount
     * @return LengthAwarePaginator
     */
    function paginate(int $perCount);
}
