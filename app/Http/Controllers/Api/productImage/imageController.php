<?php

namespace App\Http\Controllers\Api\productImage;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Models\Product\ProductImages;
use App\Models\User\User;
use App\Services\Image;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class imageController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function imageUpload(Request $request)
    {
        $user = User::where('accessToken', $request->input('token'))->first();


        foreach ($request->input('file') as $value) {
            ProductImages::create([
                'images' => $value,
                'company' => $user->getCompany[0]->id,
                'product' => $request->input('id'),
                'api' => 1,
            ]);
        }
        return response()->json(['data' => true], 200);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function imageGet(Request $request)
    {
        $user = User::where('accessToken', $request->input('token'))->first();

        $image = ProductImages::where('company', $user->getCompany[0]->id)->where('product', $request->input('id'))->get();

        return response()->json(['data' => $image], 200);
    }

    public function imageActive(Request $request)
    {

        $user = User::where('accessToken', $request->input('token'))->first();

        $image = ProductImages::findOrFail($request->input('id'))->toggleActive();

        return response()->json(['data' => 'Durum Değişti'], 200);
    }

}
