<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api'],function (){
   route::post('/test/key','HomeController@test');
   route::post('/login','LoginController@login');

   Route::group(['prefix' => 'productCategories','namespace'=>'productCategories','middleware' => 'UserToken'],function (){
       Route::post('/Category','categoryController@getCategories');
   });
    Route::group(['prefix' => 'product','namespace'=>'product','middleware' => 'UserToken'],function (){
        Route::post('/productGet','productController@productList');
        Route::post('/productAdd','productController@productAdd');
        Route::post('/productUpdate','productController@productUpdate')->middleware('ProductUpdate');
        Route::post('/productActive','productController@active')->middleware('ProductUpdate');
        Route::post('/productFirstData','productController@firstProduct')->middleware('ProductUpdate');
    });
    Route::group(['prefix' => 'productImage','namespace'=>'productImage','middleware' => 'UserToken'],function (){
        Route::post('/productImages','imageController@imageUpload')->middleware('ProductUpdate');
        Route::post('/productImagesGet','imageController@imageGet')->middleware('ProductUpdate');
        Route::post('/productImagesActive','imageController@imageActive');
    });
    Route::group(['prefix' => 'FoodMenu','namespace'=>'Food','middleware' => 'UserToken'],function (){
        Route::post('/foodMenuList','FoodMenuController@FoodMenuList');
        Route::post('/foodMenuAdd','FoodMenuController@FoodMenuAdd');
        Route::post('/foodMenuUpdate','FoodMenuController@FoodMenuUpdate');
        Route::post('/foodMenuActive','FoodMenuController@active');
        Route::post('/foodMenuFirstData','FoodMenuController@firstFoodMenu');
    });
    Route::group(['prefix' => 'FoodMenuFeatures','namespace'=>'Food','middleware' => 'UserToken'],function (){
        Route::post('/foodMenuFeaturesList','FoodMenuFeaturesController@FoodMenuFeaturesList');
        Route::post('/foodMenuFeaturesAdd','FoodMenuFeaturesController@FoodMenuFeaturesAdd');
        Route::post('/foodMenuFeaturesUpdate','FoodMenuFeaturesController@FoodMenuFeaturesUpdate');
        Route::post('/foodMenuFeaturesActive','FoodMenuFeaturesController@active');
        Route::post('/foodMenuFeaturesFirstData','FoodMenuFeaturesController@firstFoodFeaturesMenu');
    });
});

Route::group(['prefix' => 'elastic', 'namespace' => 'Ajax\Company'], function () {
    Route::get('company/search', 'Company@getWithElasticSearch');
    Route::get('companies',function(){ return 'companies'; });
    Route::put('companies', 'CompanyCreate');
    Route::post('company/{id}', 'CompanyUpdate');
    Route::delete('company/{id}', 'CompanyDelete');
});


