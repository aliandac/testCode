<?php


namespace App\Repositories;


use App\Models\Category as CategoryAlias;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;

/**
 * Class Category
 * @package App\Repositories
 */
class Category implements RepositoryInterface
{
    /**
     * @var CategoryAlias $category
     */
    private $category;

    /**
     * Category constructor.
     * @param $category
     */
    public function __construct($category)
    {
        $this->category = $category;
    }


    /**
     * @return CategoryAlias|Builder
     *
     */
    function getAll()
    {
        return $this->category::get();
    }

    /**
     * @param $id
     * @return CategoryAlias|array[]|Builder|Collection
     */
    function get($id)
    {
        return $this->category->where('id', $id)->get();
    }

    /**
     * @param $id
     * @return CategoryAlias|Builder
     */
    function find($id)
    {
        return $this->category->find($id);
    }

    /**
     * @param $id
     * @return int
     */
    function delete($id)
    {
        return $this->category->find($id)->delete();
    }

    /**
     * @param $id
     * @param $data
     * @return int
     */
    function update($id, $data)
    {
        return $this->category->find($id)->update($data);
    }
}
