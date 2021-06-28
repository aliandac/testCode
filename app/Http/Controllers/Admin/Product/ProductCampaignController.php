<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Company\Company;
use App\Models\Product\ProductCampaign;
use App\Models\Product\ProductCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ProductCampaignController extends Controller
{
    private $except = ['cover','_token','_method'];
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $ProductCampaign=ProductCampaign::paginate(10);
        return view('admin.product_campaign.index',compact('ProductCampaign'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        $productCategory = ProductCategory::where('active',1)->where('parent_id','>',0)->get();
        $company = Company::where('active',1)->get();

        return view('admin.product_campaign.create',compact('productCategory','company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $category = ProductCampaign::create( $request->except( $this->except ) );
        return back()->with('message','İşlem Başarılı')->with('type','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|Response|View
     */
    public function edit($id)
    {
        $productCategory = ProductCategory::where('active',1)->where('parent_id','>',0)->get();
        $company = Company::where('active',1)->get();
        $productCampaign=ProductCampaign::findOrFail($id);

        return view('admin.product_campaign.edit',compact('productCategory','productCampaign','company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $category = ProductCampaign::findOrFail($id)->update( $request->except( $this->except ) );
        return back()->with('message','İşlem Başarılı')->with('type','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function active($id)
    {
        ProductCampaign::findOrFail($id)->toggleActive();

        return redirect()->route('product_campaign.index')->with('message','Aktiflik Durumu Değişti.')
            ->with('type','success');
    }

    public function order(Request $request)
    {
        $slide = ProductCampaign::findOrFail($request->id);
        if ( $request->statu == 0 ) {
            if ( !$slide->rank == 0 ) {
                $slide->rank = $slide->rank - 1;
            }
        }else {
            $slide->rank = $slide->rank + 1;
        }
        $slide->save();
        return response()->json(['rank'=> $slide->rank]);
    }
}
