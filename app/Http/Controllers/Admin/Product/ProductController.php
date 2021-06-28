<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Company\Company;
use App\Models\Product\Product;
use App\Models\Product\ProductImages;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $products = Product::where('active',0)->with('firstImage')->paginate(15);
        return view('admin.product.index',compact('products'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function indexActive()
    {
        $products = Product::where('active',1)->with('firstImage')->paginate(15);
        return view('admin.product.index',compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $product = Product::findOrFail($id);
        $delete = $product->delete();
        $productImage = ProductImages::where('product',$id)->get();
        foreach ($productImage as $value){
                        $productImageDel=ProductImages::findOrFail($value->id);
                        $del=$productImageDel->delete();
        }
        $return = redirect()->route('product_admin.index');
        if ($delete) {
            return $return->with('message', 'İşlem Başarılı')->with('type', 'success');
        } else {
            return $return->with('message', 'İşlem Başarısız. Lütfen daha sonra tekrar deneyiniz.')->with('type', 'danger');
        }
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function active($id)
    {
         Product::findOrFail($id)->toggleActive();
        $product =  Product::findOrFail($id);
        $company = Company::findOrFail($product->company);
        if ($product->active) {
            if (isset($company->user->id)) {
                $user = $company->user;

                $notification = new \App\Notifications\Product\Product($product);
                $user->notify($notification);
            }
        }
        return back()->with('message','Aktiflik Değişti.')
            ->with('type','success');
    }
    /**
     * @param $id
     * @return RedirectResponse
     */
    public function homeType($id)
    {
        Product::findOrFail($id)->toggleType();
        return back()->with('message','anasayfa Değişti.')
            ->with('type','success');
    }
}
