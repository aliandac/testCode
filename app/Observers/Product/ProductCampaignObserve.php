<?php

namespace App\Observers\Product;

use App\Models\Product\ProductCampaign;
use App\Services\Image;

class ProductCampaignObserve
{
    public function creating( ProductCampaign $campaign )
    {
        $request = request();
        if ( request()->hasFile('image') ) {
            $imagename = Image::upload('image', 'images/productCampaign/', $request);

            $campaign->image = $imagename;
        }
    }

    public function updating( ProductCampaign $campaign )
    {
        $request = request();
        if ( request()->hasFile('image') ) {
            $this->imageDelete($campaign);
            $imagename = Image::upload('image', 'images/productCampaign/', $request );

            $campaign->image = $imagename;
        }
    }
    private function imageDelete( ProductCampaign $campaign )
    {
        if ( file_exists(public_path().'/'.$campaign->getOriginal('image')) ) {
            @unlink(public_path().'/'.$campaign->getOriginal('image'));
        }
    }
}
