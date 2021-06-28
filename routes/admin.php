<?php

Route::get('admin', function () {
    return view('admin.index');
});



    /**
     * admin company classes also have from others lines
     */
    Route::group(['namespace'=>'Company'],function (){
        Route::get('company/view/by/admin/{id}','Company@viewByAdmin')->name('view_company_by_admin');
        Route::get('firma/ekle','CreateCompany@view')->name('create_company_by_admin');
        Route::post('firma/olustur','StoreCompany@byAdmin')->name('store_company_by_admin');
        Route::post('firma/guncelle','CompanyUpdate')->name('company_update_by_admin');

        Route::get('firma/anket/list','CompanySurveyRecordController@index')->name('company-survey-list');
        Route::get('firma/anket/detail/{id}','CompanySurveyRecordController@detail')->name('company-survey-detail');

        Route::resource('owner-message','OwnerMessageController');

        Route::resource('complaint','CompanyComplaintController');
        Route::get('package-set-{id}','FreePackageController@index')->name('packageSetCompany');
        Route::post('package-set-company-post','FreePackageController@setPackage')->name('packageSetCompanyPost');



        Route::resource('company-mapping','CompanyMappingController');
        Route::get('company-mapping-create/{id}','CompanyMappingController@companyCreate')->name('CompanyMappingCreate');
        Route::get('company-mapping-form-list','CompanyMappingController@formListCompanyMapping')->name('FormListCompanyMapping');

            Route::resource('companyVideo','CompanyVideoController');
        Route::get('company-video-admin/{id}','CompanyVideoController@active')->name('videoCompanyActiveAdmin');

        Route::get('company-feed-back/list','CompanyFeedBackController@index')->name('companyFeedBackInBack');
        Route::get('company-feed-back/in-active/list','CompanyFeedBackController@inActive')->name('companyFeedBackInBackInActive');
        Route::get('company-feed-back/active/{id}','CompanyFeedBackController@active')->name('companyFeedBackInBackActive');
        Route::get('company-feed-back/detail/{id}','CompanyFeedBackController@detail')->name('companyFeedBackInBackDetail');
        Route::get('company-feed-back/company-push/{id}','CompanyFeedBackController@pushCompany')->name('companyFeedBackInBackCompanyPush');
        Route::post('company-feed-back/company-push','CompanyFeedBackController@pushCompanyStore')->name('companyPushFeedBack');
        Route::get('company-feed-back/company-push-message-form/{id}','CompanyFeedBackController@pushCompanyForm')->name('companyPushFeedBackMessageForm');
        Route::post('company-feed-back/company-push-message-form-store','CompanyFeedBackController@pushCompanyStoreMessage')->name('companyPushFeedBackMessageStore');
        Route::get('company-feed-back-objection-message/list','CompanyFeedBackController@objectionMessage')->name('companyFeedBackInBackObjectionList');
        Route::get('company-feed-back-objection-message-finis/list','CompanyFeedBackController@objectionMessageOk')->name('companyFeedBackInBackObjectionListOk');
        Route::get('company-feed-back-objection-message-detail/{id}','CompanyFeedBackController@objectionMessageDetail')->name('companyFeedBackInBackObjectionListDetail');


    });

    Route::match(['get','post'],'firma/fotoğraf/ekle/{id}', 'CompanyController@storeImage')->name('store-image-to-company')->middleware(['auth.custom', 'can_edit_company']);





    /* company admin controller  */
    Route::get('firma/list','CompanyController@index')->name('Company_List');
    Route::get('firma/pasif/list','CompanyController@index_is_active')->name('Company_is_Active_list');
    Route::get('firma/status/{id}','CompanyController@company_status')->name('Company_Status');
    Route::get('firma/home/{id}','CompanyController@home_page_status')->name('HomePage_Status');
    Route::get('firma/profile/{id}','CompanyController@company_profile')->name('Company_Profile');
    Route::get('firma/fotograflar/{id}','CompanyController@images')->name('company-images');
    Route::get('firma/fotograf/sil/{id}','CompanyController@destroyImage')->name('destroy-company-image');
    Route::get('firma/fotograf/aktiflik/{id}','CompanyController@activeImage')->name('active-company-image');
    Route::get('firma/document/inactive','CompanyController@documentInActive')->name('inActiveDocument');
    Route::get('firma/document/active','CompanyController@documentActive')->name('activeDocument');
    Route::get('firma/document/aktiflik/{id}','CompanyController@activeDocument')->name('active-company-document');
    Route::get('firma/document/sil/{id}','CompanyController@destroyDocument')->name('destroy-company-document');

    Route::get('firma/welcome/formlari','CompanyController@formList')->name('tradeeyWelcomeFormListAdmin');

    Route::get('firma/pasif-image-list','Company\CompanyImageController@index')->name('CompanyInActiveImageList');


    Route::get('delete_comment_admin/{id}', 'CommentsController@destroy')->name('delete_comment_admin')->where('id', '\d+');

    Route::group(['prefix' => '/'], function () {
        Route::get('/', 'HomeController@home')->name('admin');
        Route::get('/logout', 'HomeController@logout')->name('admin-logout');

        Route::get('blog/inactive', 'BlogController@inactive')->name('blog-inactive');
        Route::get('blog/toggle-active/{id}/{reject?}', 'BlogController@toggleActive')->name('blog.toggleActive');
        Route::resource('blog', 'BlogController');
        Route::get('comments/all-list', 'CommentsController@all')->name('comments.all');
        Route::get('comments/toggle-active/{id}/{reject?}', 'CommentsController@toggleActive')->name('comments.toggleActive');
        Route::resource('comments', 'CommentsController');
        Route::get('packages/toggle-active/{id}', 'PackagesController@toggleActive')->name('packages.toggleActive');
        Route::get('packages/feature-delete/{id}', 'PackagesController@featureDelete')->name('packages.feature.delete');
        Route::post('packages/update-feature/{id}', 'PackagesController@changeFeatureName')->name('package-update-feature');
        Route::post('package-order','PackagesController@order')->name('package-order');
        Route::resource('packages', 'PackagesController');
        Route::get('machine/all-list', 'MachineController@all')->name('machine.all');

        Route::get('machine/toogle-active/{id}', 'MachineController@toggleActive')->name('machine.toggleActive');
        Route::get('machine/toggle-active/{id}/{reject?}', 'MachineController@toggleActive')->name('machine.toggleActive');
        Route::get('machine/view/{id}','ViewMachineByAdmin')->name('view_machine_byadmin');

        Route::group(['prefix'=>'machine','namespace'=>'Machine'],function(){
            Route::get('create','StoreMachineController@create')->name('create-machine');
            Route::post('store','StoreMachineController@store')->name('store-machine');

            Route::get('edit/{id}','UpdateMachineController@edit')->name('edit-machine');
            Route::put('update/{id}','UpdateMachineController')->name('update-machine');

            Route::get('index','IndexMachineController@index')->name('index-machines');
            Route::get('inactive','IndexMachineController@inActive')->name('inactive-machines');
            Route::get('machine-images/{id}','IndexMachineController@images')->name('machine-images');
            Route::get('delete-machine-image/{id}','IndexMachineController@deleteImage')->name('delete-machine-image');

            Route::delete('{id}/destroy','DestroyMachineController@destroy')->name('destroy-machines');

        });

        Route::resource('machine_category', 'MachineCategoriesController');
        // Route::resource('product', 'ProductController');
    });
        Route::group(['prefix'=>'productCategory','namespace'=>'Product'],function (){
            Route::resource('product_category','ProductCategoryController');
            Route::get('product-company-category/{id}','ProductCategoryController@active')->name('product-company-category-active');
            Route::post('product-company-category-rank','ProductCategoryController@rank')->name('product-company-category-rank');
            Route::resource('product_admin','ProductController');
            Route::get('product-admin-company','ProductController@indexActive')->name('product-company-admin');
            Route::get('product-company/{id}','ProductController@active')->name('product-company-active');
            Route::get('product-company-home-type/{id}','ProductController@homeType')->name('product-company-home_type');

            Route::resource('FirstProductCategory','FirstProductCategoryController');
            Route::get('product-category-active/{id}','FirstProductCategoryController@active')->name('firstProductCategoryActive');
            Route::post('product-first-order','FirstProductCategoryController@order')->name('product-first-order');

            Route::resource('product_slider','ProductSliderController');
            Route::get('product-slider-active/{id}','ProductSliderController@active')->name('productSliderActive');
            Route::get('product-slider-first-category/{id}','ProductSliderController@showFirst')->name('productSliderFirstCategory');
            Route::resource('product_campaign','ProductCampaignController');
            Route::get('product-campaign-active/{id}','ProductCampaignController@active')->name('productCampaignActive');
            Route::post('product-campaign-order','ProductCampaignController@order')->name('product-campaign-order');
        });
    Route::get('cache/clear', function () {
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        return back()->with('cache_clear', 'Cache Cleaned');
    })->name('cache_clear');

});
