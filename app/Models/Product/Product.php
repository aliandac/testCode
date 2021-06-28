<?php

namespace App\Models\Product;

use App\Models\Company\Company;
use App\Models\LogActivity;
use App\Services\FullTextSearch\FullTextSearch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
/**
 * Class Fair
 * @package App\Models\Fair
 * @method static Builder where($id, $value)
 * @method static Builder get()
 * @method static Builder first($id)
 * @method static create(array $except)
 * @method static findOrFail(int $id)
 */
class Product extends Model
{

    use FullTextSearch;

    protected $searchable = ['product.name','product.content','product.tags'];


    /**
     * @var string
     */
    protected $primaryKey = 'id';


    protected $hidden=['created_at','updated_at','company'];
    protected $table = "product";
    protected $guarded = ['id'];

    public function getLogs(){
        return $this->hasMany(LogActivity::class,'log_id','id')->where('subject','product');
    }



    public function getImage(){
        return $this->hasMany(ProductImages::class,'product','id')->where('active',1);
    }

    public function firstImage(){
        return $this->hasOne(ProductImages::class,'product','id')->where('active',1);
    }

    public function oneImage(){
        return $this->hasOne(ProductImages::class,'product','id')->where('one_image','=',1)->where('active',1);
    }

    public function getCompany(){
        return $this->hasOne(Company::class,'id','company');
    }
    public function getCategory(){
        return $this->hasOne(ProductCategory::class,'id','category');
    }
    public function categories() {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    /**
     * @param $limit
     * @param string $ellipsis
     * @return string
     */
    function shortDescription($limit, $ellipsis = '...')
    {
        $string = (substr($this->content, 0, $limit));
        return sprintf('%s %s', $string, $ellipsis);
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
    function getTagsAsArrayAttribute()
    {
        return explode(',',$this->tags);
    }
    public function scopeFiltrele($query , $request)
    {
        if($request->has('tags'))
        {
            $tag=$request->get('tags');

            $query=$query->where('tags','like',"%$tag%");
        }

        return $query;
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
     * @param bool $save
     * @return bool
     */
    public function toggleType()
    {
        $this->home_type = !$this->home_type;
        $this->save();
    }
}
