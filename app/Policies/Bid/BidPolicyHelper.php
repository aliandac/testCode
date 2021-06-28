<?php


namespace App\Policies\Bid;


use App\Models\Bid;
use App\User;

/**
 * Class BidPolicyHelper
 * @package App\Policies\Bid
 */
class BidPolicyHelper
{


    /**
     * @param User $user
     * @param $bidId
     * @return bool
     */
    static function userCanChangeBid(User $user,$bidId)
    {
        if ($user->isAdmin())
            return true;

        $userId = Bid::findOrFail($bidId)->company()->first()->user_id;

       return (bool) ($user->id == $userId);


    }
}
