<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'               => 'required|max:255',
            'content'            => 'required|max:50000',
            'price'              => 'required|max:10',
            'category'           => 'required|integer',
            'product_url'           => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'             => 'Ürün İsmi Zorunludur.',
            'name.max'                  => 'Ürün İsmi Maksimum 500 Karakter Olmalıdır.',
            'content.required'          => 'Açıklama Zorunludur.',
            'content.max'               => 'Açıklama Maksimum 50 bin Karakter Olmalıdır.',
            'price.required'            => 'Fiyat Zorunludur.',
            'price.max'                 => 'Fiyat Maksimum 10 Karakter Olmalıdır.',
            'category.integer'          => 'Kategori sayısal olmalıdır. (integer error)',
            'category.required'         => 'Kategori Zorunludur.',
            'product_url.required'         => 'Ürün url  Zorunludur.',
        ];
    }
}
