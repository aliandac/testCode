<?php

namespace App\Http;

use App\Http\Middleware\Api\ProductUpdate;
use App\Http\Middleware\Api\UserToken;
use App\Http\Middleware\CustomAuthMiddleware;
use App\Http\Middleware\Franchising\UserCanFranchisingMilddleware;
use App\Http\Middleware\PayTrHashCheckMiddleware;
use App\Http\Middleware\UserCanBidMiddleware;
use App\Http\Middleware\UserCanChangeBidMiddleware;
use App\Http\Middleware\UserCanChangeCompanyMiddleware;
use App\Http\Middleware\UserCanCompanyEditMiddleware;
use App\Http\Middleware\UserCanCompanyEventMiddleware;
use App\Http\Middleware\UserCanDeleteBlogMiddleware;
use App\Http\Middleware\UserCanDemandMiddleware;
use App\Http\Middleware\UserCanNewBlogMiddleware;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \App\Http\Middleware\TrustProxies::class,
        \App\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \Illuminate\Session\Middleware\StartSession::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            // \Illuminate\Session\Middleware\StartSession::class,
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
        'franchising' => [
            // \Illuminate\Session\Middleware\StartSession::class,
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            \App\Http\Middleware\SetLanguage::class,
        ],
        'admin' => [
            // \Illuminate\Session\Middleware\StartSession::class,
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        'AuthorityAdmin' => \App\Http\Middleware\Admin::class,
        'can_edit_company' => UserCanCompanyEditMiddleware::class,
        'can_edit_bid' => UserCanBidMiddleware::class,
        'can_edit_demand' => UserCanDemandMiddleware::class,
        'can_new_blog' => UserCanNewBlogMiddleware::class,
        'can_company_event' => UserCanCompanyEventMiddleware::class,
        'user_can_delete_blog' => UserCanDeleteBlogMiddleware::class,
        'user_can_change_bid' => UserCanChangeBidMiddleware::class,
        'can-company-edit' => UserCanChangeCompanyMiddleware::class,
        'pay_tr_hash_check' => PayTrHashCheckMiddleware::class,
        'auth.custom' => CustomAuthMiddleware::class,
        'Franchising' => UserCanFranchisingMilddleware::class,
        'company-statistics' => \App\Http\Middleware\Company\StatisticsMiddleware::class,
        'website-buying' => \App\Http\Middleware\Website\WebsiteBuyingMiddleware::class,
        'showing-bid' => \App\Http\Middleware\Bid\BidMiddleware::class,
        'demand' => \App\Http\Middleware\Demand\DemandMiddleware::class,
        'statistics' => \App\Http\Middleware\Company\StatisticsMiddleware::class,
        'create-company' => \App\Http\Middleware\Company\HasCompanyAsInactive::class,
        'has-company' => \App\Http\Middleware\Company\HasCompanyAsActive::class,
        'delete-control' => \App\Http\Middleware\DeleteMiddleware::class,
        'delete-machine' => \App\Http\Middleware\DeleteMachineByUser::class,
        'UserToken'=>UserToken::class,
        'ProductUpdate'=>ProductUpdate::class,
    ];

    /**
     * The priority-sorted list of middleware.
     *
     * This forces non-global middleware to always be in the given order.
     *
     * @var array
     */
    protected $middlewarePriority = [
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \App\Http\Middleware\Authenticate::class,
        \Illuminate\Routing\Middleware\ThrottleRequests::class,
        \Illuminate\Session\Middleware\AuthenticateSession::class,
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
        \Illuminate\Auth\Middleware\Authorize::class,
    ];
}
