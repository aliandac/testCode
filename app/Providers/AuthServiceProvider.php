<?php

namespace App\Providers;

use App\Policies\UserPolicy;
use App\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

/**
 * Class AuthServiceProvider
 * @package App\Providers
 */
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         User::class => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('create','App\Policies\UserPolicy@create');
        Gate::define('view','App\Policies\UserPolicy@view');
        Gate::define('delete','App\Policies\UserPolicy@delete');
        Gate::define('view-bidding-button','App\Policies\UserPolicy@viewBiddingSendButton');
        Gate::define('can-company-edit','App\Policies\UserPolicy@canCompanyEdit');
        Gate::define('change-bid','App\Policies\UserPolicy@canBidEdit');
        Gate::define('change-demand','App\Policies\UserPolicy@canDemandEdit');
        Gate::define('can-new-blog-edit','App\Policies\UserPolicy@canNewBlogEdit');
        Gate::define('can-company-event-edit','App\Policies\UserPolicy@canCompanyEventEdit');
        Gate::define('is-admin','App\Policies\UserPolicy@isAdmin');
        Gate::define('user-can-delete-blog','App\Policies\UserPolicy@canDeleteBlog');
        Gate::define('user-can-edit-blog','App\Policies\UserPolicy@canChangeBlog');
        Gate::define('change-activity','App\Policies\UserPolicy@canChangeActivity');
        Gate::define('delete-machine','App\Policies\UserPolicy@deleteMachineByUser');
    }
}
