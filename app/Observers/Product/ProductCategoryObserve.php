<?php

namespace App\Observers\Product;

use App\Models\Product\ProductCategory;
use App\Services\Image;

class ProductCategoryObserve
{
    public function creating( ProductCategory $category )
    {
        $request = request();
        if ( request()->hasFile('image') ) {
            $imagename = Image::upload('image', 'images/productCategory/image/', $request,'512x512');

            $category->image = $imagename;
        }
    }

    public function updating( ProductCategory $category )
    {
        $request = request();
        if ( request()->hasFile('image') ) {
            $this->imageDelete($category);
            $imagename = Image::upload('image', 'images/productCategory/image/', $request , '512x512');

            $category->image = $imagename;
        }
    }
    private function imageDelete( ProductCategory $productCategory )
    {
        if ( file_exists(public_path().'/'.$productCategory->getOriginal('image')) ) {
            @unlink(public_path().'/'.$productCategory->getOriginal('image'));
        }
    }
}
