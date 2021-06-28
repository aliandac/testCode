<?php


namespace App\Http\Controllers\Ajax\Prodoct;

use App\Models\Company\Company as CompanyModel;
use App\Scopes\ActiveScope;
use Illuminate\Http\Request;

/**
 * @noinspection PhpUnused
 * Class companyExist
 * @package App\Http\Controllers\Ajax\Company
 */
class ProductSlider
{
    /**
     * @noinspection PhpUnused
     * @param Request $request
     * @return array|string|null
     */
    function isExistGetProduct(Request $request)
    {
        $company = $request->post('company');
        $companies = \App\Models\Product\ProductCategory::where('name', 'like', "%$company%")->get();
        $companies2 = \App\Models\Product\FirstProductCategory::where('title', 'like', "%$company%")->get();
        return  view('admin.product_slider.Ajax.product_find_slider_by_name',compact('companies','companies2'));
    }
}
