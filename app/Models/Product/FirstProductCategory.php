<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate()
 * @method static create(array $array)
 * @method static findOrFail(int $id)
 * @method static where(string $string, int $int)
 */
class FirstProductCategory extends Model
{
    protected $table = "first_product_category";
    protected $guarded = ['id'];


    /**
     *
     */
    public function toggleActive()
    {
        $this->active = !$this->active;
        $this->save();
    }

    public function getDetail(){
        return $this->hasMany(FirstProductCategoryDetail::class,'firstId','id');
    }
}
