<?php

namespace App\Http\Controllers\Api\product;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Models\User\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class productController extends Controller
{
    private $except = ['cover', '_token', '_method'];

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function productList(Request $request)
    {
        $user = User::where('accessToken', $request->input('token'))->first();

        $product = Product::where('company', $user->getCompany[0]->id)->with('getCategory')->get();

        return response()->json(['products' => $product], 200);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function productAdd(Request $request)
    {
        $user = User::where('accessToken', $request->input('token'))->first();

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:200'],
            'content' => ['required', 'min:4'],
            'price' => ['required', 'max:20'],
            'category' => ['required'],
            'tags' => ['required'],
            'product_url' => ['required'],
        ], $this->messagesAdd());
        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()->first()], 404, array(['message' => $validator->messages()->first()]));
        }

        $product = Product::create([
            'name' => $request->input('name'),
            'content' => $request->input('content'),
            'price' => $request->input('price'),
            'discount' => $request->input('discount'),
            'company' => $user->getCompany[0]->id,
            'category' => $request->input('category'),
            'tags' => $request->input('tags'),
            'product_url' => $request->input('product_url'),
        ]);

        if (!$request->file('pdf') == null) {
            $file = $request->file('pdf');
            $commercial_registers = 'pdf-' . rand(0, 99999999) . '-' . $user->getCompany[0]->id . '.' . $file->getClientOriginalExtension();
            $request->file('pdf')->move(public_path('/images/product/pdf/'), $commercial_registers);

            $commercial_register = Product::where('id', $product->id)
                ->update([
                    'pdf' => $commercial_registers
                ]);

        }

        return response()->json(['data' => $product], 200);
    }
    public function messagesAdd()
    {
        return [
            'name.max' => 'İsim maksimum 200 karakter olmalıdır.',
            'name.required' => 'İsim zorunludur.',
            'name.string' => 'İsim rakamsal değerlerden oluşmamalıdır.',
            'content.min' => 'Açıklama En az 4 Karekter  olmalıdır',
            'content.required' => 'Açıklama Zorunludur.',
            'price.required' => 'Fiyat Zorunludur.',
            'price.max' => 'Fiyat Max 20 Olmalıdır.',
            'category.required' => 'Kategori Zorunludur.',
            'tags.required' => 'Etiket Zorunludur.',
            'product_url.required' => 'Ürün Url Zorunludur.',


        ];
    }
    public function productUpdate(Request $request){
        $user = User::where('accessToken', $request->input('token'))->first();

        $validator = Validator::make($request->all(), [
            'category' => ['required'],
            'product_url' => ['required'],
            'id' => ['required'],
        ], $this->messagesUpdate());
        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()->first()], 404, array(['message' => $validator->messages()->first()]));
        }

        $product = Product::findOrFail($request->input('id'))->update( [
            'company' => $user->getCompany[0]->id,
            'category' => $request->input('category'),
            'product_url' => $request->input('product_url'),
            'price' => $request->input('price'),
            'discount' => $request->input('discount'),
            'name' => $request->input('name'),
            'content' => $request->input('content'),
            'tags' => $request->input('tags'),
        ] );

        return response()->json(['data' => $product], 200);
    }
    public function messagesUpdate()
    {
        return [
            'category.required' => 'Kategori Zorunludur.',
            'product_url.required' => 'Ürün Url Zorunludur.',
            'id.required'=>'ürün Id Zorunludur.'


        ];
    }
    public function firstProduct(Request $request){
        $user = User::where('accessToken', $request->input('token'))->first();
       $data = Product::where('company',$user->getCompany[0]->id)->findOrFail($request->input('id'));

       return response()->json(['data'=>$data],200);

    }
    public function active(Request $request)
    {
        $user = User::where('accessToken', $request->input('token'))->first();
        Product::where('company',$user->getCompany[0]->id)->findOrFail($request->input('id'))->toggleActive();
        return response()->json(['data' => true], 200);
    }
}
