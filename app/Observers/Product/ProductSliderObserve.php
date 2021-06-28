<?php

namespace App\Observers\Product;

use App\Models\Product\ProductSlider;
use App\Services\Image;

class ProductSliderObserve
{
    public function creating( ProductSlider $category )
    {
        $request = request();
        if ( request()->hasFile('image') ) {
            $imagename = Image::upload('image', 'images/product/slider/', $request);

            $category->image = $imagename;
        }

        if ( request()->hasFile('background') ) {
            $imagename = Image::upload('background', 'images/product/slider/', $request );

            $category->background = $imagename;
        }
    }

    public function updating( ProductSlider $category )
    {
        $request = request();
        if ( request()->hasFile('image') ) {
            $this->imageDelete($category);
            $imagename = Image::upload('image', 'images/product/slider/', $request );

            $category->image = $imagename;
        }

        if ( request()->hasFile('background') ) {
            $imagename = Image::upload('background', 'images/product/slider/', $request );

            $category->background = $imagename;
        }
    }
    private function imageDelete( ProductSlider $productCategory )
    {
        if ( file_exists(public_path().'/'.$productCategory->getOriginal('image')) ) {
            @unlink(public_path().'/'.$productCategory->getOriginal('image'));
        }
    }
}
