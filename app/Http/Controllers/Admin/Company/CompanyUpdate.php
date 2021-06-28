<?php

namespace App\Http\Controllers\Admin\Company;


use App\Scopes\ActiveScope;
use App\Services\Image;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Company\Company;
use App\Http\Requests\CompanyUpdateRequest;

class CompanyUpdate
{
    /**
     * @param Request $request
     * @return RedirectResponse
     * @throws Exception
     */
    public function __invoke(Request $request)
    {
        $id = $request->post('id');
        $company = Company::withoutGlobalScope(ActiveScope::class)->findOrFail($request->post('id'));

        if($request->hasFile('file'))
            $request->merge(['image'=>Image::upload('file',"/images/companies/",$request )]);

        $company->update($request->except('_token','id','user','file'));
        return redirect()->back()->with('message','Firma Güncelleme Başarılı')->with('type','success');
    }
}
