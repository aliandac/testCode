<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\ProductCategoryRequest;
use App\Models\Product\ProductCategory;
use App\Models\Product\ProductCategory as CategoryModel;
use App\Services\Redis\Redis;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ProductCategoryController extends Controller
{
    private $except = ['cover','_token','_method'];
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $productCategory = ProductCategory::orderBy('id','desc')->paginate(10);

        return view('admin.product_categories.index',compact('productCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $productCategory = ProductCategory::where('parent_id',0)->get();
        return view('admin.product_categories.create',compact('productCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductCategoryRequest $request
     * @return Response
     */
    public function store(ProductCategoryRequest $request)
    {
        $category = ProductCategory::create( $request->except( $this->except ) );

        $redis = new Redis();
        $redis->destroy('product-categories');
        $categories = CategoryModel::where('active',1)->with('children')->get();
        $redis->set('product-categories',serialize($categories) );

        if ( $category )
            return back()->with('message','Kategori Başarıyla Eklendi.')
                ->with('type','success');

        return back()->with('message','Kategori Ekleme Başarısız.')
            ->with('type','success');
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
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $productCategory = ProductCategory::where('parent_id',0)->get();
        $category = ProductCategory::findOrFail($id);
        return view('admin.product_categories.edit',compact('category','productCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(ProductCategoryRequest $request, $id)
    {
        $category = ProductCategory::findOrFail($id)->update( $request->except( $this->except ) );

        $redis = new Redis();
        $redis->destroy('product-categories');
        $categories = CategoryModel::where('active',1)->with('children')->get();
        $redis->set('product-categories',serialize($categories) );

        if ( $category )
            return back()->with('message','Kategori Başarıyla Güncellendi.')
                ->with('type','success');

        return back()->with('message','Kategori Ekleme Güncellendi.')
            ->with('type','success');
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
        ProductCategory::findOrFail($id)->toggleActive();

        $redis = new Redis();
        $redis->destroy('product-categories');
        $categories = CategoryModel::where('active',1)->with('children')->get();
        $redis->set('product-categories',serialize($categories) );

        return back()->with('message','Aktiflik Değişti.')
            ->with('type','success');
    }
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function rank(Request $request)
    {
        $rank = ProductCategory::findOrFail($request->id);
        if ( $request->statu == 0 ) {
            if ( !$rank->rank == 0 ) {
                $rank->rank = $rank->rank - 1;
            }
        }else {
            $rank->rank = $rank->rank + 1;
        }
        $rank->save();
        return response()->json(['rank'=> $rank->rank]);
    }
}
