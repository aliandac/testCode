<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Query\Builder;

/**
 * Class Fair
 * @package App\Models\Fair
 * @method static Builder where($id, $value)
 * @method static Builder get()
 * @method static Builder first($id)
 * @method static findOrFail($id)
 * @method static create(array $except)
 */
class ProductCategory extends Model
{
    /**
     * @var string
     */
    protected $primaryKey = 'id';


    protected $hidden = ['updated_at','created_at','active','rank','keywords','description','image','parent_id','seo_url'];
    protected $table = "product_category";
    protected $guarded = ['id'];

    /**
     * @return HasMany
     *
     */
    public function children()
    {
        return $this->hasMany(ProductCategory::class, 'parent_id', 'id')->orderBy('rank')->where('active',1);
    }

    /**
     * @return HasMany
     */
    public function requests()
    {

        return $this->hasMany(Product::class, 'category', 'id');
    }
    /**
     * @return BelongsTo
     *
     */
    public function parent()
    {
        return $this->belongsTo(ProductCategory::class, 'parent_id', 'id')->where('active',1);
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

    /**
     * @return HasMany
     */
    public function childs() {
        return $this->hasMany(ProductCategory::class, 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function products() {
        return $this->hasManyThrough(Product::class, ProductCategory::class, 'parent_id', 'category', 'id');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function getCampaign() {
        return $this->hasManyThrough(ProductCampaign::class, ProductCategory::class, 'parent_id', 'category', 'id');
    }
    /**
     * @return HasMany
     */
    public function campaign() {
        return $this->hasMany(ProductCampaign::class, 'category')->orderBy('rank');
    }
    /**
     * @param Builder|ProductCategory $query
     * @return mixed
     */
    function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}
