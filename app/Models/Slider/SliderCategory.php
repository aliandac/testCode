<?php

namespace App\Models\Slider;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail(int $id)
 * @method static create(array $array)
 * @method static where(string $string, int $id)
 * @method static find(int $id)
 */
class SliderCategory extends Model
{
    protected $table = "slider_categories";
    protected $guarded = [];

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
