<?php


namespace App\Repositories;




/**
 * Interface RepositoryInterface
 * @package App\Repositories
 *
 */
interface RepositoryInterface
{

    function getAll();

    function get($id);

    function find($id);

    function delete($id);

    function update($id,$data);

}
