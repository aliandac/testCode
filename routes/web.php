<?php /** @noinspection PhpUndefinedClassInspection */





Route::group(['namespace' => 'Ajax'], function () {
    Route::post('get_companies/with_elastic_search', 'Company\Company@getWithElasticSearch')->name('fetch_companies_with_elastic_search');
    Route::post('company/complaint', 'Company\CompanyComplaint@save')->name('company_complaint_post');
    Route::post('company/find_by_name', 'Company\CompanyExist@isExistGetCompany')->name('company_find_by_name');
    Route::post('category/find_by_name', 'Category\CategoryFind@isExistGetCategory')->name('category_find_by_name');
    Route::post('product/find_by_name', 'Prodoct\ProductCategory@isExistGetCompany')->name('product_category_find_by_name');
    Route::post('product-first/find_by_name', 'Prodoct\ProductFindName@isExistGetProduct')->name('product_find_by_name');
    Route::post('product-first-slider/find_by_name', 'Prodoct\ProductSlider@isExistGetProduct')->name('product_slider_find_by_name');
});

/** ajax start */

Route::group(['prefix' => 'ajax', 'namespace' => 'Ajax'], function () {
    Route::match(['get', 'post'], 'countries/cities', 'City\Province@getCityOfCountry')->name('province_districts');
    Route::post('cities/districts', 'District\District@getDistrictsOfCity')->name('cities_districts')->middleware('admin');
    Route::post('machine/attributes', 'Machine\Machine@getAttributesOfMachineByCategory')->name('attributes_of_machine_by_category')->middleware('admin');
    Route::post('company/bid', 'Bid\BidOfCompany@get')->name('bid_of_company_with_ajax')->middleware('admin');
});



Route::group(['prefix' => '/', 'namespace' => 'Frontend'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::post('complaint-feed-back-company', 'HomeController@complaintFormFeed')->name('ComplaintFeedForm');
    Route::post('complaint-feed-back-company-form', 'HomeController@companyFormFeedBack')->name('companyFormFeedBack');
    Route::post('/slider-categories', 'HomeController@slides_categories')->name('sliderCategories');
    Route::post('/slider-categories-mobile', 'HomeController@slides_categories_mobile')->name('sliderCategoriesMobile');
    Route::post('/virtual-fair-slider-categories', 'HomeController@virtual_fair_slides_categories')->name('virtualFairSliderCategories');
    Route::post('/virtual-fair-slider-categories-mobile', 'HomeController@virtual_fair_slides_categories_mobile')->name('virtualFairSliderCategoriesMobile');
    Route::post('/product-slider-categories', 'HomeController@product_slides_categories')->name('productSliderCategories');
    Route::post('/product-slider-categories-mobile', 'HomeController@product_slides_categories_mobile')->name('productSliderCategoriesMobile');
    Route::post('/product-slider-detail-categories', 'HomeController@product_slides_detail_categories')->name('productDetailCategorySliderCategories');
    Route::post('/product-slider-detail-categories-mobile', 'HomeController@product_slides_detail_categories_mobile')->name('productDetailCategorySliderCategoriesMobile');
    Route::post('/food-slider', 'HomeController@food_Slider')->name('foodSlider');
    Route::post('/food-slider-mobile', 'HomeController@food_slider_mobile')->name('foodSliderMobile');
    Route::group(['prefix' => 'category'], function () {
        Route::get('/sub/{id}', 'HomeController@subcategory')->name('subcategory');
    });



    Route::post('forgot-password', 'User\ForgotPasswordController@sendEmail')->name('user-forgot-password');


    Route::get('sss', 'HomeController@faq')->name('faq');
    Route::post('lazy-index', 'HomeController@lazyLoadingPage')->name('lazyIndex');
    Route::get('iletisim', 'ContactController@index')->name('contact-index');
    Route::post('contact', 'ContactController@contact')->name('contact');







    /* usercontroller route */

    Route::group(['prefix' => '/', 'namespace' => 'User', 'middleware' => 'auth.custom'], function () {
        Route::get('etkinlik/olustur', 'UserController@activity')->name('create_activity');
        Route::get('etkinlik/liste', 'UserController@activities')->name('list_activity');
        Route::get('etkinlik/duzenle/{id}', 'UserController@activityUpdate')->middleware('can_company_event')->name('update_activity');
        Route::get('ihale/olustur', 'UserController@bid')->name('create_bid');
        Route::get('ihale/liste', 'UserController@bids')->name('list_bid');
        Route::post('bidlist', 'UserController@bids_ajax')->name('Bid_ajax_list');
        Route::get('ihale/duzenle/{id}', 'UserController@bidUpdate')->middleware('can_edit_bid')->name('update_bid');
        Route::get('firma/olustur', 'UserController@company')->name('create_company')->middleware('create-company');
        Route::get('firma/list', 'UserController@companiesUser')->name('list_company');
        Route::get('firma/update/{id}', 'UserController@companyUpdate')->middleware('can_edit_company')->name('update_company');
        Route::get('demands/create', 'UserController@demands')->name('create_demand');
        Route::get('demands/list', 'UserController@demandLists')->name('list_demand');
        Route::get('demands/update/{id}', 'UserController@demandUpdate')->middleware('can_edit_demand')->name('update_demand');
        Route::get('haber/list', 'UserController@news_list')->name('list_news');
        Route::get('haber/update/{id}', 'UserController@newsUpdate')->middleware('can_new_blog')->name('update_news');
        Route::get('haber/olustur', 'UserController@news')->name('create_news');
        Route::get('haber/sil/{id}', 'UserController@newsDelete')->name('delete-news');
        Route::get('package-detail', 'UserController@package')->name('package-detail');
        Route::get('urun/olustur', 'UserController@machine')->name('create_machine');
        Route::get('kullanici', 'UserController@index')->name('create_user');
        Route::post('sifre_güncelemme', 'PasswordController@update')->name('update_password');
        Route::post('user/update', 'UserController@updateProfile')->name('update-profile');
        Route::post('user/api', 'UserController@uniqCodeApi')->name('uniqApiKey');
        Route::get('makine/list', 'UserController@machines_list')->name('list_machine');
        Route::get('makine/images/list/{id}', 'UserController@machineImages')->name('machine-images-list');
        Route::get('makine/update/{id}', 'UserController@machine_update')->name('update_machine');
        Route::get('firma/istatistik', 'UserController@survey')->name('company-survey')->middleware('statistics');

        Route::get('profilim', 'UserController@panel')->name('MyProfile');
        Route::post('company-choosing', 'UserController@choosingCompany')->name('company-choosing');

    });

});


Route::view('giris-yap', 'frontend.customAuthViews.register')->name('login-register')->middleware('guest');



Auth::routes();
Route::get('logout', 'User\UserSessionActionController@logout')->name('custom_logout');

Route::view('login', 'frontend.customAuthViews.register')->name('login');



Route::view('emlak-yakinda', 'coming-soon-estate');
Route::view('galeri-yakinda', 'coming-soon-car');
Route::view('kariyer-yakinda', 'coming-soon-career');


Route::get('cache/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    return back()->with('cache_clear', 'Cache Cleaned');
})->name('cache_clear');
