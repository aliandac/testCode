<?php

namespace App\Providers;

use App\Models\Bid;
use App\Models\Blog;
use App\Models\Company\Company;
use App\Models\Company\CompanyEvent;
use App\Models\Fair\Virtual\VirtualFairCategories;
use App\Models\Fair\Virtual\VirtualFairStand;
use App\Models\Image;
use App\Models\Machine\Entity;
use App\Models\Product\FirstProductCategory;
use App\Models\Product\ProductCampaign;
use App\Models\Product\ProductCategory;
use App\Models\Product\ProductSlider;
use App\Models\Request;
use App\Models\Slide;
use App\Models\HeaderSlide;
use App\Models\Promotions\Property;
use App\Models\Advertisements\Advertisement;
use App\Models\Advertisements\BuyingAdvertisement;
use App\Models\University\University;
use App\Observers\Product\ProductCampaignObserve;
use App\Observers\Product\ProductCategoryObserve;
use App\Observers\Product\ProductFirstCategoryObserve;
use App\Observers\Product\ProductSliderObserve;
use App\Observers\ReserveAdvertisement;
use App\Observers\AdvertisementObserve;
use App\Observers\AdvertisementRezerve;
use App\Observers\SlideObserve;
use App\Observers\HeaderSlideObserve;
use App\Observers\BidObserver;
use App\Observers\BlogObserver;
use App\Observers\CompanyEventObserver;
use App\Observers\CompanyObserver;
use App\Observers\DemandObserver;
use App\Observers\ImageObserver;
use App\Observers\MachineObserver;
use App\Observers\University\UniversityObserve;
use App\Observers\UserObserver;
use App\Observers\CompanyCategoryObserve;
use App\Observers\PromotionPropertyObserve;
use App\Models\Category;
use App\Observers\VirtualFair\VirtualFairCategoryObserve;
use App\Observers\VirtualFair\VirtualFairStandObserver;
use App\User;
use Illuminate\Support\ServiceProvider;

class ModelObserverProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        Category::observe(CompanyCategoryObserve::class);
        Request::observe(DemandObserver::class);
        Blog::observe(BlogObserver::class);
        Bid::observe(BidObserver::class);
        Company::observe(CompanyObserver::class);
        User::observe(UserObserver::class);
        Image::observe(ImageObserver::class);
        Entity::observe(MachineObserver::class);
        CompanyEvent::observe(CompanyEventObserver::class);
        Slide::observe(SlideObserve::class);
        HeaderSlide::observe(HeaderSlideObserve::class);
        Property::observe(PromotionPropertyObserve::class);
        Advertisement::observe(AdvertisementObserve::class);
        BuyingAdvertisement::observe(ReserveAdvertisement::class);
        ProductCategory::observe(ProductCategoryObserve::class);
        University::observe(UniversityObserve::class);
        VirtualFairCategories::observe(VirtualFairCategoryObserve::class);
        VirtualFairStand::observe(VirtualFairStandObserver::class);
        FirstProductCategory::observe(ProductFirstCategoryObserve::class);
        ProductSlider::observe(ProductSliderObserve::class);
        ProductCampaign::observe(ProductCampaignObserve::class);

    }
}
