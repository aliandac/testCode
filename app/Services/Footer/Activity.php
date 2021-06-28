<?php


namespace App\Services\Footer;


use App\Models\Company\CompanyEvent;
use Carbon\Carbon;
use Illuminate\Support\Collection;

/**
 * Class Activity
 * @package App\Models\Modelhelpers\Activity
 */
class Activity
{
    /**
     * @param int|null $count
     * @return Collection
     *
     */
    static function ofWeek(int $count=null)
    {

        $now =  Carbon::now();
        $end=date('Y-m-d',strtotime('+7 days'));
        return CompanyEvent::whereBetween('date', [$now, $end])
            ->take($count)->get();
    }
}
