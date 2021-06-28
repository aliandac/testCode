<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductCategoryRequest extends FormRequest
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
        $rules = [
            'name'             => 'required|max:255',
            'description'      => 'required|max:200',
            'keywords'         => 'required|max:200',
        ];

        $rules['image'] = 'required|image|mimes:jpeg,jpg,png|max:30720';

        if ( request()->isMethod('PUT') ) {
            $rules['image'] = 'sometimes|nullable|image|mimes:jpeg,jpg,png|max:30720';
        }

        return $rules;
    }
    public function messages()
    {
        return [
            'name.required'             => 'Kategori İsmi Zorunludur.',
            'name.max'                  => 'Kategori İsmi Maksimum 255 Karakter Olmalıdır.',
            'description.required'      => 'Açıklama Zorunludur.',
            'description.max'           => 'Açıklama Maksimum 200 Karakter Olmalıdır.',
            'keywords.required'         => 'Anahtar Kelimeler Zorunludur.',
            'keywords.max'              => 'Anahtar Kelimeler Maksimum 200 Karakter Olmalıdır.',
            'image.required'            => 'Kategori Logosu Zorunludur.',
            'image.max'                 => 'Kategori Logosu Maksimum 30 MB Boyutunda Olmalıdır.',
            'image.image'               => 'Dosya Resim Formatında Olmalıdır.',
            'image.mimes'               => 'Kategori Logosu Sadece JPEG , JPG ve PNG Formatında Olmalıdır.',
        ];
    }
}
