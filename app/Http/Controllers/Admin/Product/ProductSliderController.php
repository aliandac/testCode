<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\FirstProductCategory;
use App\Models\Product\Product;
use App\Models\Product\ProductCategory;
use App\Models\Product\ProductSlider;
use App\Models\Slider\SliderCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ProductSliderController extends Controller
{

    private $except = ['cover','_token','_method'];

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $slides = ProductSlider::paginate(10);
        return view('admin.product_slider.index',compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        $slider_categories = SliderCategory::where('active',1)->where('type','-2')->get();
        $firstCategory=FirstProductCategory::where('active',1)->get();
        $productCategory = ProductCategory::where('active',1)->get();
        return view('admin.product_slider.create',compact('productCategory','firstCategory','slider_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function store(Request $request)
    {
        if (request('color_one') == "#000000" and request('color_second') == "#000000") {
            $color_first = null;
            $color_second = null;
        }else{
            $color_first = request('color_one');
            $color_second = request('color_second');
        }

        $category = ProductSlider::create( [
            'title' => request('title'),
            'content' => request('content'),
            'alt' => request('alt'),
            'firstCategory' => request('firstCategory'),
            'button_text' => request('button_text'),
            'button_url' => request('button_url'),
            'category' => request('category'),
            'background' => request('background'),
            'color_one' => $color_first,
            'color_second' => $color_second,
            'category_id' => request('category_id'),
        ] );
        return redirect()->route('product_slider.index')->with('type','success')->with('message','İşlem Başarılı');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|Response|View
     */
    public function show($id)
    {
        $slides = ProductSlider::where('category',$id)->paginate(10);
        return view('admin.product_slider.index',compact('slides'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|Response|View
     */
    public function showFirst($id)
    {
        $slides = ProductSlider::where('firstCategory',$id)->paginate(10);
        return view('admin.product_slider.index',compact('slides'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|Response|View
     */
    public function edit($id)
    {
        $slider_categories = SliderCategory::where('active',1)->where('type','-2')->get();
        $productSlider = ProductSlider::findOrFail($id);
        $firstCategory=FirstProductCategory::where('active',1)->get();
        $productCategory = ProductCategory::where('active',1)->get();
        return view('admin.product_slider.edit',compact('productCategory','slider_categories','productSlider','firstCategory'));
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
        if (request('color_one') == "#000000" and request('color_second') == "#000000") {
            $color_first = null;
            $color_second = null;
        }else{
            $color_first = request('color_one');
            $color_second = request('color_second');
        }

        $category = ProductSlider::findOrFail($id)->update( [
            'title' => request('title'),
            'content' => request('content'),
            'alt' => request('alt'),
            'firstCategory' => request('firstCategory'),
            'button_text' => request('button_text'),
            'button_url' => request('button_url'),
            'category' => request('category'),
            'background' => request('background'),
            'color_one' => $color_first,
            'color_second' => $color_second,
            'category_id' => request('category_id'),
        ] );
        return redirect()->route('product_slider.index')->with('type','success')->with('message','İşlem Başarılı');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $product = ProductSlider::findOrFail($id);
        $delete = $product->delete();
        return redirect()->route('product_slider.index')->with('type','success')->with('message','İşlem Başarılı');

    }
    public function active($id)
    {
        ProductSlider::findOrFail($id)->toggleActive();

        return redirect()->route('product_slider.index')->with('message','Aktiflik Durumu Değişti.')
            ->with('type','success');
    }
}
