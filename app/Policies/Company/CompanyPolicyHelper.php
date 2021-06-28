<?php


namespace App\Policies\Company;


use App\Models\Company\Company;
use App\User;
use App\Scopes\ActiveScope;

/**
 * Class CompanyPolicyHelper
 * @package App\Policies\Company
 *
 */
class CompanyPolicyHelper
{

    /**
     * @param User $userw
     * @param $companyId
     * @return bool
     */
    static function userCanChangeCompany(User $user,$companyId)
    {
        if ($user->isAdmin())
            return true;

        return  (Company::withoutGlobalScope(ActiveScope::class)->findOrFail($companyId)->user_id == $user->id);


    }

}
