<?php

namespace App\Http\Controllers\Api\productCategories;

use App\Http\Controllers\Controller;
use App\Models\Product\ProductCategory;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function getCategories(Request $request){

        $productCategory =  ProductCategory::where('active',1)->with('children')->get();

        return response()->json(['categories'=>$productCategory],200);
    }
}
