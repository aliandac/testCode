<?php

namespace App\Models\Product;

use App\Models\Slider\SliderCategory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate(int $int)
 * @method static create(array $except)
 * @method static findOrFail(int $id)
 */
class ProductSlider extends Model
{
    /**
     * @var string
     */
    protected $primaryKey = 'id';


    protected $table = "product_slider";
    protected $guarded = ['id'];


    public function getCategory(){
        return $this->hasOne(ProductCategory::class,'id','category');
    }

    public function getFirstCategory(){
        return $this->hasOne(FirstProductCategory::class,'id','firstCategory');
    }

    public function getSliderCategory(){
        return $this->hasOne(SliderCategory::class,'id','category_id');
    }
    /**
     * @param bool $save
     * @return bool
     */
    public function toggleActive()
    {
        $this->active = !$this->active;

        $this->save();
    }


}
