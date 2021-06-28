<?php


namespace App\Http\Controllers\Admin\Company;


use App\Models\Company\Company as CompanyModel;
use App\Models\Modelhelpers\Survey\Graph;
use App\Models\Survey\Survey;
use App\Scopes\ActiveScope;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;


/**
 * Class Company
 * @package App\Http\Controllers\Admin\Company
 */
class Company
{


    /**
     * @noinspection PhpUnused
     * @param $id
     * @return Factory|View
     */
    function viewByAdmin($id)
    {
        $company = CompanyModel::withoutGlobalScope(ActiveScope::class)->findOrFail($id);
        $companyEvents = $company->events()->withoutGlobalScopes()->get();
        $companyImages = $company->images()->withoutGlobalScopes()->get();
        $companyBlogs = $company->blogs()->withoutGlobalScopes()->get();
        $socialAccount = $company->socialMediaAccounts()->withoutGlobalScopes()->first();
        $isUserBelongsToThisCompany = \App\Models\Modelhelpers\Company\Company::isBelongsToAuthUser($company);
        $questions = Survey::all();
        $graphData = Graph::getDataGroupByMonth($id);

        return view('company.company', compact('company', 'companyImages', 'companyEvents', 'companyBlogs', 'socialAccount', 'questions', 'isUserBelongsToThisCompany', 'graphData'));
    }
}
