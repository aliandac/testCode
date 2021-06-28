<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static where(string $string, $id)
 * @method static findOrFail(int $id)
 */
class FavoriteProduct extends Model
{
    protected $table = "favorite_product";
    protected $guarded = ['id'];

    public function getFavoriteProduct(){
        return $this->hasOne(Product::class,'id','product');
    }
}
