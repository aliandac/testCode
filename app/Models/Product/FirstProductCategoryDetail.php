<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class FirstProductCategoryDetail extends Model
{
    protected $table = "first_product_category_detail";
    protected $guarded = ['id'];


    public function getCategoryDetail(){
        return $this->hasOne(ProductCategory::class ,'id','cId');
    }
}
