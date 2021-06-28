<?php


namespace App\Calendar\Month;


/**
 * Class MonthName
 * @package App\Calendar\Month
 */
class MonthName
{


    /**
     * @param array $monthArrayAsInt
     * @return array
     */
    function get(array $monthArrayAsInt)
    {
        return array_map([$this, 'mapper'], $monthArrayAsInt);
    }


    /**
     * @param $index
     * @return mixed
     */
    function mapper($index)
    {
        return Month::MONTH_NAMES[$index - 1];
    }
}
