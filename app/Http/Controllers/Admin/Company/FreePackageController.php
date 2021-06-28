<?php

namespace App\Http\Controllers\Admin\Company;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\Payment\PaymentObserve;
use App\Models\Package\Package;
use App\Models\Package\PackageBuying;
use App\Models\Sale;
use App\Services\Buying\Package\PackageBuying as PackageBuyingService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class FreePackageController extends Controller
{

    public function index($id){

        $company = \App\Models\Company\Company::findOrFail($id);
        $packages = Package::all();
        return view('admin.company.packageSet',compact('company','packages'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function setPackage(Request $request)
    {
        $company = \App\Models\Company\Company::findOrFail($request->input('company'));
        $getFeature = Package::with('roles')
            ->with('getImportantRole.importantRoleName')
            ->findOrFail($request->input('package'));

        $statistics = (bool)$getFeature->getImportantRole->where('role_id',2)->count();
        $bid = (bool)$getFeature->getImportantRole->where('role_id',4)->count();
        $demand = (bool)$getFeature->getImportantRole->where('role_id',4)->count();

        $package = PackageBuying::create([
            'package_id'            => $request->input('package'),
            'price'                 => $getFeature->price,
            'features'              => json_encode($getFeature->roles),
            'important_features'    => json_encode($getFeature->getImportantRole),
            'company_id'            => $company->id,
            'website'               => 0,
            'active'                => 1,
            'statistics'            => ( $statistics ) ? 1:0,
            'demand'                => ( $demand ) ? 1:0,
            'bid'                   => ( $bid ) ? 1:0,
            'merchant_id'           => $company->id . rand(0, 999999),
        ]);

        $sale = new Sale();
        $sale->merchant_id = $company->id . rand(0, 999999);
        $sale->package_id = $getFeature->id;
        $sale->price = $getFeature->price;
        $sale->name = $getFeature->name;

        $redis = Redis::connection();

        $redis->del('company');
        $redis->set('company', $company->id);

        $package->sales()->save($sale);
        return back()->with('message','İşlem Başarılı')->with('type','success');
    }

    public function deletePackage()
    {

    }
}
