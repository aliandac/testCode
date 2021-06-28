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
class ProductCategory
{
    /**
     * @noinspection PhpUnused
     * @param Request $request
     * @return array|string|null
     */
    function isExistGetCompany(Request $request)
    {
        $company = $request->post('company');
        $companies = \App\Models\Product\ProductCategory::where('name', 'like', "%$company%")->get();
        return  view('admin.product_categories.Ajax.product_find_by_name',compact('companies'));
    }
}
