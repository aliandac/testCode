<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * Class Fair
 * @package App\Models\Fair
 * @method static Builder where($id, $value)
 * @method static Builder get()
 * @method static Builder first($id)
 * @method static create(array $array)
 * @method static findOrFail($id)
 */
class ProductImages extends Model
{
    /**
     * @var string
     */
    protected $primaryKey = 'id';


    protected $table = "product_images";
    protected $guarded = ['id'];


    /**
     * @param bool $save
     * @return bool
     */
    public function toggleActive()
    {
        $this->active = !$this->active;
        $this->save();
    }

    /**
     * @param Builder|ProductCategory $query
     * @return mixed
     */
    function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    /**
     *
     */
    public function toggleOneImage()
    {
        $this->one_image = !$this->one_image;
        $this->save();
    }
}
