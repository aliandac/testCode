<?php


namespace App\Policies\Demand;


use App\Models\Request;
use App\User;

/**
 * Class DemandPolicyHelper
 * @package App\Policies\Demand
 */
class DemandPolicyHelper
{


    /**
     * @param User $user
     * @param $demandId
     * @return bool
     */
    static function userCanChangeDemand(User $user, $demandId)
    {
        if ($user->isAdmin())
            return true;

        $userId = Request::findOrFail($demandId)->company()->first()->user_id;

        if ($user->id == $userId)
            return true;


        return false;
    }
}
