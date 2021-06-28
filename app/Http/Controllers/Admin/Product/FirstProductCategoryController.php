<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\FirstProductCategory;
use App\Models\Product\FirstProductCategoryDetail;
use App\Models\Product\Product;
use App\Models\Product\ProductCategory;
use App\Services\Image;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;


class FirstProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $firstCategory = FirstProductCategory::paginate();
        return view('admin.productFirstCategory.index',compact('firstCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        $product = ProductCategory::where('parent_id',0)->where('active',1)->get();
        return view('admin.productFirstCategory.create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {

        $firstCategory = FirstProductCategory::create([
            'title'=>$request->input('title'),
            'down_slider'=>$request->input('down_slider'),
            'url'=>$request->input('url'),
        ]);

        FirstProductCategoryDetail::where('firstId', $firstCategory->id)->delete();
        foreach ($request->input('category') as $category ){
            FirstProductCategoryDetail::create([
                'firstId'=>$firstCategory->id,
                'cId'=> $category
            ]);
        }
        return redirect()->route('FirstProductCategory.index')->with('message','İşlem Başarılı')->with('type','success');
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
        $FirstProductCategory=FirstProductCategory::findOrFail($id);
        $product = ProductCategory::where('parent_id',0)->where('active',1)->get();
        return view('admin.productFirstCategory.edit',compact('FirstProductCategory','product'));
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
        $firstCategory = FirstProductCategory::findOrFail($id)->update([
            'title'=>$request->input('title'),
            'down_slider'=>$request->input('down_slider'),
            'url'=>$request->input('url'),
        ]);
        if ( request()->hasFile('image') ) {
            $imagename = Image::upload('image', 'images/productCategory/image/', $request , '512x512');
            $firstCategory = FirstProductCategory::findOrFail($id)->update([
                'image'=> $imagename,
            ]);
        }
        FirstProductCategoryDetail::where('firstId', $id)->delete();
        foreach ($request->input('category') as $category ){
            FirstProductCategoryDetail::create([
                'firstId'=>$id,
                'cId'=> $category
            ]);
        }
        return redirect()->route('FirstProductCategory.index')->with('message','İşlem Başarılı')->with('type','success');

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
        FirstProductCategory::findOrFail($id)->toggleActive();
        return back()->with('message','Aktiflik Değişti.')
            ->with('type','success');
    }
    public function order(Request $request)
    {
        $slide = FirstProductCategory::findOrFail($request->id);
        if ( $request->statu == 0 ) {
            if ( !$slide->order == 0 ) {
                $slide->order = $slide->order - 1;
            }
        }else {
            $slide->order = $slide->order + 1;
        }
        $slide->save();
        return response()->json(['rank'=> $slide->order]);
    }
}
