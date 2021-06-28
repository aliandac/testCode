<?php


namespace App\Policies\Blog;


use App\Models\Blog as BlogModel;
use App\User;
use App\Scopes\ActiveScope;

/**
 * Class Blog
 * @package App\Policies\Blog
 */
class BlogPolicyHelper
{
    /**
     *
     * user check has permission edit delete remove update
     * @param User $user
     * @param $blogId
     * @return bool
     *
     */
    static function userCanChangeBlog(User $user, $blogId)
    {
        if ($user->isAdmin())
            return true;

        $blog = BlogModel::withoutGlobalScope(ActiveScope::class)->findOrFail($blogId);
        $company_id = $blog->company_id;
        if($user->company == null){
            return false;
        }else{
        return ( $user->company->id == $company_id );
        }
    }
}
