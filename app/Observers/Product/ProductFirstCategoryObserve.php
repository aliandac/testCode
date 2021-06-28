<?php

namespace App\Observers\Product;

use App\Models\Product\FirstProductCategory;
use App\Services\Image;

class ProductFirstCategoryObserve
{
    public function creating( FirstProductCategory $category )
    {
        $request = request();
        if ( request()->hasFile('image') ) {
            $imagename = Image::upload('image', 'images/productCategory/image/', $request,'512x512');

            $category->image = $imagename;
        }
    }

    public function updating( FirstProductCategory $category )
    {
        $request = request();
        if ( request()->hasFile('image') ) {
            $this->imageDelete($category);
            $imagename = Image::upload('image', 'images/productCategory/image/', $request , '512x512');

            $category->image = $imagename;
        }
    }
    private function imageDelete( FirstProductCategory $productCategory )
    {
        if ( file_exists(public_path().'/'.$productCategory->getOriginal('image')) ) {
            @unlink(public_path().'/'.$productCategory->getOriginal('image'));
        }
    }
}
