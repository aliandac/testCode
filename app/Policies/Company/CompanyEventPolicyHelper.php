<?php


namespace App\Policies\Company;

use App\Models\Company\CompanyEvent;
use App\User;
use App\Scopes\ActiveScope;

/**
 * Class CompanyEventPolicyHelper
 * @package App\Policies\Blog
 */
class CompanyEventPolicyHelper
{


    /**
     * @param User $user
     * @param $id
     * @return bool
     */
    static function userCanChangeEvent(User $user, $id)
    {
        if ( $user->isAdmin() )
            return true;

        $event = CompanyEvent::withoutGlobalScope(ActiveScope::class)->findOrFail($id);
        
        if ( $user->company->id == $event->company_id)
            return true;

        return false;
    }
}
