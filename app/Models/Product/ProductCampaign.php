<?php

namespace App\Models\Product;

use App\Models\Company\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @method static paginate(int $int)
 * @method static findOrFail($id)
 * @method static create(array $except)
 */
class ProductCampaign extends Model
{
    /**
     * @var string
     */
    protected $primaryKey = 'id';


    protected $table = "product_campaign";
    protected $guarded = ['id'];

    /**
     * @return HasOne
     */
    public function getCompany(){
        return $this->hasOne(Company::class,'id','company');
    }

    /**
     * @return HasOne
     */
    public function getCategory(){
        return $this->hasOne(ProductCategory::class,'id','category');
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
