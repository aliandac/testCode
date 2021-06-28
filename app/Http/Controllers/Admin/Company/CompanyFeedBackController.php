<?php

namespace App\Http\Controllers\Admin\Company;

use App\Http\Controllers\Controller;
use App\Models\Company\CompanyFeedBack;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CompanyFeedBackController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {

        $CompanyFeedBacks = CompanyFeedBack::where('active', 1)->where('objectionMessage', null)->paginate(20);
        return view('admin.company.feedback.index', compact('CompanyFeedBacks'));
    }

    /**
     * @return Application|Factory|View
     */
    public function inActive()
    {
        $CompanyFeedBacks = CompanyFeedBack::where('active', 0)->where('objectionMessage', null)->paginate(20);

        return view('admin.company.feedback.inActiveIndex', compact('CompanyFeedBacks'));
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function detail($id)
    {
        $companyFeedBack = CompanyFeedBack::findOrFail($id);

        return view('admin.company.feedback.edit', compact('companyFeedBack'));
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function pushCompany($id)
    {
        $companyFeedBack = CompanyFeedBack::findOrFail($id);
        $companies = \App\Models\Company\Company::all();

        return view('admin.company.feedback.pushCompany', compact('companyFeedBack', 'companies'));
    }

    public function pushCompanyStore(Request $request)
    {

        $feedBack = CompanyFeedBack::where('id', $request->input('id'))->update([
            'company' => $request->input('company'),
        ]);
        $this->active($request->input('id'));

        return redirect()->route('companyFeedBackInBack')->with('message', 'Firmaya Atandı Değişti.')->with('type', 'success');
    }

    public function pushCompanyForm($id)
    {
        $companyFeedBack = CompanyFeedBack::findOrFail($id);
        return view('admin.company.feedback.companyStatus', compact('companyFeedBack'));
    }

    public function pushCompanyStoreMessage(Request $request)
    {
        $feedBack = CompanyFeedBack::where('id', $request->input('id'))->update([
            'companyMessage' => $request->input('description'),
            'status' => $request->input('status'),
            'companyMessageActive' => 1,
        ]);

        return redirect()->route('companyFeedBackInBack')->with('message', 'firma status Değişti.')->with('type', 'success');

    }

    /**
     * @return Application|Factory|View
     */
    public function objectionMessage()
    {

        $CompanyFeedBacks = CompanyFeedBack::where('objectionMessage', '!=', null)->where('active', 1)->paginate(20);

        return view('admin.company.feedback.objectioniIndex', compact('CompanyFeedBacks'));

    }

    public function objectionMessageOk()
    {
        $CompanyFeedBacks = CompanyFeedBack::where('objectionMessage', '!=', null)->where('active', 0)->paginate(20);

        return view('admin.company.feedback.objectioniIndex', compact('CompanyFeedBacks'));
    }

    public function objectionMessageDetail($id)
    {
        $companyFeedBack=CompanyFeedBack::findOrFail($id);
        return view('admin.company.feedback.objectionEdit',compact('companyFeedBack'));
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function active($id)
    {
        CompanyFeedBack::findOrFail($id)->toggleActive();
        return back()->with('message', 'Aktiflik Değişti.')
            ->with('type', 'success');
    }
}
