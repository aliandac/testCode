<?php

namespace App\Http\Controllers\Admin\Company;

use App\Http\Controllers\Controller;
use App\Models\Company\CompanyMapping;
use App\Models\Company\Company;
use App\Models\FormAll;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CompanyMappingController extends Controller
{

    private $except = ['cover','_token','_method'];

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
            $companies = Company::where('type',1)->paginate(20);
            return view('admin.company.companyMapping.index',compact('companies'));
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function companyCreate($id)
    {
        $companies = Company::where('type',0)->get();
        return view('admin.company.companyMapping.create',compact('companies','id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        foreach ($request->input('company') as $item ){
            $companyMapping = CompanyMapping::create([
                'company' => $item,
                'area' => $request->input('area'),
            ] );
        }


        if ( $companyMapping )
            return back()->with('message','Merkeze Firma Ekleme İşlemi Başarılı oldu.')->with('type','success');

        return back()->with('message','Merkeze Firma Ekleme İşlemi Başarısız.')->with('type','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        $companyMapping = CompanyMapping::where('area',$id)->with('getCompany')->paginate(20);

        return view('admin.company.companyMapping.edit',compact('company','companyMapping'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $slide = CompanyMapping::findOrFail($id);

        if ( $slide->delete() ) {
            return back()->with('message', 'Firma  Başarıyla Silindi.')->with('type', 'success');
        }

        return back()->with('message', 'Firma  Silme İşlemi Başarısız.')->with('type', 'danger');
    }
    public function formListCompanyMapping(){
        $formList = FormAll::where('form_name','MerkezFirmaİstekFormu')->orderBy('id','desc')->paginate(20);

        return view('admin.virtual_fair.form',compact('formList'));
    }
    public function formActive($id)
    {
        FormAll::findOrFail($id)->toggleActive();

        return back()->with('message','Aktiflik Durumu Değişti.')->with('type','success');
    }
}
