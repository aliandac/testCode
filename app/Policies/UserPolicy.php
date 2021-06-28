<?php

namespace App\Policies;

use App\Models\Company\Company;
use App\Policies\Bid\BidPolicyHelper;
use App\Policies\Blog\BlogPolicyHelper;
use App\Policies\Company\CompanyEventPolicyHelper;
use App\Policies\Company\CompanyPolicyHelper;
use App\Policies\Demand\DemandPolicyHelper;
use App\Policies\Machine\MachineDeletePolicy;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {


        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @return mixed
     */
    public function view(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param User $model
     * @return mixed
     */
    public function update(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param User $model
     * @return mixed
     */
    public function delete(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param User $model
     * @return mixed
     */
    public function restore(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param User $model
     * @return mixed
     */
    public function forceDelete(User $user, User $model)
    {
        //
    }

    function viewBiddingSendButton(User $user, Company $company)
    {

        return true;
    }

    /**
     * @return bool
     */
    function isAdmin()
    {
        return User::find(Auth::id())->hasRole('admin');
    }


    /**
     * @param User $user
     * @param $companyId
     * @return bool
     *
     */
    function canCompanyEdit(User $user, $companyId)
    {
        return CompanyPolicyHelper::userCanChangeCompany($user, $companyId);
    }


    /**
     * @param User $user
     * @param $bidId
     * @return bool
     *
     */
    function canBidEdit(User $user, $bidId)
    {
        return BidPolicyHelper::userCanChangeBid($user, $bidId);
    }

    function canChangeBid(User $user, $bidId)
    {
        return BidPolicyHelper::userCanChangeBid($user, $bidId);
    }

    /**
     * @param User $user
     * @param $demandId
     * @return bool
     *
     */
    function canDemandEdit(User $user, $demandId)
    {
        return DemandPolicyHelper::userCanChangeDemand($user, $demandId);
    }

    /**
     * @param User $user
     * @param $newBlogId
     * @return bool
     *
     */
    function canNewBlogEdit(User $user, $blogId)
    {
        return BlogPolicyHelper::userCanChangeBlog($user, $blogId);
    }

    /**
     * @param User $user
     * @param $companyEventId
     * @return bool
     *
     */
    function canCompanyEventEdit(User $user, $companyEventId)
    {
        return CompanyEventPolicyHelper::userCanChangeEvent($user, $companyEventId);
    }

    /**
     * @param User $user
     * @param $blogId
     * @return bool
     */
    function canDeleteBlog(User $user, $blogId)
    {
        return BlogPolicyHelper::userCanChangeBlog($user, $blogId);
    }


    /**
     * @param User $user
     * @param $blogId
     * @return bool
     *
     */
    function canChangeBlog(User $user, $blogId)
    {
        return BlogPolicyHelper::userCanChangeBlog($user, $blogId);
    }


    function canChangeActivity(User $user, $activityId)
    {

    }

    public function deleteMachineByUser(User $user , $machineId)
    {
        return new MachineDeletePolicy( $user , $machineId );
    }

    /**
     * @param User $user
     * @param $companyId
     * @return bool
     *
     */
    function canChangeCompany(User $user, $companyId)
    {
        return CompanyPolicyHelper::userCanChangeCompany($user, $companyId);
    }
}
